


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
<a href="ng38d75.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng393f8.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc DPB                       ; Drive parameter block
 dpbDrive       db ?            ; Drive no. (0 = A, 1 = B, etc.)
 dpbUnit        db ?            ; Unit no. (for device driver)
 dpbSectorSize  dw ?            ; Sector size, in bytes
 dpbClusterMask db ?            ; Sectors per cluster - 1
 dpbClusterShift db ?           ; Sectors per cluster, as power of 2
 dpbFirstFAT    dw ?            ; First sector containing FAT
 dpbFATCount    db ?            ; No. of FATs
 dpbRootEntries dw ?            ; No. of root-directory entries
 dpbFirstSector dw ?            ; First sector of first cluster
 dpbMaxCluster  dw ?            ; No. of clusters on drive + 1
 dpbFATSize     dw ?            ; No. of sectors occupied by each FAT
 dpbDirSector   dw ?            ; First sector containing root directory
 dpbDriverAddr  dd ?            ; Addr of device driver's DeviceHeader
 dpbMedia       db ?            ; Media descriptor
 dpbFirstAccess db ?            ; 0FFh = medium in drive not accessed
 dpbNextDPB     dd ?            ; Address of next drive parameter block
 dpbNextFree    dw ?            ; Last allocated cluster
 dpbFreeCnt     dw ?            ; No. of free clusters (0FFFFh = unknown)
ends
</pre><hr><b>See Also:</b> <a href="ng35d1.php">1Fh</a> <a href="ng5dd2.php">32h</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng3d57f.php">Media types</a> <pre></pre><hr><center><b>
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

