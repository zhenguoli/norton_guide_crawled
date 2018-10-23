


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 01h      media check             b</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 01h      media check             b</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 01h      media check             b</b></title>
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
<a href="ng2ddea.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng2f6d7.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 01h      Media Check             B</B>

    Media Check determines whether the medium in the specified drive
    has changed.

    This function is required by block device drivers only.

    ------------------------------------------------------------------

    If the medium in the drive has not changed, DOS proceeds with the
    disk operation.

    If the medium in the drive has changed, DOS invalidates all
    buffers associated with the drive, including any buffers
    containing data waiting to be written (this data is lost). DOS
    then calls Build BPB (device driver function 02h) to request a BPB
    structure for the new disk and reads the disk's file allocation
    table (FAT) and directory.

    If the driver cannot determine whether the disk has changed, DOS
    checks its internal buffers. If data is waiting to be written to
    the disk, the system assumes that the disk has not changed and
    attempts to write the data to the disk. If the disk buffers are
    empty, DOS assumes the disk has changed and updates the disk
    information as if the driver had returned 0FFh (mrReturn).

    ------------------------------------------------------------------

    <B>mrUnit</B>
    Specifies the unit for which the medium is to be checked.


    <B>mrStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>mrMediaID</B>
    Specifies the media descriptor for the medium DOS assumes is in
    the drive.
    - See Media


    <B>mrReturn</B>
    Receives a return value identifying whether the medium has
    changed. The driver must set the field to one of the following
    values:
                0FFh    Medium has been changed
                00h     Driver cannot determine whether
                        medium has been changed
                01h     Medium is unchanged


    <B>mrVolumeID</B>
    Receives the 32-bit address (segment:offset) of a zero-terminated
    ASCII string specifying the volume identifier of the previous disk
    in the drive. The driver must set this field to the address of the
    volume identifier. If the disk does not have a volume identifier,
    the driver must set the field to the address of the string
    "NO NAME".
</pre><hr><b>See Also:</b> <a href="ng3d8bb.php">MediaRequest</a> <a href="ng3d57f.php">Media types</a> <a href="ng2f6d7.php">Dev02h</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

