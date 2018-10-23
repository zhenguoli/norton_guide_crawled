


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 34h            get indos flag address</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 34h            get indos flag address</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 34h            get indos flag address</b></title>
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
<a href="ng65ad.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng6afc.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 34h            Get InDOS Flag Address</B>

    Returns the address of the InDOS flag.

        <B>Entry</B>   AH = 34h

        <B>Return</B>  ES:BX = Address of InDOS flag

    ------------------------------------------------------------------

    While DOS is processing an interrupt 21h function, the value of
    the InDOS flag is non-zero.

    With DOS 5.0, function 34h has been documented for DOS version
    2.0 and later. The DOS 5.0 Programmer's Reference also documents
    that the address of the ErrorMode flag can be determined by
    subtracting 1 (one) from the InDOS flag address.
</pre><hr><b>See Also:</b> <a href="ng28dea.php">Int 24h</a> <pre></pre><hr><center><b>
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

