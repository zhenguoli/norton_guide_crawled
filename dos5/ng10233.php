


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440ch /7fh     get display mode                             dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440ch /7fh     get display mode                             dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440ch /7fh     get display mode                             dos 4.0+</b></title>
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
<a href="ngff76.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng104a1.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Ch /7fh     Get Display Mode                             DOS 4.0+</B>

    Retrieves the display mode for the screen device.

        <B>Entry</B>   AX    = 440Ch
                BX    = Device handle
                CH    = 03h (screen device category)
                CL    = 7fh
                DS:DX = Pointer to a DisplayMode structure

        <B>Return</B>  DisplayMode filled
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle

    ------------------------------------------------------------------

    This function returns 01h (invalid function) if the ANSI.SYS
    driver has not been loaded.
</pre><hr><b>See Also:</b> <a href="ngf8db.php">440Ch /5fh</a> <a href="ng2309b.php">1A00h</a> <a href="ng38d75.php">DisplayMode</a> <pre></pre><hr><center><b>
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

