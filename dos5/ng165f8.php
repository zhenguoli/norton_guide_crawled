


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4b03h          load overlay</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4b03h          load overlay</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4b03h          load overlay</b></title>
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
<a href="ng1618b.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng16969.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4B03h          Load Overlay</B>

    Loads a program as an overlay. DOS loads the overlay into memory
    already allocated by the program.

        <B>Entry</B>   AX    = 4B03h
                DS:DX = Pointer to ASCIIZ program name
                ES:BX = Pointer to a LoadOverlay structure

        <B>Return</B>  Expect all registers to be changed, except CS:IP
                AX = Error code, if CF is set
                     | 01h Invalid function number
                     | 02h File not found
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied
                     | 08h Insufficient memory
                     | 0Ah Invalid environment

    ------------------------------------------------------------------

    Before function 4B03h is invoked, DS:DX must point to a zero-
    terminated string that specifies the program to load. The program
    name must be a valid DOS filename. ES:BX must point to a LoadOverlay
    structure.
</pre><hr><b>See Also:</b> <a href="ng15656.php">4b00h</a> <a href="ng1618b.php">4b01h</a> <a href="ng3d274.php">LoadOverlay</a> <pre></pre><hr><center><b>
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

