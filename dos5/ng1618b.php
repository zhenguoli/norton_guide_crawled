


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4b01h          load program</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4b01h          load program</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4b01h          load program</b></title>
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
<a href="ng15656.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng165f8.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4B01h          Load Program</B>

    Loads a program into memory and creates a new program segment
    prefix (PSP), but does not transfer control to the new program.

        <B>Entry</B>   AX    = 4B01h
                DS:DX = Pointer to ASCIIZ program name (.COM or .EXE)
                ES:BX = Pointer to a Load structure

        <B>Return</B>  Expect all registers to be changed, except CS:IP
                AX = Error code, if CF is set
                     | 01h Invalid function number
                     | 02h File not found
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied
                     | 08h Insufficient memory
                     | 0Ah Invalid environment
                     | 0Bh Invalid format

    ------------------------------------------------------------------

    Before function 4B01h is invoked, DS:DX must point to a zero-
    terminated string that specifies the program to load. The program
    name must be a valid DOS filename, and the file must be a valid
    .COM or .EXE program. ES:BX must point to a Load structure.

    There must be enough free memory for DOS to load the program file.


    Function 4b01h was undocumented prior to the release of DOS 5.0.
</pre><hr><b>See Also:</b> <a href="ng15656.php">4b00h</a> <a href="ng165f8.php">4b03h</a> <a href="ng16969.php">4b05h</a> <a href="ng3e6e1.php">PSP</a> <a href="ng3caac.php">Load</a> <pre></pre><hr><center><b>
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

