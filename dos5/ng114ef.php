


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440dh /60h     get device parameters                        dos 3.2+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440dh /60h     get device parameters                        dos 3.2+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440dh /60h     get device parameters                        dos 3.2+</b></title>
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
<a href="ng11209.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng118f0.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Dh /60h     Get Device Parameters                        DOS 3.2+</B>

    Returns the device parameters for the specified block device.

        <B>Entry</B>   AX    = 440Dh
                BX    = Drive number (0 = default, 1 = A, etc.)
                CH    = 08h (device category, must be 8)
                CL    = 60h
                DS:DX = Pointer to a DeviceParams structure

        <B>Return</B>  DeviceParams filled
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found
                     | 05h Access denied

    ------------------------------------------------------------------

    The dpSpecFunc field in the DeviceParams structure determines
    whether the function retrieves current or default information. If
    this field is set to 1, the function retrieves information about
    the current medium in the drive; if the field is set to 0, the
    function retrieves information about the default medium for the
    drive.

    This function returns an error value of 2 (file not found) if the
    specified drive number is invalid.
</pre><hr><b>See Also:</b> <a href="ng10650.php">440Dh /40h</a> <a href="ng2f6d7.php">Dev02h</a> <a href="ng380db.php">DeviceParams</a> <pre></pre><hr><center><b>
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

