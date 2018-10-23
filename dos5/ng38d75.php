


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - Norton Guide, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - Norton Guide">
<title>ClipX - DOS 5.0 Ref. - Norton Guide</title>
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
<a href="ng38c9d.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng38fd8.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc DisplayMode
 dmInfoLevel    db ?            ; Information level (must be zero)
 dmReserved1    db ?            ; Reserved
 dmDataLength   dw ?            ; Length of remaining data, in bytes (14d)
 dmFlags        dw ?            ; Control flags (0|1=intensity off|on)
 dmMode         db ?            ; Display mode (1=text; 2=graphics)
 dmReserved2    db ?            ; Reserved
 dmColors       dw ?            ; Number of colors available
 dmWidth        dw ?            ; Screen width in pixels (graphics)
 dmLength       dw ?            ; Screen length in pixels (graphics)
 dmColumns      dw ?            ; No. of text columns
 dmRows         dw ?            ; No. of text rows
ends                            ; = 18d bytes
</pre><hr><b>See Also:</b> <a href="ng10233.php">440Ch /7fh</a> <a href="ngf8db.php">440Ch /5fh</a> <pre></pre><hr><center><b>
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

