


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
<a href="ng37776.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng380db.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc DeviceHeader
 dhLink         dd ?            ; Link to next driver (last = 0FFFFh)
 dhAttributes   dw ?            ; Device attributes
 dhStrategy     dw ?            ; Strategy-routine offset
 dhInterrupt    dw ?            ; Interrupt-routine offset
 dhNameOrUnits  db "????????"   ; Logical device name (char device only)
                                ; or Number of units (block device only)
ends                            ; = 18d bytes
;
;       ; dhAttributes for <B>character</B> devices; bit 15=1
;       Bit     Description
;       0       1 = Standard input (STDIN) device
;       1       1 = Standard output (STDOUT) device
;       2       1 = NUL device
;       3       1 = Clock device
;       4       1 = Special device (driver supports fast char. output)
;       5,8,9,10,12 Reserved bits (0)
;       6       1 = Driver supports device function 13h (Generic IOCTL)
;       7       1 = Driver supports device function 19h (IOCTL query)
;       11      1 = Driver supports device functions 0Dh and 0Eh
;                   (Open Device and Close Device)
;       13      1 = Driver supports device function 10h
;                   (Output Until Busy)
;       14      1 = Driver supports device functions 03h and 0Ch
;                   (IOCTL Read and IOCTL Write)
;       15      1 = Character device
;
;       
;       ; dhAttributes for <B>block</B> devices; bit 15=0
;       Bit     Description
;       0,2,3,4,5,8,9,10,12  Reserved bits (0)
;       1       0 = Driver supports 16-bit sector addressing
;               1 = Driver supports 32-bit sector addressing
;       6       1 = Driver supports device functions 13h, 17h and 18h
;                   (Generic IOCTL, Get/Set Logical Device)
;       7       1 = Driver supports device function 19h (IOCTL query)
;       11      1 = Driver supports device functions 0Dh,0Eh, and 0Fh
;                   (Open Device, Close Device, and Removable Media)
;       13      1 = Driver requires DOS to supply the first 512 bytes
;                   of the file allocation table (FAT) when it calls
;                   Build BPB (device function 02h)
;       14      1 = Driver supports device functions 03h and 0Ch
;                   (IOCTL Read and IOCTL Write)
;       15      0 = Block device
;
;
;       ; dhLink
;       0000h:offset   pointer to next DeviceHeader, or
;       0ffffh:0ffffh  if no other DeviceHeader in file
;
;       ; dhNameOrUnits
;       Char-device:  Space-padded ASCII device name (no colon)
;       Block-device: 1st byte = no. of units (drives), rest reserved
</pre><hr><b>See Also:</b> <a href="ngb40a.php">4400h</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

