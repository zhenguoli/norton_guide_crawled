


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4400h          get device data</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4400h          get device data</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4400h          get device data</b></title>
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
<a href="ngb028.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngc714.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4400h          Get Device Data</B>

    Returns information about a handle, such as whether it identifies
    a file or a device.

        <B>Entry</B>   AX = 4400h
                BX = Device or file handle

        <B>Return</B>  DX = Device information
                AX changed
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle

    ------------------------------------------------------------------

    The information returned in the DX register is:

        <B>Disk file (DX bit 7 = 0)</B>
        <B>Bit     Description</B>
        0-5     Drive number (0 = A, 1 = B, etc.)
        6       1 = File has not been written to
        7       0 = Handle identifies a file (not a device)
        8-15    Zero


        <B>Device (DX bit 7 = 1)</B>
        <B>Bit     Description</B>
        0       1 = Console input device
        1       1 = Console output device
        2       1 = Null device
        3       1 = Clock device
        4       1 = Special device
        5       1 = Binary mode, 0 = ASCII mode
        6       0 = EOF returned if device is read
        7       1 = Handle identifies a device (not a file)
        8-15    Identical to high 8 bits of the dhAttribute field
                in the DeviceHeader structure for the device

    ------------------------------------------------------------------

    <B>Input and Output Modes</B>
    I/O modes determine how character devices process input and
    output. DOS has two I/O modes: ASCII and binary (sometimes called
    "cooked" and "raw", respectively).

    The chief difference between these two modes is the way in which
    DOS processes control characters. In ASCII mode, DOS checks for
    control characters as it processes input or output for a device.
    If it encounters a control character, it removes the character
    from the input and carries out its corresponding action:

        Ctrl-C   Passes control to the Ctrl-C exception handler.
                 Subsequent actions depend on the current handler;
                 the default handler terminates the program.
        Ctrl-P   Copies all subsequent input characters, up to the
                 next Ctrl-P, to the printer device.
        Ctrl-S   Suspends further output to the device. The next input
                 character restores output.
        Ctrl-Z   Marks the end of the file. Subsequent calls to Int
                 21h function 3Fh (Read File or Device) return zero
                 bytes.


    In ASCII mode, using function 3Fh (Read File or Device) to <B>read</B>
    from the standard input device, DOS reads characters from the
    keyboard and copies the characters to standard output. It checks
    for control characters (ctrl-c etc.) and for the special line
    editing keys (F1 thru F6, backspace, left, right, del, ins, esc,
    and enter); it one is found, the corresponding (editing) action is
    carried out and the control character/editing key code is removed
    from the input.

    In binary mode, DOS reads the exact number of characters requested
    by the program. It does not copy characters to the screen, nor
    does it process editing keys and control characters. Instead, it
    reads all characters as input.


    In ASCII mode, using function 40h (Write File or Device) to <B>write</B>
    to the standard output device, DOS sends all characters to the
    screen, checks at the keyboard for control characters as it writes
    and, if it finds one, carries out its corresponding action. Tab
    characters (ASCII 09h) are expanded to space characters based on
    8-space tab settings. DOS continues to write characters to the
    screen until it has sent the requested number of characters or
    reached an end-of-file character (ASCII 1Ah).

    In binary mode, DOS writes the exact number of characters
    requested by the program. It does not process control characters
    (except CR and LF characters), expand tab characters, or stop
    writing at an end-of-file character.


    By <B>default</B>, the DOS I/O mode is ASCII. A program can determine or
    change the current I/O mode for a device by using functions 4400h
    or 4401h.
    The I/O mode is a property of the device handle and affects the
    input and output only of those programs that own the handle. Note,
    however, that the standard devices are shared by all programs. If
    a program needs to change the device attributes of a standard
    device, it should open the device using function 3Dh (Open File
    with Handle) using its device name and an appropriate access code.

    ------------------------------------------------------------------

    <B>Example</B>

        ; Test redirection of standard input/output
        ; Entry : Handle = 0 (StdIn) or 1 (StdOut)
        ; Exit  : cf = 1     Error on DOS call
        ;         else zf=0  Device is redirected
        ;              zf=1  Device is not redirected
        ; Used  : ax,bx,dx,flags

        MACRO isDeviceRedirected Handle
        local ahead
        mov     bx,Handle       ; StdIn (Stdout)
        mov     ax,4400h        ; Get Device Data
        int     21h             ;   using DOS
        jc      ahead           ; cf set on error
        mov     al,81h + Handle ; 81h (82h)
        and     dl,al           ; Isolate bits 7,0 (7,1)
        cmp     al,dl           ; zf=1 if original device
        ahead:                  ;   attributes, cf=0
        ENDM
</pre><hr><b>See Also:</b> <a href="ngc714.php">4401h</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

