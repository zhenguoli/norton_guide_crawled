


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 0bh            check keyboard status</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 0bh            check keyboard status</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 0bh            check keyboard status</b></title>
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
<a href="ng2224.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng256f.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 0Bh            Check Keyboard Status</B>

    Checks to see if a character is available from the standard input
    device. Checks for Ctrl-Break and Ctrl-C.

        <B>Entry</B>   AH = 0Bh

        <B>Return</B>  AL = FFh   One or more characters available
                AL = 00h   If no character is available

    ------------------------------------------------------------------

    This function is used to see if a character is available at the
    standard input device (usually the keyboard), before transferring
    control to one of the waiting keyboard input services (function
    07h or 08h).

    If DOS encounters a Ctrl-Break or Ctrl-C, it executes an Int 23h.
</pre><hr><b>See Also:</b> <a href="ng1ce0.php">07h</a> <a href="ng1f82.php">08h</a> <a href="ng1878.php">06h</a> <a href="ng27979.php">Int 23h</a> <pre></pre><hr><center><b>
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

