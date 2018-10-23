


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5f03h          make network connection                      dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5f03h          make network connection                      dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5f03h          make network connection                      dos 3.1+</b></title>
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
<a href="ng1c35c.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1d084.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5F03h          Make Network Connection                      DOS 3.1+</B>

    Creates a connection to a network device or drive, or redirects a
    local device or drive if a local name is specified.

        <B>Entry</B>   AX   = 5F03h
                BL    = Device type (local)
                        | 3 = printer
                        | 4 = drive
                CX    = User value to save (0)
                DS:SI = Pointer to ASCIIZ local device name
                        (max. 16 bytes)
                ES:DI = Pointer to ASCIIZ network name followed
                        by ASCIIZ password (max. 128 bytes total)

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (Network not running)
                     | 03h Path not found
                     | 05h Access denied (Bad password/device)
                     | 08h Insufficient memory
                     | 0Fh Invalid drive
                     | 12h No more files
                     | 57h Invalid parameter

    ------------------------------------------------------------------

    This function allows a program to redirect I/O from a local
    printer or disk drive to a network device. The program can also
    control access to the network device by means of a password.

    The parameter passed in CX specifies a value to be saved and
    returned to a program that calls function 5F02h (Get Assign-List
    Entry).
    If the Device Type is 03h, the local device is a printer, and
    the local device name must be PRN, LPT1, LPT2, or LPT3.
    If the Device Type is 04h, the local device is a disk drive and
    the string at DS:SI must specify either a drive letter followed by
    a colon or a null string. If a drive letter is specified, DOS
    redirects the drive to the network device. If a null string is
    specified, DOS attempts to provide access to the network device
    without redirecting a local disk drive.

    If the network device has no password, the second string at ES:DI
    must be a null string.
</pre><hr><b>See Also:</b> <a href="ng1c35c.php">5f02h</a> <a href="ng1d084.php">5f04h</a> <a href="ng19dc7.php">59h</a> <a href="ng22b46.php">1100h</a> <pre></pre><hr><center><b>
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

