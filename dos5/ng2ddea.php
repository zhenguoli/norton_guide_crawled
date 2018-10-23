


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 00h      init                    b   c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 00h      init                    b   c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 00h      init                    b   c</b></title>
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
<a href="ng2ca0f.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng2edb5.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 00h      Init                    B   C</B>

    Init directs the driver to initialize the device driver and
    corresponding device. This function is called only once, when the
    driver is loaded.

    This function is required for both block and character device
    drivers.

    ------------------------------------------------------------------

    The Init function is called only once; its code and data need not
    be retained after it has initialized its device. A device driver
    can release the Init function's code and data by placing the
    function at the end of the driver and returning the function's
    starting address in the irEndAddress field.

    If the Init function uses Int 21h system functions, it may use
    <B>only</B> the following functions:

                01h - 0Ch       Character I/O
                25h             Set Interrupt Vector
                30h             Get Version Number
                35h             Get Interrupt Vector

    ------------------------------------------------------------------

    <B>irStatus</B>
    Specifies the status of the completed function. If the function
    was successful, the driver must set the done bit (bit 8).
    Otherwise, the driver must set both the error and done bits (bits
    15 and 8) and copy an error value to the low-order byte.


    <B>irUnits</B>
    Specifies the number of units supported by the driver. DOS uses
    this number to assign sequential drive numbers to the units. The
    driver must set this field.


    <B>irEndAddress</B>
    Contains the 32-bit address (segment:offset) of the end of memory
    available to the device driver and receives the 32-bit address of
    of the end of the initialized driver.

        input   Points to the first byte of memory that immediately
                follows the device driver and which must not be used
                by the driver. During initialization, the driver may
                use any memory between its starting address and this
                address. The driver can also reserve some or all of
                this memory for use after initialization.
                (This field is <U>not</U> used for input in DOS versions
                earlier than version 5.0. The driver should check the
                DOS version number before using the value in this
                field.)
        output  Points to the first byte of memory that immediately
                follows the initialized driver. The driver must set
                this field to an address that is not greater than the
                end of available memory. If the driver fails to
                initialize, it should set this field to its starting
                address. This directs DOS to <B>remove</B> the driver and
                free all memory associated with it.


    <B>irParamAddress</B>
    Contains a 32-bit address (segment:offset) of the initialization
    parameters and receives a 32-bit address of an array of pointers
    to BPB structures.

        input   Points to the initialization parameters for the driver
                as copied from the CONFIG.SYS file. The parameters
                consist of the filename for the driver and any
                command-line switches - that is, all text on the
                corresponding DEVICE or DEVICEHIGH command line up to
                the terminating carriage-return character (0dh) or
                linefeed character (0ah) but not including the DEVICE
                or DEVICEHIGH command and equal sign.

        output  Points to an array of pointers to BPB structures.
                These structures specify the BIOS parameters for each
                unit supported by the drive. (Each pointer is a 16-bit
                offset relative to the start of the driver.)
                If all units are the same, all pointers in the array
                can be the same.

                Character device drivers must set the irParamAddress
                field to <U>zero</U>.


    <B>irDriveNumber</B>
    Contains the zero-based drive number for the driver's first unit
    as assigned by DOS. DOS supplies this number so that the driver
    can determine whether DOS will accept all its supported units. DOS
    allows no more than 26 units in the system.


    <B>irMessageFlag</B>
    Specifies whether DOS displays an error message on initialization
    failure. To direct DOS to display the message, the driver must set
    this field to 1. The message is displayed only if the driver also
    sets the irStatus field to indicate failure.
</pre><hr><b>See Also:</b> <a href="ng3c441.php">InitRequest</a> <a href="ng36ddb.php">BPB</a> <a href="ng5299.php">30h</a> <a href="ng1878.php">06h</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

