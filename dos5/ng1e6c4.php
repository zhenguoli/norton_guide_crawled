


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 6506h          get collate-sequence table                   dos 3.3+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 6506h          get collate-sequence table                   dos 3.3+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 6506h          get collate-sequence table                   dos 3.3+</b></title>
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
<a href="ng1e275.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1ec68.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 6506h          Get Collate-Sequence Table                   DOS 3.3+</B>

    Returns the address of the collate-sequence table for the
    specified code page and country code. The table is a character
    array of 256 elements; each element specifies the sorting weight
    of the corresponding character. (The sorting weight is the value
    used to determine whether a character appears before or after
    another character in a sorted list.) Sorting weights and character
    values are not necessarily the same -- for example, in a given
    character set, the sorting weights for the letters A and B might
    be 1 and 2 even though their character values are 65 and 66.

        <B>Entry</B>   AX    = 6506h
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
        00h     1       Info-ID (= 06h)
        01h     4       32-bit address of collate-sequence table

    The collate-sequence table starts with a 16-bit value that
    specifies the length of the table; the remainder of the table
    specifies the sorting weight for each character.
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

