


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 08h      write                   b   c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 08h      write                   b   c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 08h      write                   b   c</b></title>
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
<a href="ng316f6.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng324b6.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 08h      Write                   B   C</B>

    Write and Write with Verify transfer data from the specified
    buffer to a device.
    Write with Verify also reads the data back from the device, if
    possible, to verify that the data has been transferred correctly

    This function is required for both block and character device
    drivers.

    ------------------------------------------------------------------

    The driver must translate the logical-sector number supplied in
    the rwrStartSec or rwrHugeStartSec field to the appropriate head,
    track, and sector numbers.

    The rwrHugeStartSec field is used only if bit 1 is set in the
    dhAttributes field in the block device driver's DeviceHeader
    structure.

    ------------------------------------------------------------------

    <B>rwrUnit</B>
    Specifies the device to which data is to be written. This field is
    used for block device drivers only.


    <B>rwrStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>rwrMediaID</B>
    Specifies the media descriptor for the medium DOS assumes is in
    the drive. This field is used for block device drivers only.
    - See Media


    <B>rwrBuffer</B>
    Contains the 32-bit address of the buffer containing the data to
    write to the device.


    <B>rwrBytesSec</B>
    Contains the number of bytes or sectors to write and receives the
    number of bytes or sectors written.

        input   Specifies the number of bytes to write to a character
                device, or the number of sectors to write to a block
                device.

        output  Specifies the number of bytes written to a character
                device, or the number of sectors written to a block
                device. The driver must set this field; if there is an
                error, the driver should return the number of bytes or
                sectors written before the error occurred.


    <B>rwrStartSec</B>
    Specifies the first logical sector to write. If the first sector
    is larger than 65,535 bytes, this field contains 0FFFFh and the
    rwrHugeStartSec field specifies the first sector. This field is
    used for block device drivers only.


    <B>rwrVolumeID</B>
    Contains the 32-bit address of a zero-terminated ASCII string
    specifying the volume identifier for the disk most recently
    accessed. If the driver returns error value 0Fh (invalid disk
    change), DOS uses the volume identifier to prompt the user to
    insert the appropriate disk. This field is used for block device
    drivers only.


    <B>rwrHugeStartSec</B>
    Specifies the first logical sector to write. This field is used
    only if the rwrStartSec field contains 0FFFFh. This field is used
    for block device drivers only.
</pre><hr><b>See Also:</b> <a href="ng3ec6f.php">ReadWriteRequest</a> <a href="ng2edb5.php">Dev01h</a> <a href="ng303d6.php">Dev04h</a> <a href="ng9a20.php">40h</a> <a href="ng3d57f.php">Media</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

