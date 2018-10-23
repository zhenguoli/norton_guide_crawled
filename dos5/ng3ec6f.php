


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
<a href="ng3ebcd.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3ef47.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc ReadWriteRequest          ; Device-Driver functions 04h, 08h, 09h
 rwrLength      db ?            ; Length of structure, in bytes
 rwrUnit        db ?            ; Unit number (block device only)
 rwrFunction    db ?            ; Function number (04h, 08h, or 09h)
 rwrStatus      dw ?            ; Status
 rwrReserved    db 8 dup (?)    ; Reserved
 rwrMediaID     db ?            ; INPUT:  media descriptor
 rwrBuffer      dd ?            ; INPUT:  buffer address
 rwrBytesSec    dw ?            ; INPUT:  no. of bytes/sectors to r/w
                                ; OUTPUT: no. of bytes/sectors r/w
 rwrStartSec    dw ?            ; INPUT:  starting sector number
 rwrVolumeID    dd ?            ; OUTPUT: volume identifier
 rwrHugeStartSec dd ?           ; INPUT:  32-bit starting-sector number
ends                            ; = 30d bytes
</pre><hr><b>See Also:</b> <a href="ng303d6.php">Dev04h</a> <a href="ng31963.php">Dev08h</a> <a href="ng324b6.php">Dev09h</a> <a href="ng3d57f.php">Media</a> <pre></pre><hr><center><b>
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

