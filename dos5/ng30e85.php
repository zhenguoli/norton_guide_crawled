


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>device driver function 05h      non-destructive read        c</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>device driver function 05h      non-destructive read        c</b>">
<title>ClipX - DOS 5.0 Ref. - <b>device driver function 05h      non-destructive read        c</b></title>
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
<a href="ng303d6.php">[&lt;&lt;Previous Entry]</a> <a href="ng2c72e.php">[^^Up^^]</a> <a href="ng312c0.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Device driver function 05h      Non-destructive Read        C</B>

    Non-destructive Read returns the next character from the input
    buffer without removing it from the buffer; subsequent read
    operations should return the same character.

    This function is required for character device drivers only.

    ------------------------------------------------------------------

    <B>nrrStatus</B>
    Specifies the status of the completed function. If the device
    input buffer has at least one character, the busy bit (bit 9) must
    be zero, indicating that DOS need not wait to read a character. If
    the input buffer has no characters, the driver must set the busy
    bit. In both cases, the driver must set the done bit (bit 8).

    If the function is not successful, the driver must set both the
    error and done bits (bits 15 and 8) and copy an error value to the
    low-order byte.


    <B>nrrChar</B>
    Receives the next character in the input buffer. The driver must
    copy the character without removing it from the input buffer.
</pre><hr><b>See Also:</b> <a href="ng3dbca.php">NDReadRequest</a> <a href="ng303d6.php">Dev04h</a> <a href="ng2ca0f.php">Dev*</a> <pre></pre><hr><center><b>
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

