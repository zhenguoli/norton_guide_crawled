


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 6507h          get double-byte character set                dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 6507h          get double-byte character set                dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 6507h          get double-byte character set                dos 4.0+</b></title>
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
<a href="ng1e6c4.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1f08f.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 6507h          Get Double-Byte Character Set                DOS 4.0+</B>

    Returns the address of a buffer containing values that specify the
    valid ranges for lead bytes in the given double-byte character set
    (DBCS).

        <B>Entry</B>   AX    = 6507h
                BX    = Code page ID (0FFFFh = current code page)
                CX    = Size of buffer (min. 5)
                DX    = Country code (0FFFFh = current country)
                ES:DI = Pointer to country info buffer

        <B>Return</B>  Buffer updated
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (CX &lt; 5)
                     | 02h File not found

    ------------------------------------------------------------------

    Format of country info buffer:
        Offset  Size    Description
        00h     1       Info-ID (= 07h)
        01h     4       32-bit address of DBCS table

    The DBCS values start with a 16-bit value that
    specifies the length of the table. The remainder of the table
    consists of pairs of bytes with each pair specifying the low and
    high character values for a valid range of lead byte values.
</pre><hr><b>See Also:</b> <a href="ng1d62a.php">6501h</a> <a href="ng1f445.php">6601h</a> <a href="ng1f59a.php">6602h</a> <a href="ng372f5.php">CodePageIDs</a> <a href="ng373d7.php">CountryCodes</a> <pre></pre><hr><center><b>
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

