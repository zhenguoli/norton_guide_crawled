


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
<a href="ng3e055.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3e6e1.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc PartEntry
 peBootable             db ?    ; 80h = bootable, 00h = non-bootable
 peBeginHead            db ?    ; Beginning head (&lt;=&gt; 1st track in part.)
 peBeginSector          db ?    ; Beginning sector (rel. to 1st track)
 peBeginCylinder        db ?    ; Beginning cylinder (&lt;=&gt; 1st track)
 peFileSystem           db ?    ; Type of file system
 peEndHead              db ?    ; Ending head (&lt;=&gt; last track in part.)
 peEndSector            db ?    ; Ending sector (rel. to 1st track)
 peEndCylinder          db ?    ; Ending cylinder (&lt;=&gt; last track)
 peStartSector          dd ?    ; Starting sector (rel. to beg. of disk)
 peSectors              dd ?    ; No. of sectors in partition
ends

;       The PartEntry structure specifies the size and the starting
;       and ending sectors of a partition on a disk that can be
;       partitioned.
;       DOS supplies a partition table for every disk that can be
;       partitioned. The table, placed at the end of the first hidden
;       sector on the logical drive, consists of one or more PartEntry
;       structures.
;
;       ; peFileSystem
;       00h     Unknown
;       01h     12-bit FAT; partition smaller than 10 MB
;       04h     16-bit FAT; partition smaller than 32 MB
;       05h     Extended DOS partition
;       06h     16-bit FAT; partition larger than or equal to 32 MB
</pre><hr><b>See Also:</b> <a href="ng118f0.php">440Dh /61h</a> <a href="ng10bb2.php">440Dh /41h</a> <a href="ng380db.php">DeviceParams</a> <pre></pre><hr><center><b>
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

