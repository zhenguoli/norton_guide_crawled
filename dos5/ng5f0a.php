


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3300h          get ctrl-c check flag</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3300h          get ctrl-c check flag</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3300h          get ctrl-c check flag</b></title>
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
<a href="ng5dd2.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng60f3.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3300h          Get Ctrl-C Check Flag</B>

    Returns the status of the Ctrl-C checking.

        <B>Entry</B>   AX = 3300h

        <B>Return</B>  DL = 0 | 1   BREAK flag is off | on

    ------------------------------------------------------------------

    If the Ctrl-C (Ctrl-Break) flag is off, DOS checks for Ctrl-C
    keystrokes only while processing I/O functions 01h through 0Ch.
    If the flag is on, DOS checks for Ctrl-C while processing other
    system functions.
</pre><hr><b>See Also:</b> <a href="ng60f3.php">3301h</a> <pre></pre><hr><center><b>
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

