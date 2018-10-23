


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440dh /40h     set device parameters                        dos 3.2+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440dh /40h     set device parameters                        dos 3.2+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440dh /40h     set device parameters                        dos 3.2+</b></title>
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
<a href="ng104a1.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng10bb2.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Dh /40h     Set Device Parameters                        DOS 3.2+</B>

    Sets the device parameters for the specified block device.

        <B>Entry</B>   AX    = 440Dh
                BX    = Drive number (0 = default, 1 = A, etc.)
                CH    = 08h (device category, must be 8)
                CL    = 40h
                DS:DX = Pointer to a DeviceParams structure

        <B>Return</B>  AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found (invalid drive number)
                     | 05h Access denied

    ------------------------------------------------------------------

    The following statements define device parameters for several
    common media formats:

    radix 10
    ss160  DeviceParams &lt;0,1,2,40,0,512,1,1,2, 64, 320,0feh,1, 8,1,0,0&gt;
    ss180  DeviceParams &lt;0,1,2,40,0,512,1,1,2, 64, 360,0fch,2, 9,1,0,0&gt;
    dd320  DeviceParams &lt;0,1,2,40,0,512,2,1,2,112, 640,0ffh,1, 8,2,0,0&gt;
    dd360  DeviceParams &lt;0,1,2,40,0,512,2,1,2,112, 720,0fdh,1, 9,2,0,0&gt;
    sh320  DeviceParams &lt;0,1,2,80,0,512,2,1,2,112, 640,0fah,1, 8,1,0,0&gt;
    dh360  DeviceParams &lt;0,1,2,80,0,512,2,1,2,112, 720,0fch,2, 9,1,0,0&gt;
    dh640  DeviceParams &lt;0,1,2,80,0,512,2,1,2,112,1280,0fbh,2, 8,2,0,0&gt;
    dh720  DeviceParams &lt;0,1,2,80,0,512,2,1,2,112,1440,0f9h,3, 9,2,0,0&gt;
    dh144  DeviceParams &lt;0,1,2,80,0,512,1,1,2,224,2880,0f0h,9,18,2,0,0&gt;
    dh120  DeviceParams &lt;0,1,2,80,0,512,1,1,2,224,2400,0f0h,7,15,2,0,0&gt;
</pre><hr><b>See Also:</b> <a href="ng114ef.php">440Dh /60h</a> <a href="ng380db.php">DeviceParams</a> <a href="ng3d57f.php">Media types</a> <pre></pre><hr><center><b>
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

