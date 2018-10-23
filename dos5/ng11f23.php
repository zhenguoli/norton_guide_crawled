


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440dh /66h     get media id                                 dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440dh /66h     get media id                                 dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440dh /66h     get media id                                 dos 4.0+</b></title>
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
<a href="ng11c6b.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1221e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Dh /66h     Get Media ID                                 DOS 4.0+</B>

    Returns the volume label, serial number, and file system for the
    specified drive.

        <B>Entry</B>   AX    = 440Dh
                BX    = Drive number (0 = default, 1 = A, etc.)
                CH    = 08h (device category, must be 8)
                CL    = 66h
                DS:DX = Pointer to a MID structure

        <B>Return</B>  MID filled
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found
                     | 05h Access denied

    ------------------------------------------------------------------

    The MID structure receives information that uniquely identifies a
    disk or other storage medium.
                                                     
    This function returns an error value of 2 (file not found) if the
    specified drive number is invalid.
</pre><hr><b>See Also:</b> <a href="ng11209.php">440Dh /46h</a> <a href="ng3da90.php">MID</a> <pre></pre><hr><center><b>
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

