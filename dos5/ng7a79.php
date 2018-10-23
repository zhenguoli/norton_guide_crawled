


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3bh            change current directory (chdir)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3bh            change current directory (chdir)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3bh            change current directory (chdir)</b></title>
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
<a href="ng77c3.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng7d90.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Bh            Change Current Directory (CHDIR)</B>

    Changes the current directory to a specified path.

        <B>Entry</B>   AH    = 3Bh
                DS:DX = Pointer to ASCIIZ name of new default directory

        <B>Return</B>  AX = Error code, if CF is set
                     | 03h Path not found

    ------------------------------------------------------------------

    Function 3Bh changes the current directory to the directory whose
    path is specified in the ASCIIZ string at address DS:DX; the
    string length is limited to 64 characters.

    The path name may include a drive letter. If a drive other than
    the default drive is specified as part of the new directory path,
    this function changes the current directory on that drive but does
    not change the default drive.
</pre><hr><b>See Also:</b> <a href="ng2aef.php">0eh</a> <a href="ng142a8.php">47h</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

