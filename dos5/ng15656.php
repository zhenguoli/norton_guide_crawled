


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4b00h          load and execute program (exec)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4b00h          load and execute program (exec)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4b00h          load and execute program (exec)</b></title>
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
<a href="ng14fd0.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1618b.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4B00h          Load and Execute Program (EXEC)</B>

    Loads a program into memory, creates a new program segment prefix
    (PSP), and transfers control to the new program.

        <B>Entry</B>   AX    = 4B00h
                DS:DX = Pointer to ASCIIZ program name (.COM or .EXE)
                ES:BX = Pointer to a LoadExec structure

        <B>Return</B>  Expect all registers to be changed, except CS:IP
                AX = Error code, if CF is set
                     | 01h Invalid function number
                     | 02h File not found
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied
                     | 08h Insufficient memory
                     | 0Ah Invalid environment
                     | 0Bh Invalid format

    ------------------------------------------------------------------

    Before function 4B00h (EXEC) is invoked, DS:DX must point to a
    zero-terminated string that specifies the program to load. The
    program name must be a valid DOS filename, and the file must be a
    valid .COM or .EXE program. ES:BX must point to a LoadExec
    structure containing pointers to data that DOS copies to the child
    program's PSP and environment block.

    There must be enough free memory for DOS to load the program file.
    All open files of the parent program, except files that were
    opened in no-inheritance mode, are available to the newly loaded
    program.

    ------------------------------------------------------------------

    <B>Example</B>

        ideal
        model   small

        STACK   100h
        DATASEG
        include "strucs.inc"            ; Get LoadExec definition
        prog_name db "c:\command.com",0
        cmd_line  db 7," /c DIR",0dh
        exec_args LoadExec \
          &lt;0000h, dgroup:cmd_line, dgroup:dummyFCB, dgroup:dummyFCB&gt;
        saved_stack     dd ?
        dummyFCB        db 11 dup (" "), 5 dup (0)

        CODESEG
    start:
        StartupCode
        assume  es:nothing
        mov     bx,TOP_OF_MEM           ; Must shrink memory before exec
        mov     ax,es                   ; ax = PSP segment
        sub     bx,ax                   ; bx = no. of paragraphs needed
        mov     ah,4ah                  ; Resize memory block (at es)
        int     21h
        jc      exec_failed
        mov     [word low  saved_stack],sp ; Save stack info
        mov     [word high saved_stack],ss
        mov     dx,offset prog_name     ; ds:dx -&gt; program name
        mov     bx,ds
        mov     es,bx
        mov     bx,offset exec_args     ; es:bx -&gt; parameter block
        mov     ax,4b00h                ; Load and Execute Program
        int     21h
        assume  nothing,cs:@code
        mov     ax,dgroup               ; (Keep CF flag intact)
        mov     ds,ax
        assume  ds:dgroup
        mov     ss,[word high saved_stack]
        mov     sp,[word low  saved_stack]
        assume  ss:@stack
        sti                             ; Set IF and clear DF
        cld                             ;   just in case...
        jc      exec_failed
        mov     ah,4dh                  ; Get Child-Program Return Value
        int     21h                     ;   into al register
        ; ...
        jmp short exit
    exec_failed:
        mov     al,0ffh
    exit:             
        mov     ah,4ch                  ; End Program, with return code
        int     21h

        SEGMENT top_of_mem para         ; Link a void segment last
        ENDS                            ;   to calculate top of memory
                                        ;   (don't use with DOSSEG)
        END start
</pre><hr><b>See Also:</b> <a href="ng16969.php">4b05h</a> <a href="ng8416.php">3dh</a> <a href="ng14fd0.php">4ah</a> <a href="ng171ed.php">4dh</a> <a href="ng19dc7.php">59h</a> <a href="ng3e6e1.php">PSP</a> <a href="ng3cf16.php">LoadExec</a> <pre></pre><hr><center><b>
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

