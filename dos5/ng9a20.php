


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 40h            write file or device</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 40h            write file or device</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 40h            write file or device</b></title>
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
<a href="ng9336.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng9f2e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 40h            Write File or Device</B>

    Writes bytes from a buffer to an open file or device.

        <B>Entry</B>   AH    = 40h
                BX    = Handle of file or device
                CX    = Number of bytes to write <U>(&gt; 0)</U>
                DS:DX = Address of buffer

        <B>Return</B>  AX = Number of bytes written
                or
                AX = Error code, if CF is set
                     | 05h Access denied (file is read-only)
                     | 06h Invalid handle

    ------------------------------------------------------------------

    This function writes data to the file or device whose handle is in
    BX. When DOS writes to a file, it writes data starting at the
    current location of the file pointer. When this function returns,
    the file pointer is positioned at the byte immediately following
    the last byte written to the file (i.e. incremented by the number
    of bytes written).

    A program can write bytes to anywhere in the file by calling
    function 42h (LSEEK) to move to file pointer before writing data.

    Writing 0 (zero) bytes <U>truncates</U> the file at the current position
    of the file pointer.

    If the number of bytes written is smaller than the number
    requested, the destination file or disk is full. The carry flag is
    <B>not</B> set in this situation.
</pre><hr><b>See Also:</b> <a href="nga2a0.php">42h</a> <a href="ng901e.php">3eh</a> <a href="ng1a846.php">5ah</a> <a href="ng1fcb1.php">68h</a> <a href="ng19dc7.php">59h</a> <a href="ngb40a.php">4400h</a> <a href="ng31963.php">Dev08h</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

