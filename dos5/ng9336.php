


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3fh            read file or device</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3fh            read file or device</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3fh            read file or device</b></title>
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
<a href="ng901e.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng9a20.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Fh            Read File or Device</B>

    Reads bytes from an open file or device into a buffer.

        <B>Entry</B>   AH    = 3Fh
                BX    = Handle of file or device
                CX    = Number of bytes to read
                DS:DX = Address of buffer

        <B>Return</B>  AX = Number of bytes read into buffer
                or
                AX = Error code, if CF is set
                     | 05h Access denied
                     | 06h Invalid handle

    ------------------------------------------------------------------

    This function reads data from the file or device whose handle is
    in BX. When DOS reads from a file, it reads data starting at the
    current location of the file pointer. When this function returns,
    the file pointer is positioned at the byte immediately following
    the last byte read from the file (i.e. incremented by the number
    of bytes read).

    If this function returns the carry flag clear and AX = 0, the file
    pointer was at the end of the file when the function was called.
    If the carry flag is clear and AX is less than the number of bytes
    requested, DOS reached the end of the file during the read
    operation.

    A program can read from anywhere in a file by calling function 42h
    (LSEEK) to move to file pointer before reading data.


    This function can also be used to read from the standard input
    device (standard handle 0000h), typically the <B>keyboard</B>. If DOS is
    reading from standard input, this function reads either the
    specified number of bytes, or all bytes up to the next carriage
    return, whichever is less. (If the number of bytes specified is at
    least two larger than the number of characters typed, the
    carriage-return line-feed pair will be returned as the last two
    bytes, and will count as two bytes.)
</pre><hr><b>See Also:</b> <a href="nga2a0.php">42h</a> <a href="ng19dc7.php">59h</a> <a href="ngb40a.php">4400h</a> <a href="ng165f8.php">4b03h</a> <a href="ng303d6.php">Dev04h</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

