


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b03h         allocate switcher id                         dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4b03h         allocate switcher id                         dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b03h         allocate switcher id                         dos 5.0+</b></title>
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
<a href="ng254b1.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng2591e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4B03h         Allocate Switcher ID                         DOS 5.0+</B>

    Returns a unique switcher identifier (in the range 01h through
    0Fh). A task switcher (or controlling session manager) calls this
    function on initialization and then uses the switcher identifier
    to create session identifiers for programs that it manages. The
    first-loaded task switcher is responsible for processing this
    function.

    Client programs must not call this function.

        <B>Entry</B>   AX    = 4B03h
                BX    = 00h   (Reserved, must be zero)
                ES:DI = Address of service-function handler

        <B>Return</B>  AX = 00h
                BX = New task switcher's identifier
                or
                BX = 00h

    [...]
</pre><hr><b>See Also:</b> <a href="ng254b1.php">4B02h</a> <a href="ng2591e.php">4B04h</a> <pre></pre><hr><center><b>
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

