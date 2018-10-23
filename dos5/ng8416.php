


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3dh            open file with handle</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3dh            open file with handle</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3dh            open file with handle</b></title>
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
<a href="ng7d90.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng901e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Dh            Open File with Handle</B>

    Opens any file with the specified access code, for input or
    output.

        <B>Entry</B>   AH    = 3Dh
                AL    = Open mode (access code)
                DS:DX = Pointer to ASCIIZ filename

        <B>Return</B>  AX = File handle, if CF clear
                or
                AX = Error code, if CF is set
                     | 02h File not found
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied
                     | 0Ch Open mode invalid

    ------------------------------------------------------------------

    Function 3Dh opens the file whose pathname is specified in the
    ASCIIZ string at DS:DX. This function opens any existing file,
    including hidden and system files. The access code byte in AL
    specifies the modes with which to open the file (see following).

    When the file is opened, the file pointer is set to zero (the
    first byte in the file). This function returns the error value 5
    if a program attempts to open a directory or volume identifier or
    to open a read-only file for write access.

    ------------------------------------------------------------------
    The access code in AL can be a combination (ORable) of values from
    the following table. The access value is <B>required</B>; the sharing and
    inheritance values are optional:

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
                                         compatibility access

        open_flags_noinherit     = 80h   A child program created with
                                         function 4b00h (EXEC) does
                                         not inherit the file handle.
                                         If this mode is not set,
                                         child programs inherit the
                                         file handle

    ------------------------------------------------------------------

    <B>Note</B>
    If the SHARE program is not loaded, DOS ignores the following
    modes: open_share_denyreadwrite, open_share_denywrite,
    open_share_denyread, and open_share_denynone. If this function
    fails because of a file-sharing error, a subsequent call to
    function 59h (get extended error) returns the error value that
    specifies a sharing violation.

    If the specified file is on a network drive, this function opens
    the file only if the network has granted read access, write
    access, or read-and-write access to the drive or directory.

    Child processes that inherit files also inherit their sharing and
    access restrictions.
</pre><hr><b>See Also:</b> <a href="ng7d90.php">3ch</a> <a href="ng1a846.php">5ah</a> <a href="ng1ad95.php">5bh</a> <a href="ng1ff99.php">6ch</a> <a href="ng19dc7.php">59h</a> <a href="ng33042.php">Dev0Dh</a> <a href="ng228c2.php">1000h</a> <pre></pre><hr><center><b>
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

