


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device drivers</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device drivers</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device drivers</b></title>
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
[&lt;&lt;Previous Entry] <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng2ddea.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device drivers</B>

    <B>Format</B>
    Every device driver, whether it supports a character or a block
    device, consists of a device header (a <B>DeviceHeader</B> structure), a
    strategy routine, and an interrupt routine. Installable device
    drivers are contained in binary image files (.SYS) or .EXE format
    files. If more than one driver is contained in a file, there must
    be a device header for each driver. The first DeviceHeader must be
    at the beginning of the file's load image.

    <B>Operation</B>
    DOS makes a far call to the Strategy routine, passing the 32-bit
    address (in ES:BX) of a request packet (a XxxxxRequest structure).
    The driver saves this address and returns immediately. DOS then
    calls the Interrupt routine (using a far call, not an interrupt).
    The Interrupt routine must examine the function field in the
    request packet, branch accordingly, and carry out the requested
    function. When the processing is complete, the Interrupt routine
    must set the <B>status</B> value in the request packet and return to DOS.

    Since a device driver must never have more than one pending
    request at any given time, the interrupt routine must, for each
    request, either carry out an action or indicate to DOS, that the
    device is busy or in error. The strategy and interrupt routines
    must preserve all registers and the driver must switch to its own
    stack if the stack usage is more than 40-50 bytes.

    ------------------------------------------------------------------

    struc RequestHeader         ; Device-Driver request packet header
     rhLength       db ?            ; Length of structure, in bytes
     rhUnit         db ?            ; Unit number (block device only)
     rhFunction     db ?            ; Device driver function number
     rhStatus       dw ?            ; Status
     rhReserved     db 8 dup (?)    ; Reserved
    ends                            ; = 13d (0Dh) bytes

    All XxxxxRequest structures define the 5 fields listed, several
    define more fields. Values for Length, Unit, and Function are
    provided by DOS, Status must be determined by the driver.

    <B>rhUnit</B>
    Identifies the device (not the drive) the request is for, e.g. 0,
    1, or 2 if the driver controls 3 devices.

    <B>rhStatus</B>
    Must be zero (0) before DOS calls the interrupt routine which must
    return a non-zero value in this field indicating the status of the
    request:

        ; Bit 15        1 = Error occurred; bits 0-7 = error code
        ; Bit  9        1 = Device busy (functions 06h,0Ah,0Fh only)
        ; Bit  8        1 = Operation completed (done)
        ; Bits 7-0      Error code if bit 15 set
        DeviceError = 8000h
        DeviceBusy  = 0200h
        DeviceDone  = 0100h
        DeviceErrWriteProtect   = 00h
        DeviceErrBadUnit        = 01h
        DeviceErrNotReady       = 02h
        DeviceErrBadCommand     = 03h
        DeviceErrCRC            = 04h
        DeviceErrBadLength      = 05h   ; (drive-request structure)
        DeviceErrSeek           = 06h
        DeviceErrUnknownMedia   = 07h
        DeviceErrSectorNotFound = 08h
        DeviceErrOutOfPaper     = 09h
        DeviceErrWriteFault     = 0Ah
        DeviceErrReadFault      = 0Bh
        DeviceErrGenFailure     = 0Ch
        DeviceErrWrongDisk      = 0Fh   ; 0Dh, 0Eh reserved

    ------------------------------------------------------------------

    <B>Initialization</B>
    DOS loads and initializes installable device drivers in the order
    their corresponding DEVICE or DEVICEHIGH commands appear in the
    CONFIG.SYS file. When loading a device driver, DOS does not create
    a program segment prefix (PSP) or an environment block. Instead,
    it allocates enough memory to load the contents of the driver file
    and copies its contents from disk, placing the DeviceHeader at the
    beginning of the allocated memory. DOS then calls the strategy
    routine and the interrupt routine with a request packet for
    <B>Init</B> (device driver function 00h).


    An installable device driver that has the same logical-device name
    as an existing <B>character</B>-device driver effectively replaces the
    existing driver. The old driver remains in memory, however, and
    its strategy and interrupt routines can be called by the new
    driver to access the given device. The new driver can retrieve the
    addresses of the old driver's strategy and interrupt routines by
    searching the driver chain for device-driver headers that have the
    same logical-device names. (The new driver is at the top of the
    driver chain, and the dhLink field in its DeviceHeader contains
    the address of the next driver in the chain. For the last driver
    in the chain, the dhLink field contains 0FFFFh.) The old driver's
    address can be retrieved only <U>after</U> the new driver has completed
    its initialization.

    ------------------------------------------------------------------

    <B>Note</B>
    The device driver functions required for <U>b</U>lock device drivers
    and <U>c</U>haracter device drivers are marked by the symbols <B>B</B> and <B>C</B>;
    the functions depending on the setting of the driver's attribute
    word are marked <B>b</B> and <B>c</B>.
    In the structure descriptions, fields are designated as INPUT
    where information is filled in by DOS before it calls the device
    driver and as OUTPUT where information must be supplied by the
    driver.
</pre><hr><b>See Also:</b> <a href="ng378a9.php">DeviceHeader</a> <a href="ng2ddea.php">Dev00h</a> <pre></pre><hr><center><b>
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

