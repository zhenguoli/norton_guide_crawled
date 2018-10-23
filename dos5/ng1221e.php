


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440dh /68h     sense media type                             dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440dh /68h     sense media type                             dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440dh /68h     sense media type                             dos 5.0+</b></title>
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
<a href="ng11f23.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng12589.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Dh /68h     Sense Media Type                             DOS 5.0+</B>

    Returns the media type for the specified block device.

        <B>Entry</B>   AX    = 440Dh
                BX    = Drive number (0 = default, 1 = A, etc.)
                CH    = 08h (device category, must be 8)
                CL    = 68h
                DS:DX = Pointer to 2-byte input buffer

        <B>Return</B>  Input buffer filled
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | ??  Device-dependent error

    ------------------------------------------------------------------

    Format of input buffer:

                <B>Offset  Description</B>
                00h     1 = media type is the default value
                        0 = other type
                01h     02h = 720K disk
                        07h = 1.44 MB disk
                        09h = 2.88 MB disk

    This function returns an error value of 5 (access denied) if the
    media type for the specified drive cannot be determined or the
    given drive is not ready.
</pre><hr><b>See Also:</b> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

