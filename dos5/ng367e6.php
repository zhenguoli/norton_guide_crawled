


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
<a href="ng36601.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng36ddb.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc BootSector
 bsJump         db 3 dup (?)    ; E9 XX XX or EB XX 90
 bsOemName      db "????????"   ; OEM name and version
                               ;; Start of BIOS parameter block
 bsBytesPerSec  dw ?            ; Bytes per sector
 bsSecPerClust  db ?            ; Sectors per cluster
 bsResSectors   dw ?            ; No. of reserved sectors
 bsFATs         db ?            ; No. of file allocation tables
 bsRootDirEnts  dw ?            ; No. of root-directory entries
 bsSectors      dw ?            ; Total no. of sectors (0 if &gt; 32 MB)
 bsMedia        db ?            ; Media descriptor
 bsFATsecs      dw ?            ; No. of sectors per FAT
 bsSecPerTrack  dw ?            ; Sectors per track
 bsHeads        dw ?            ; No. of heads
 bsHiddenSecs   dd ?            ; No. of hidden sectors
 bsHugeSectors  dd ?            ; No. of sectors if bsSectors = 0
                               ;; End of BIOS parameter block
 bsDriveNumber  db ?            ; Drive no. (80h=1st hard disk, else 0)
 bsReserved1    db ?            ; Reserved
 bsBootSignature db ?           ; Extended boot signature (29h)
 bsVolumeID     dd ?            ; Volume serial number
 bsVolumeLabel  db 11 dup (?)   ; Volume label
 bsFileSysType  db 8 dup (?)    ; File-system type (e.g. "FAT12   ")
ends

;       The BootSector structure contains information about the disk
;       (or other storage medium) for a particular drive. The
;       structure appears at the beginning of the first sector (the
;       boot, or startup, sector) of the disk.
;       The BootSector structure shares the first sector with the
;       bootstrap routine and the boot sector signature. The boot
;       sector signature, stored in the last two bytes of the sector,
;       must be 0AA55h.
</pre><hr><b>See Also:</b> <a href="ng380db.php">DeviceParams</a> <a href="ng3d57f.php">Media types</a> <pre></pre><hr><center><b>
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

