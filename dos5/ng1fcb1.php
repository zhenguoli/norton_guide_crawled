


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 68h            commit file                                  dos 3.3+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 68h            commit file                                  dos 3.3+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 68h            commit file                                  dos 3.3+</b></title>
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
<a href="ng1f845.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1ff99.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 68h            Commit File                                  DOS 3.3+</B>

    Flushes all stored (buffered) data for a file without closing the
    file; this ensures that the contents of the file are current.

        <B>Entry</B>   AH = 68h
                BX = File handle

        <B>Return </B> AX = Error code, if CF is set
                     | 06h Invalid handle
                     | ??

    ------------------------------------------------------------------

    This function provides a more efficient way to update file
    contents than closing a file and immediately reopening it.
    However, if a program opens or creates a file by specifying the
    flag open_flags_commit (4000h) with function 6ch (Extended Open/
    Create), the system updates the file each time the file is written
    to.
</pre><hr><b>See Also:</b> <a href="ng1ff99.php">6ch</a> <a href="ng2896.php">0dh</a> <a href="ng136fa.php">45h</a> <pre></pre><hr><center><b>
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

