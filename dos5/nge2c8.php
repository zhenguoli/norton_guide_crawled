


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440ah          is file or device remote                     dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440ah          is file or device remote                     dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440ah          is file or device remote                     dos 3.1+</b></title>
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
<a href="ngdcce.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="nge810.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Ah          Is File or Device Remote                     DOS 3.1+</B>

    Determines whether the specified handle refers to a file or a
    device that is local (on the computer running the program) or
    remote (on a network server).

        <B>Entry</B>   AX = 440Ah
                BX = Handle of file or device

        <B>Return</B>  DX bit 15   0 = local, 1 = remote
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 06h Invalid handle

    ------------------------------------------------------------------

    Other bits in DX contain additional information about the file or
    device. In particular, bit 7 of DX specifies whether the handle
    identifies a file or a device.

                <B>DX for disk file (bit 7 = 0)</B>
                <B>Bit     Description</B>
                0-5     Drive number (0 = A, 1 = B, etc.)
                6       1 = File has not been written to
                7       0 = Disk file
                12      1 = No inherit
                14      1 = Date/time not set at close
                15      1 = Remote file, 0 = local file


                <B>DX for device (Bit 7 = 1)</B>
                <B>Bit     Description</B>
                0       1 = Console input device
                1       1 = Console output device
                2       1 = Null device
                3       1 = Clock device
                4       1 = Special device
                5       1 = Binary mode, 0 = ASCII mode
                6       0 = EOF returned if device is read
                7       0 = Device
                11      1 = Network spooler
                12      1 = No inherit
                13      1 = Named pipe
                15      1 = Remote device, 0 = local device

                All other bits are zero.
</pre><hr><b>See Also:</b> <a href="ngdcce.php">4409h</a> <pre></pre><hr><center><b>
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

