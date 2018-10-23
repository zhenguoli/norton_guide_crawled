


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 38h            get/set country information</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 38h            get/set country information</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 38h            get/set country information</b></title>
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
<a href="ng6c02.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng74cb.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 38h            Get/Set Country Information</B>

    Returns country-dependent information or sets the country code.

               <B>This description is valid for DOS 3.0+</B>

    1.  Get information for the current country or a specified country:

        <B>Entry</B>   AH    = 38h
                AL    = Country code (00h = current country)
                BX    = 16-bit country code (if AL=FFh)
                DS:DX = Pointer to CountryInfo structure

        <B>Return</B>  BX = Country code
                CountryInfo filled
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found

    To get country-dependent information for the current country, call
    this function with 00h in AL. To get information for another
    country, specify the appropriate country code in AL. For country
    codes larger than 254 (0FEh), enter FFh in AL and the country code
    in BX.

    ------------------------------------------------------------------

    2.  Set the country code that DOS uses to determine country
        information for the keyboard and screen (DOS 3.0+)

        <B>Entry</B>   AH = 38h
                AL = Country code
                BX = 16-bit country code (if AL=FFh)
                DX = FFFFh

        <B>Return</B>  AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found

    To specify a country code larger than 254 (FEh), place FFh in AL
    and the 16-bit country code in BX.
</pre><hr><b>See Also:</b> <a href="ng1d62a.php">6501h</a> <a href="ng1f445.php">6601h</a> <a href="ng1f59a.php">6602h</a> <a href="ng3a618.php">ExtCountryInfo</a> <a href="ng373d7.php">CountryCodes</a> <pre></pre><hr><center><b>
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

