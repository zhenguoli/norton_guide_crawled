


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - Norton Guide, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - Norton Guide">
<title>ClipX - DOS 5.0 Ref. - Norton Guide</title>
<style type="text/css">
<!--
A
{
color:black;
text-decoration:none
}
a:hover
{
background-color:blue;
color:white;
}
-->
</style>
</head>
<body bgcolor="white">
<a href="http://www.ousob.com" target="_top"><img align="right" alt="http://www.ousob.com" border="0" src="/images/cxrefine.gif"></a>
<script type="text/javascript"><!--
google_ad_client = "pub-3334398715559629";
/* 728x90, created 10/8/08 */
google_ad_slot = "3908912935";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br>
<a href="ng3fcbb.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> [Next Entry&gt;&gt;]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

; Miscellaneous DOS I/O macros

        StdIn  = 0000h
        StdOut = 0001h


macro DosCall Function
        if Function LT 100h
        mov     ah,Function
        else
        mov     ax,Function
        endif
        int     21h
        endm

;
; Set character device in binary ("raw") mode
; - disables recognition of ctrl-c, ctrl-p, ctrl-s, ctrl-z
; - disables DOS's editing keys during input from StdIn
; Entry : bx = handle of character device (e.g. StdOut)
; Exit  : cf = 1: error on DOS call
;         cf = 0: char. device in binary mode
; Used  : ax,dx,flags
; Note  : Use SetCooked before program termination to
;         restore the I/O mode of a standard device
;         (handle 0..4) to the default ascii mode.
;
macro SetRaw
        local   ahead
        DosCall 4400h           ; Get Device Data (into dx)
        jc      ahead
        or      dl,20h          ; Bit 5 = 1 sets binary mode
        sub     dh,dh           ; Clear bits 8-15
        DosCall 4401h           ; Set Device Data
        ahead:
        endm

;
; Set character device in ascii ("cooked") mode
; - enables recognition of ctrl-c, ctrl-p, ctrl-s, ctrl-z
; - enables DOS's editing keys during input from StdIn
; Entry : bx = handle of character device (e.g. StdIn)
; Exit  : cf = 1: error on DOS call
;         cf = 0: char. device in ascii mode
; Used  : ax,dx,flags
;
macro SetCooked
        local   ahead
        DosCall 4400h           ; Get Device Data (into dx)
        jc      ahead
        and     dx,11011111b    ; Clear bits 5, 8-15
        DosCall 4401h           ; Set Device Data
        ahead:
        endm

;
; Test redirection of standard input/output
; Entry : Handle = 0 (StdIn) or 1 (StdOut)
; Exit  : cf = 1     Error on DOS call
;         else zf=0  Device is redirected
;              zf=1  Device is not redirected
; Used  : ax,bx,dx,flags
;
macro isDeviceRedirected Handle
        local ahead
        mov     bx,Handle       ; StdIn (Stdout)
        DosCall 4400h           ; Get Device Data (into dx)
        jc      ahead           ; cf set on error
        mov     al,81h + Handle ; 81h (82h)
        and     dl,al           ; Isolate bits 7,0 (7,1)
        cmp     al,dl           ; zf=1 if original device
        ahead:                  ;   attributes, cf=0
        endm

;
; Has a key been pressed?
; Entry : N/A
; Exit  : zf = 1 if no key available
; Used  : flags
;
macro isKey
        push    ax
        DosCall 0Bh             ; Check StdIn status
        test    al,al
        pop     ax
        endm

;
; (Wait for and) Read key from keyboard
; Entry : N/A
; Exit  : zf=0: normal key  : ah = 0, al = ASCII code
;         zf=1: extended key: ah = extended code, al = 0
; Used  : ax,flags
; Note  : ax = 0003h if Ctrl-C/Ctrl-Break pressed.
;         Doesn't display the character read.
;
macro ReadKey
        local ahead
        DosCall 07h             ; Direct console input
        sub     ah,ah
        cmp     al,ah
        jnz     ahead
        DosCall 07h             ; Extended: get 2nd code
        mov     ah,al
        sub     al,al
        ahead:
        endm

;
; Same as ReadKey, but uses fnx 3fh
; Used  : ax,bx,cx,dx,flags
;
macro ReadKey3F
        local ahead
        push    ds
        mov     bx,StdIn
        SetRaw                  ; Set keyboard in binary mode
        mov     dx,ss
        mov     ds,dx
        push    dx
        mov     dx,sp           ; ds:dx -&gt; 1-byte buffer
        mov     cx,1            ;   on the stack
        DosCall 3fh             ; Read Device
        xchg    bx,dx
        mov     al,[bx]
        xchg    bx,dx
        sub     ah,ah           ; Assume normal key code
        cmp     al,ah
        jnz     ahead
        DosCall 3fh             ; Extended: get 2nd code
        xchg    bx,dx
        mov     ah,[bx]
        xchg    bx,dx
        sub     al,al
        ahead:
        pop     dx              ; Clean up stack
        push    ax              ; Save key pressed
        pushf                   ;   and flags
        SetCooked               ; Restore keyboard
        popf                    ;   to ascii mode
        pop     ax
        pop     ds
        endm

;
; Read one line from keyboard (StdIn) into memory buffer,
; permitting the use of DOS's editing keys.
; Entry : ds = segment of Buffer
;         The byte size of Buffer must be &gt;= BufLen
; Exit  : Buffer updated, ax = no. of characters typed
; Used  : ax,bx,cx,dx,flags
; Note  :
;   DOS's line editor is active during input:
;   - F1..F6, left, right, backspace, ins, del, esc, enter
;     available for editing
;   - responds to ctrl-c, ctrl-p, ctrl-s, ctrl-z
;   - pressing F5 or Esc, or typing more characters than can
;     fit within one line will cause line wrap (scroll down)
;   - pressing Enter completes the function
;   - max. 127 characters can be input
;   Input is echoed to StdOut during editing.
;
;   If BufLen = 0, no input is read. If the no. of characters
;   typed is less than BufLen, a CR/LF pair (a CR character,
;   if one less) is returned as the last byte(s) and included
;   in the count. If the no. of characters typed is equal to
;   or greater than BufLen, AX is returned = BufLen, and the
;   rest of the characters (plus a CR/LF pair) remain in the
;   input and must be removed, for example, by flushing the
;   keyboard.
;         
macro ReadLine Buffer, BufLen
        mov     bx,StdIn
        SetCooked               ; Set keyboard in ascii mode
        lea     dx,[&amp;Buffer]
        mov     cx,BufLen
        DosCall 3Fh             ; Read Device
        endm

;
; Write one character to StdOut
; Entry : al = character
; Used  : bx,cx,dx,flags
;
macro WriteCh
        push    ds
        push    ax              ; Store character on stack
        mov     dx,ss
        mov     ds,dx
        mov     dx,sp
        mov     cx,1
        mov     bx,StdOut
        DosCall 40h             ; Write to Handle
        pop     ax
        pop     ds
        endm

;
; Write one CR/LF pair to StdOut
; Entry : N/A
; Used  : al and registers used by WriteCh
;
macro WriteCRLF
        mov     al,0dh
        WriteCh
        mov     al,0ah
        WriteCh
        endm

;
; Write zero-terminated string to StdOut
; Entry : ds = segment of string (AsciizID)
; Exit  : cx = string length
; Used  : ax,bx,cx,dx,flags
;
        EOS = 00h               ; End-of-string marker
macro WriteZ AsciizID
        local count, done
        lea     dx,[&amp;AsciizID]
        mov     al,EOS
        mov     bx,dx
        dec     bx
        count:
        inc     bx
        cmp     al,[bx]
        jnz     count
        mov     cx,bx
        sub     cx,dx
        jz      done
        mov     bx,StdOut
        DosCall 40h             ; Write to Handle
        done:
        endm

;
; Convert binary byte value to hex ascii
; Entry : al = binary value
; Exit  : al = low nibble, ah = high nibble
; Used  : ax,flags
;
macro HexB
        mov     ah,al
        if @Cpu and 2
        shr     al,4
        else
        shr     al,1
        shr     al,1
        shr     al,1
        shr     al,1
        endif
        cmp     al,10d          ; Convert to hex ascii
        sbb     al,69h
        das
        xchg    ah,al           ; ah = converted high nibble
        and     al,0fh          ; Repeat for low nibble
        cmp     al,10d
        sbb     al,69h
        das                     ; al = converted low nibble
        endm

;
; Write binary byte value to StdOut as hex ascii
; Entry : al = binary value
; Used  : ax and registers used by WriteCh
;
macro WriteHexB
        HexB
        push    ax
        mov     al,ah           ; Output high nibble
        WriteCh
        pop     ax              ; Output low nibble
        WriteCh
        endm                                                               Me
</pre><hr><b>See Also:</b> <a href="ngb40a.php">4400h</a> <pre></pre><hr><center><b>
<font size="-1">Online resources provided by: <a href="http://www.ousob.com" target="_top">http://www.ousob.com</a> ---  NG 2 HTML conversion by <a href="http://www.DaveP.Org" target="_top">Dave Pearson</a></b></center>
<hr>

<script type="text/javascript"><!--
google_ad_client = "pub-3334398715559629";
/* 728x90, created 10/8/08 */
google_ad_slot = "6846495220";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</html>

