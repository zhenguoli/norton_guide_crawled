


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 30h            get version number</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 30h            get version number</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 30h            get version number</b></title>
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
<a href="ng513b.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng56df.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 30h            Get Version Number</B>

    Returns the DOS version number.

        <B>Entry</B>   AH = 30h
                (DOS 5.0+: AL = 0   Return BH = OEM number
                           AL = 1   Return BH = version flag)

        <B>Return</B>  AL    = Major version number
                AH    = Minor version number
                BL:CX = 24-bit user serial number
                        (zero if unused)
                BH    = OEM number
                        <B>or</B>
                        Version flag (DOS 5.0+):
                        bit 3 = 0: DOS runs in RAM
                        bit 3 = 1: DOS runs in ROM
                        other bits reserved (0)

    ------------------------------------------------------------------

    Used under DOS 3.30, this call would return AL = 03h and AH = 1Eh
    (30 decimal).


    <B>Notes</B>
    The version returned under DOS 4.0x may be modified by entries in
    the special program list.

    The version returned under DOS 5+ may be modified by SETVER; this
    version number can differ from the version number returned by
    function 3306h.

    The OS/2 v1.x Compatibility Box returns major version 0Ah (10).
    The OS/2 v2.x Compatibility Box returns major version 14h (20).
    The Windows/NT DOS box returns version 5.00, subject to SETVER.
</pre><hr><b>See Also:</b> <a href="ng65ad.php">3306h</a> <pre></pre><hr><center><b>
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

