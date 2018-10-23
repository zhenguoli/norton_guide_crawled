


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 6ch            extended open/create                         dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 6ch            extended open/create                         dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 6ch            extended open/create                         dos 4.0+</b></title>
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
<a href="ng1fcb1.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng20cd5.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 6Ch            Extended Open/Create                         DOS 4.0+</B>

    This function combines the following functions:
        Create File with Handle (3Ch)
        Open File with Handle   (3Dh)
        Commit File             (68h)

        <B>Entry</B>   AH    = 6Ch
                AL    = 00h   (Reserved = 0)
                BX    = Open mode (access)     ;.ce. .... isss Raaa
                CX    = File attributes        ;          ..x. .xxx
                DH    = 00h   (Reserved = 0)   ;
                DL    = Action                 ;          eeee nnnn
                DS:SI = Pointer to ASCIIZ filename

        <B>Return</B>  AX = File handle
                CX = Action taken:
                     | 1 = File opened
                     | 2 = File created/opened
                     | 3 = File replaced/opened
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied

    ------------------------------------------------------------------

    The Open Mode code in BX can be a combination (ORable) of values
    from the following table:

        open_access_readonly     = 00h   Open the file for read-only
                                         access
        open_access_writeonly    = 01h   Open the file for write-only
                                         access
        open_access_readwrite    = 02h   Open the file for read-and-
                                         write access

        open_share_compatibility = 00h   Permit other programs any
                                         access to the file. On a
                                         given computer, any program
                                         can open the file any number
                                         of times with this mode. This
                                         is the <U>default</U> sharing value
        open_share_denyreadwrite = 10h   Do not permit any other
                                         program to open the file
        open_share_denywrite     = 20h   Do not permit any other
                                         program to open the file
                                         for write access
        open_share_denyread      = 30h   Do not permit any other
                                         program to open the file
                                         for read access
        open_share_denynone      = 40h   Permit other programs read or
                                         write access, but no program
                                         may open the file for
                                         compatibility access.

        open_flags_noinherit     = 80h   A child program created with
                                         function 4b00h (EXEC) does
                                         not inherit the file handle.
                                         If this mode is not set,
                                         child programs inherit the
                                         file handle.

        open_flags_nocrit_err  = 2000h   Interrupt 24h will not be
                                         called if a critical error
                                         occurs while DOS is opening
                                         this file. Instead, DOS
                                         simply returns an error value
                                         to the program.
        open_flags_commit      = 4000h   DOS commits the file (updates
                                         file contents on disk) after
                                         each write operation.

    ------------------------------------------------------------------

    The file attributes in CX (ignored if not creating a file) can be
    a combination of the following values: attr_normal, attr_readonly,
    attr_hidden, attr_system, attr_archive.


    The Action parameter in DL specifies the action to take if the
    file exists or if it does not exist. It can be a combination of
    the following values:

        file_open       = 01h           Open the file. Fail if the
                                        file does not exist.
        file_truncate   = 02h           Open the file and truncate it
                                        to zero length (replace
                                        existing file). Fail if the
                                        file does not exist.
        file_create     = 10h           Create a new file if the file
                                        does not already exist.

    ------------------------------------------------------------------

    <B>Network</B>
    If the specified file is on a network drive, function 6ch creates
    the file only if the network grants access to the drive or
    directory. Similarly, the function opens the file only if the
    network grants read, write, or both read and write access to the
    drive or directory.
</pre><hr><b>See Also:</b> <a href="ng7d90.php">3ch</a> <a href="ng8416.php">3dh</a> <a href="ng1fcb1.php">68h</a> <a href="ng14fd0.php">4ah</a> <a href="ng1ad95.php">5bh</a> <a href="ng28dea.php">Int 24h</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

