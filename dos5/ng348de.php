


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 13h      generic ioctl           b   c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 13h      generic ioctl           b   c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 13h      generic ioctl           b   c</b></title>
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
<a href="ng340ce.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng353de.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 13h      Generic IOCTL           b   c</B>

    Generic IOCTL directs the driver to carry out the generic input-
    and-output-control function specified by the giCategory and
    giMinorCode fields.

    This function can be used both for block and character device
    drivers.

    ------------------------------------------------------------------

    The driver must interpret the category and minor codes to
    determine which operation to carry out and then return any
    applicable information in the structure pointed to by the
    giIOCTLData field.

    DOS calls this function only if bit 6 is set in the dhAttributes
    field of the DeviceHeader structure for the driver.

    ------------------------------------------------------------------

    <B>giUnit</B>
    Specifies the device number on which to carry out the IOCTL
    function. This field is used for block device drivers only.


    <B>giStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>giCategory</B>
    Specifies the device category. Serial, console, parallel, and disk
    drivers are represented by the following values:

                01h     Serial device
                03h     Console (display)
                05h     Parallel printer
                08h     Disk

    If the driver supports a type of device not listed, the field must
    specify an 8-bit number that uniquely identifies the device. The
    driver must check this value.


    <B>giMinorCode</B>
    Specifies the minor code for Interrupt 21h function 440Ch, Generic
    IOCTL for Character Devices. The meaning of the minor code depends
    on the device category.
    For serial, console, and parallel drivers, it can be one of the
    following:

                45h     Set Iteration Count
                4ah     Select Code Page
                4ch     Start Code-Page Prepare
                4dh     End Code-Page Prepare
                65h     Get Iteration Count
                6ah     Query Selected Code Page
                6bh     Query Code-Page Prepare List

    For disk drivers, the value specifies the minor code for Interrupt
    21h function 440Dh, Generic IOCTL for Block Devices. It can be one
    of the following:

                40h     Set Device Parameters
                41h     Write Track on Logical Device
                42h     Format Track on Logical Device
                46h     Set Media ID
                60h     Get Device Parameters
                61h     Read Track on Logical Device
                62h     Verify Track on Logical Device
                66h     Get Media ID
                68h     Sense Media Type

    Drivers can support additional minor codes as needed.


    <B>giIOCTLData</B>
    Contains a 32-bit address of the structure associated with the
    specified IOCTL function. The structure type and contents depend
    on the minor code as specified by the giMinorCode field.
</pre><hr><b>See Also:</b> <a href="ng3c6b5.php">IOCTLRequest</a> <a href="ng35cdd.php">Dev19h</a> <a href="ngec05.php">440Ch</a> <a href="ng104a1.php">440Dh</a> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

