


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
<a href="ng3ab62.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3af21.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc FCB                       ; (FCB functions are obsolete)
 fcbDriveID     db ?            ; Drive number (0 = default, 1 = A, etc.)
 fcbFileName    db 8 dup (?)    ; Filename (space-padded ASCII)
 fcbExtent      db 3 dup (?)    ; File extension (space-padded ASCII)
 fcbCurBlockNo  dw ?            ; Current block number
 fcbRecSize     dw ?            ; Record size
 fcbFileSize    db 4 dup (?)    ; Size of file in bytes
 fcbFileDate    dw ?            ; Date file last modified
 fcbFileTime    dw ?            ; Time file last modified
 fcbReserved    db 8 dup (?)    ; Reserved
 fcbCurRecNo    db ?            ; Current record number
 fcbRandomRecNo db 4 dup (?)    ; Random record number
ends                            ; = 37d bytes
</pre><hr><b>See Also:</b> <a href="ng3b46.php">29h</a> <a href="ng3ab62.php">ExtendedFCB</a> <pre></pre><hr><center><b>
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

