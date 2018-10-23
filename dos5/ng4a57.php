


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 2ch            get time</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 2ch            get time</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 2ch            get time</b></title>
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
<a href="ng48fa.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng4cd7.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 2Ch            Get Time</B>

    Reports the current DOS system time (the time maintained by the
    clock device).

        <B>Entry</B>   AH = 2Ch

        <B>Return</B>  CH = Hour in 24-hour format (0 - 23)
                CL = Minutes (0 - 59)
                DH = Seconds (0 - 59)
                DL = Hundredths of a second (0 - 99)

    ------------------------------------------------------------------

    On most systems, the hundredths field will only be accurate to
    within 1/18.2 seconds rather than 1/100 seconds.

    In some systems in which the real-time clock does not track
    hundredths of a second, the value in DL may be unpredictable.
</pre><hr><b>See Also:</b> <a href="ng47b7.php">2ah</a> <a href="ng48fa.php">2bh</a> <a href="ng4cd7.php">2dh</a> <pre></pre><hr><center><b>
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

