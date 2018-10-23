


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
<a href="ng3a146.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3a618.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc ExeHeader                 ; Relocatable program header structure
 exSignature    dw 5A4Dh        ; .EXE file signature ("MZ")
 exExtraBytes   dw ?            ; No. of bytes in last (partial) page
 exPages        dw ?            ; No. of whole and partial pages in file
 exRelocItems   dw ?            ; No. of pointers in relocation table
 exHeaderSize   dw ?            ; Size of header, in paragraphs
 exMinAlloc     dw ?            ; Minimum allocation, in paragraphs
 exMaxAlloc     dw ?            ; Maximum allocation, in paragraphs
 exInitSS       dw ?            ; Initial SS value
 exInitSP       dw ?            ; Initial SP value
 exCheckSum     dw ?            ; Checksum (one's complement)
 exInitIP       dw ?            ; Initial IP value
 exInitCS       dw ?            ; Initial CS value
 exRelocTable   dw ?            ; File offset of relocation table
 exOverlay      dw ?            ; Overlay number (non-zero if overlay)
ends                            ; = 28d bytes
</pre><hr><center><b>
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

