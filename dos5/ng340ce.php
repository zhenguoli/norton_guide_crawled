


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 10h      output until busy           c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 10h      output until busy           c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 10h      output until busy           c</b></title>
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
<a href="ng33cf3.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng348de.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 10h      Output Until Busy           c</B>

    Output Until Busy transfers data from the specified buffer to a
    device until the device signals that it cannot accept more input.

    This function is used for character device drivers only.

    ------------------------------------------------------------------

    DOS calls this function only if bit 13 is set in the dhAttributes
    field of the DeviceHeader structure for the driver.

    This function should write as much data to the device as possible
    until the device signals that it cannot accept more data, at which
    point the function should return immediately. The driver should
    not wait under any circumstances. It is not an error for the
    driver to transfer fewer bytes than DOS requested, but the driver
    must return a value for the number of bytes transferred.

    This function allows device drivers to take advantage of a
    printer's internal RAM buffers. The driver can send data to the
    printer until the printer's internal buffer is full and then
    return to DOS immediately, rather than wait while data is printed.
    DOS can then periodically check the printer's status and send more
    data only when the printer is ready.

    ------------------------------------------------------------------

    <B>orStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>orBuffer</B>
    Contains the 32-bit address of the buffer containing data to write
    to the device.


    <B>orBytes</B>
    Contains the number of bytes to write and receives the number of
    bytes written.

        input   Specifies the number of bytes to write. This number
                must not exceed the amount of data in the specified
                buffer.

        output  Specifies the number of bytes written. This number
                cannot exceed the requested number of bytes.
</pre><hr><b>See Also:</b> <a href="ng3e055.php">OutputRequest</a> <a href="ng31963.php">Dev08h</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

