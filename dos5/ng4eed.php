


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 2eh            set/reset verify flag</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 2eh            set/reset verify flag</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 2eh            set/reset verify flag</b></title>
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
<a href="ng4cd7.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng513b.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 2Eh            Set/Reset Verify Flag</B>

    Turns the write verify flag on or off.

        <B>Entry</B>   AH = 2Eh
                AL = 0 | 1   Turn VERIFY off | on
                DL = 0       (DOS 1.x/2.x only)

        <B>Return</B>  Nothing

    ------------------------------------------------------------------

    When the verify flag is on, all disk writes are verified provided
    the device driver supports read-after-write verification.

    The verify flag is typically off, because disk errors are rare and
    verification slows writing.

    Note that the flag can be changed by DOS's VERIFY command.
</pre><hr><b>See Also:</b> <a href="ng18570.php">54h</a> <pre></pre><hr><center><b>
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

