


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 19h      ioctl query             b   c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 19h      ioctl query             b   c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 19h      ioctl query             b   c</b></title>
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
<a href="ng3592f.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> [Next Entry&gt;&gt;]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 19h      IOCTL Query             b   c</B>

    IOCTL Query determines whether a given generic IOCTL function
    (minor code) is supported by the driver.

    This function can be used both for block and character device
    drivers.

    ------------------------------------------------------------------

    DOS calls this function only if bit 7 is set in the dhAttributes
    field of the DeviceHeader structure for the driver.

    ------------------------------------------------------------------

    <B>giUnit</B>
    Specifies the device the request is for. This field is used for
    block device drivers only.


    <B>giStatus</B>
    Receives the status of the query. If the driver does not support
    the given generic IOCTL function, it must set the error and done
    bits (bits 15 and 8) and set the low-order byte to error value 03h
    (Unknown Function). Otherwise, it must set the done bit (bit 8).


    <B>giCategory</B>
    Specifies the device category of the generic IOCTL function to be
    checked.


    <B>giMinorCode</B>
    Specifies the minor code of the generic IOCTL function to be
    checked.


    <B>giIOCTLData</B>
    This field is not used by this function and must not be changed.
</pre><hr><b>See Also:</b> <a href="ng3c6b5.php">IOCTLRequest</a> <a href="ng348de.php">Dev13h</a> <a href="ng12f6a.php">4410h</a> <a href="ng132d3.php">4411h</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

