


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4403h          send control data to character device</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4403h          send control data to character device</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4403h          send control data to character device</b></title>
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
<a href="ngca5c.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngd13b.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4403h          Send Control Data to Character Device</B>

    Writes control information of any length and format to a character
    device driver. The format of the information is device-specific
    and does not follow any standard.

        <B>Entry</B>   AX    = 4403h
                BX    = Device handle
                CX    = Number of bytes to write
                DS:DX = Address of data buffer

        <B>Return</B>  AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle
                     | 0Dh Invalid data

    ------------------------------------------------------------------

    Character-device drivers are not required to support this function
    or function 4402h. A program should use function 4400h and examine
    bit 14 in the device-status value to ensure that the device driver
    can process control data.
</pre><hr><b>See Also:</b> <a href="ngb40a.php">4400h</a> <a href="ngca5c.php">4402h</a> <a href="ngd13b.php">4404h</a> <a href="ngd38e.php">4405h</a> <a href="ng32acf.php">Dev0Ch</a> <pre></pre><hr><center><b>
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

