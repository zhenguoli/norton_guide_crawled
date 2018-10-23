


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4404h          receive control data from block device</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4404h          receive control data from block device</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4404h          receive control data from block device</b></title>
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
<a href="ngcdd9.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngd38e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4404h          Receive Control Data from Block Device</B>

    Reads control information of any length and format from a block
    device driver. The format of the information is device-specific
    and does not follow any standard.

        <B>Entry</B>   AX    = 4404h
                BL    = Drive number (0 = default, 1 = A, etc.)
                CX    = Number of bytes to read
                DS:DX = Address of data buffer

        <B>Return</B>  Buffer updated
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle
                     | 0Dh Invalid data
</pre><hr><b>See Also:</b> <a href="ngca5c.php">4402h</a> <a href="ngcdd9.php">4403h</a> <a href="ngd38e.php">4405h</a> <a href="ng2fe02.php">Dev03h</a> <pre></pre><hr><center><b>
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

