


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3ah            remove directory (rmdir)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3ah            remove directory (rmdir)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3ah            remove directory (rmdir)</b></title>
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
<a href="ng74cb.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng7a79.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Ah            Remove Directory (RMDIR)</B>

    Removes (deletes) the specified subdirectory.

        <B>Entry</B>   AH    = 3Ah
                DS:DX = Pointer to ASCIIZ directory name

        <B>Return</B>  AX = Error code, if CF is set
                     | 03h Path not found
                     | 05h Access denied (root / directory not empty)
                     | 10h Cannot delete current directory

    ------------------------------------------------------------------

    Function 3Ah removes the subdirectory whose path is specified in
    the zero-ended string at address DS:DX; the string length is
    limited to 64 characters. The string must be a valid DOS directory
    name and cannot contain wildcards.
</pre><hr><b>See Also:</b> <a href="ng74cb.php">39h</a> <a href="ng7a79.php">3bh</a> <a href="ng9f2e.php">41h</a> <a href="ng142a8.php">47h</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

