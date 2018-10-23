


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 02h      build bpb               b</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 02h      build bpb               b</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 02h      build bpb               b</b></title>
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
<a href="ng2edb5.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng2fe02.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 02h      Build BPB               B</B>

    Build BPB returns a <B>BPB</B> structure for the medium in the
    specified drive. DOS calls this function whenever Media Check
    (device driver function 01h) specifies that the medium has changed
    or that it might have been changed and no disk-write operations
    are pending.

    This function is required for block device drivers.

    ------------------------------------------------------------------

    If the driver supports removable media, Build BPB should read the
    volume label from the disk and save it.

    ------------------------------------------------------------------

    <B>bbrUnit</B>
    Specifies the unit for which to return the BPB structure.


    <B>bbrStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>bbrMediaID</B>
    Specifies the media descriptor for the medium DOS assumes is in
    the drive.
    - See Media


    <B>bbrFATSector</B>
    Contains the 32-bit address of a buffer. The contents of the
    buffer depend on bit 13 in the dhAttributes field in the driver's
    DeviceHeader structure. If bit 13 is zero, the buffer contains the
    first sector of the first FAT on the disk; the driver uses the
    first byte in this buffer to determine the disk's media
    descriptor. In this case, the driver must not alter this buffer.
    If bit 13 is set, the contents of the buffer are meaningless and
    the driver may use the buffer as scratch space.


    <B>bbrBPBAddress</B>
    Receives the 32-bit address of the BPB structure for the medium in
    the drive.
</pre><hr><b>See Also:</b> <a href="ng37053.php">BuildBPBRequest</a> <a href="ng36ddb.php">BPB</a> <a href="ng2edb5.php">Dev01h</a> <a href="ng10650.php">440Dh /40h</a> <a href="ng114ef.php">440Dh /60h</a> <a href="ng3d57f.php">Media</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

