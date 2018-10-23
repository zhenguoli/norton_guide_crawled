


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 17h      get logical device      b</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 17h      get logical device      b</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 17h      get logical device      b</b></title>
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
<a href="ng348de.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng3592f.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 17h      Get Logical Device      b</B>

    Get Logical Device returns the active drive number for the
    specified drive.

    This function is used for block device drivers only.

    ------------------------------------------------------------------

    DOS calls this function only if bit 6 is set in the dhAttributes
    field of the DeviceHeader structure for the driver.

    ------------------------------------------------------------------

    <B>ldrUnit</B>
    Contains the device number to check and receives the active drive
    number.

        input   Specifies the drive number to check. The driver must
                determine whether the unit associated with this drive
                number has any other logical-device numbers.

        output  Specifies the active drive number (1 = A, 2 = B, 3 = C
                etc.). The driver must set this field to the drive
                number set by the most recent call to Set Logical
                Device (device driver function 18h) or to zero if the
                specified drive has no other logical-drive numbers.


    <B>ldrStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.
</pre><hr><b>See Also:</b> <a href="ng3d3fc.php">LogDeviceRequest</a> <a href="ng3592f.php">Dev18h</a> <a href="ng12589.php">440Eh</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

