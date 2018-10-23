


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 23h                 ctrl-c handler</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 23h                 ctrl-c handler</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 23h                 ctrl-c handler</b></title>
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
<a href="ng273cf.php">[&lt;&lt;Previous Entry]</a> <a href="ng26e43.php">[^^Up^^]</a> <a href="ng28dea.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 23h                 Ctrl-C Handler</B>

    Ctrl-C Handler (Interrupt 23h) carries out program-specific
    actions in response to the Ctrl-C (ASCII 03h) key combination
    being pressed. DOS issues this interrupt if it receives the Ctrl-C
    character while processing a system function. The handler carries
    out its actions then returns to the system in order to restart the
    system function or terminate the current program.

    <B>Programs must not issue Interrupt 23h.</B>

    ------------------------------------------------------------------

    DOS sets the current Ctrl-C handler when starting a program,
    copying the address of the parent program's handler to both the
    vector-table entry and offset 0Eh in the new program's PSP.
    Although a program can change the vector-table entry, it must not
    change the address in its PSP, since DOS uses this address to
    restore the parent program's handler.

    DOS does not immediately issue Int 23h when the user presses the
    Ctrl-C key combination. Instead, the system places the Ctrl-C
    character (ASCII 03h) in the keyboard buffer; if no other
    characters are ahead of the control character, the system
    processes it while carrying out a system function. For most
    computers, DOS also places a Ctrl-C character in a buffer when the
    user presses the Ctrl-Break key combination. Pressing this
    combination places a Ctrl-C character ahead of all other
    characters in the keyboard buffer.

    DOS checks for the Ctrl-C character while carrying out character
    I/O functions (Int 21h functions 01h through 0Ch). It also checks
    for the character while carrying out other system functions - but
    only if the Ctrl-C Check Flag is set. If the I/O mode for the
    keyboard (or input device) is binary, the system disables Ctrl-C
    character processing while a program uses Read File or Device
    (Int 21h function 3Fh) and the Ctrl-C character is read as input.

    ------------------------------------------------------------------

    <B>Before</B> issuing Int 23h, DOS does the following:

        .   Sets all registers to the values they had when the
            interrupted system function was initially called.

        .   Sets the program's stack to be the current stack. When the
            handler receives control, the stack has the following
            contents (from the top of the stack):

                The return address (CS:IP) and the flags needed for
                the IRET instruction back to the system.

                The return address (CS:IP) and the flags needed for
                the IRET instruction back to the program.

        .   Sets to zero any internal system variables, such as the
            ErrorMode and InDOS variables, so that the handler can
            call system functions or even return directly to the
            program without disrupting system operations.

    ------------------------------------------------------------------

    An Int 23h handler can call any system function.

    Upon returning from Interrupt 23h, DOS checks the method of return
    to determine what action to take. If the handler sets the carry
    flag and returns with the RETF instruction, DOS terminates the
    program by calling End Program (Int 21h function 4ch). If the
    handler returns with the IRET instruction or with the RETF
    instruction after clearing the carry flag, the system repeats the
    call to the system function, starting the function's action again
    from the beginning. In this case, the handler must preserve all
    registers, restoring them before returning to the system.


    COMMAND.COM provides the <B>default Ctrl-C handler</B>, which terminates
    the current program unless a batch file is running, in which case
    the handler prompts the user to continue (or not) with the next
    command in the file. Since prompting the user suspends execution
    of the current program until the user responds, programs that lock
    resources (especially over a network) should replace the default
    handler. In general, a program should make sure that other
    programs can access resources even while it is suspended.

    ------------------------------------------------------------------

        <B>Example</B>

        ; Dummy Int 1Bh/23h/24h handlers prevent
        ; DOS's default handlers from activating.
        ; (Int 1Bh is issued by Int 09h handler
        ; and chained by DOS)

        UDATASEG
        old_i1bh dd ?           ; Saved Int 1bh vector
        CODESEG
        label i1bh far          ; Disable ".display
        proc i23h far           ; Ctrl-C handler
                iret            ; Ignore ctrl-c keystroke
        endp
        proc i24h far           ; Critical-Error handler
                mov     al,03h  ; "Fail": failing I/O function
                iret            ;         returns carry flag set
        endp
        proc install_i1Bh_i23h_i24h
                assume  ds:dgroup
                push    ds
                mov     ax,351bh        ; Save Int 1bh vector
                int     21h
                push    es bx
                pop     [old_i1bh]
                mov     ax,cs
                mov     ds,ax
                assume  ds:@code
                lea     dx,[i1bh]       ; Install Int 1bh vector
                mov     ax,251bh
                int     21h
                lea     dx,[i23h]       ; Install Ctrl-C handler
                mov     ax,2523h
                int     21h
                lea     dx,[i24h]       ; Install Critical-Error handler
                mov     ax,2524h
                int     21h
                pop     ds
                ret
        endp
        proc restore_i1bh
                assume  ds:dgroup       ; (DOS auto-restores Int 23h and
                push    ds              ;  24h vectors on termination)
                lds     dx,[old_i1bh]
                assume  ds:nothing
                mov     ax,251bh
                int     21h
                pop     ds
                assume  ds:dgroup
                ret
        endp
</pre><hr><b>See Also:</b> <a href="ng3e6e1.php">PSP</a> <a href="ng60f3.php">3301h</a> <a href="ng9336.php">3fh</a> <a href="ngb40a.php">4400h</a> <a href="ng16dfc.php">4ch</a> <pre></pre><hr><center><b>
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

