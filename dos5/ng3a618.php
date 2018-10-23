


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - Norton Guide, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - Norton Guide">
<title>ClipX - DOS 5.0 Ref. - Norton Guide</title>
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
<a href="ng3a2f9.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3ab62.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

;InfoID                 db ?            ; One byte precedes ExtCountryInfo
struc ExtCountryInfo                    ; Int 21h/AX=6501h (DOS 3.3+)
 eciLength              dw ?            ; Byte size of structure - 2
 eciCountryCode         dw ?            ; Country Code
 eciCodePageID          dw ?            ; Code page identifier
 ; Following = CountryInfo (Int 21h/AH=38h, DOS 2.11+, 34d bytes)
 eciDateFormat          dw ?            ; Date format
 eciCurrency            db 5 dup (?)    ; Currency symbol (ASCIIZ)
 eciThousands           db 2 dup (?)    ; Thousands separator (ASCIIZ)
 eciDecimal             db 2 dup (?)    ; Decimal separator (ASCIIZ)
 eciDateSep             db 2 dup (?)    ; Date separator (ASCIIZ)
 eciTimeSep             db 2 dup (?)    ; Time separator (ASCIIZ)
 eciBitField            db ?            ; Currency format
 eciCurrencyPlaces      db ?            ; Places after decimal point
 eciTimeFormat          db ?            ; 12-hour or 24-hour format
 eciCaseMap             dd ?            ; Addr of case-mapping routine
 eciDataSep             db 2 dup (?)    ; Data list separator (ASCIIZ)
 eciReserved            db 10 dup (?)   ; Reserved
ends                                    ; = 40d bytes


        ; eciDateFormat
        date_usa        = 0000h         ; Month/day/year
        date_europe     = 0001h         ; Day/month/year
        date_japan      = 0002h         ; Year/month/day

        ; eciTimeFormat
        time_12hour     = 0
        time_24hour     = 1

        ; eciBitField                   ; (bits 2-7 undefined)
        currency_follows_amount = 0001b ; bit 0=0: precedes amount
        currency_space_amount   = 0010b ; bit 1=0: no space between
</pre><hr><b>See Also:</b> <a href="ng1d62a.php">6501h</a> <a href="ng372f5.php">CodePageIDs</a> <a href="ng373d7.php">CountryCodes</a> <pre></pre><hr><center><b>
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

