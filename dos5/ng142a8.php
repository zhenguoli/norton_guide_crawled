


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 47h            get current directory (getdir)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 47h            get current directory (getdir)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 47h            get current directory (getdir)</b></title>
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
<a href="ng13c94.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng14632.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 47h            Get Current Directory (GETDIR)</B>

    Returns the full path of the current directory on the specified
    drive.

        <B>Entry</B>   AH    = 47h
                DL    = Drive number (0 = default, 1 = A, etc.)
                DS:SI = Pointer to a 64-byte buffer

        <B>Return</B>  Buffer filled
                AX changed
                or
                AX = Error code, if CF is set
                     | 0Fh Invalid drive

    ------------------------------------------------------------------

    This function returns the full pathname of the current directory,
    excluding the drive designator and initial backslash character, as
    an ASCIIZ string at the memory buffer pointed to by DS:SI.

    The pathname may be as long as 63 bytes (without the initial
    backslash), plus the terminating zero byte. If the current
    directory is the root, the function returns a null ASCIIZ string
    (that is, the first byte of the buffer will be zero).
</pre><hr><b>See Also:</b> <a href="ng7a79.php">3bh</a> <a href="ng3165.php">19h</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

