


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5803h          set upper-memory link                        dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5803h          set upper-memory link                        dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5803h          set upper-memory link                        dos 5.0+</b></title>
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
<a href="ng199a5.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng19dc7.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5803h          Set Upper-Memory Link                        DOS 5.0+</B>

    Links or unlinks the upper memory area. When this area is linked,
    a program can allocate memory from it.

        <B>Entry</B>   AX = 5803h
                BX = 00h | 01h   link | unlink upper memory area

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 07h Memory blocks destroyed

    ------------------------------------------------------------------

    If this function returns an error value of 1 (invalid function),
    DOS has been loaded without the command "DOS=UMB" having been
    specified in the CONFIG.SYS file.

    A program that changes the upper-memory link state should restore
    its original state before terminating.
</pre><hr><b>See Also:</b> <a href="ng199a5.php">5802h</a> <pre></pre><hr><center><b>
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

