


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 0dh            reset drive</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 0dh            reset drive</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 0dh            reset drive</b></title>
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
<a href="ng256f.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng2aef.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 0Dh            Reset Drive</B>

    Flushes all file buffers. Any write operations that are buffered
    by DOS are performed, and all waiting data is written to the
    appropriate drive.

        <B>Entry</B>   AH = 0Dh

        <B>Return</B>  Nothing

    ------------------------------------------------------------------

    Reset Drive does not update directory entries; programs must close
    changed files to ensure that the proper length of a changed file
    is recorded in the disk directory.

    This function is normally used by Ctrl-C interrupt handlers.
</pre><hr><b>See Also:</b> <a href="ng901e.php">3eh</a> <a href="ng136fa.php">45h</a> <a href="ng1fcb1.php">68h</a> <a href="ng27979.php">Int 23h</a> <pre></pre><hr><center><b>
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

