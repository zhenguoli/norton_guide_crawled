


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4408h          does device use removeable media             dos 3.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4408h          does device use removeable media             dos 3.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4408h          does device use removeable media             dos 3.0+</b></title>
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
<a href="ngd752.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngdcce.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4408h          Does Device Use Removeable Media             DOS 3.0+</B>

    Determines whether the specified device contains a removable
    storage medium, such as a floppy disk.

        <B>Entry</B>   AX = 4408h
                BL = Drive number (0 = default, 1 = A, etc.)

        <B>Return</B>  AX = 00h | 01h   Device is removable | fixed
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 0Fh Invalid drive

    ------------------------------------------------------------------

    This function returns an error value of 01h (invalid function) for
    a network drive or for a device that does not support the function
    request. In these cases, the calling program should assume that
    the storage medium is not removable.
</pre><hr><b>See Also:</b> <a href="ngdcce.php">4409h</a> <a href="ng33cf3.php">Dev0Fh</a> <pre></pre><hr><center><b>
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

