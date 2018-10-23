


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 1ah            set disk transfer address (dta)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 1ah            set disk transfer address (dta)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 1ah            set disk transfer address (dta)</b></title>
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
<a href="ng3165.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng3546.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 1Ah            Set Disk Transfer Address (DTA)</B>

    Sets the address of the buffer that DOS uses for disk searches
    (and FCB-based file I/O).

        <B>Entry</B>   AH    = 1Ah
                DS:DX = Address of DTA buffer

        <B>Return</B>  Nothing

    ------------------------------------------------------------------

    DOS supplies a default DTA of 128 bytes at offset 0080h in the
    Program Segment Prefix (PSP).

    This function is used with the "Find First" and "Find Next"
    functions (both Handle and FCB) and with FCB-based file I/O.
</pre><hr><b>See Also:</b> <a href="ng513b.php">2fh</a> <a href="ng175a5.php">4eh</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

