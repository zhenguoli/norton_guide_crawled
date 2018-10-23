


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3eh            close file with handle</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3eh            close file with handle</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3eh            close file with handle</b></title>
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
<a href="ng8416.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng9336.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Eh            Close File with Handle</B>

    Closes an open file.

        <B>Entry</B>   AH = 3Eh
                BX = File handle

        <B>Return</B>  AX = Error code, if CF is set
                     | 06h Invalid handle

    ------------------------------------------------------------------

    This function flushes the file's buffers, unlocks any locked
    regions of the file, releases the handle, and updates the disk
    directory to reflect any changes in the file size, date, or time.

    Although closing a file invalidates the corresponding handle, DOS
    may reuse the handle to identify a file that is subsequently
    opened or created. Programs can use Is File or Device Remote
    (function 440ah) to determine whether a given handle is valid.
</pre><hr><b>See Also:</b> <a href="ng7d90.php">3ch</a> <a href="ng8416.php">3dh</a> <a href="ng16dfc.php">4ch</a> <a href="ng1a846.php">5ah</a> <a href="ng1fcb1.php">68h</a> <a href="ng33843.php">Dev0Eh</a> <a href="nge2c8.php">440ah</a> <pre></pre><hr><center><b>
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

