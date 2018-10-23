


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5700h          get file date and time</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5700h          get file date and time</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5700h          get file date and time</b></title>
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
<a href="ng1862a.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng18d11.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5700h          Get File Date and Time</B>

    Returns the time and date a file was last modified (the last time
    its directory entry was updated).

        <B>Entry</B>   AX = 5700h
                BX = File handle

        <B>Return</B>  CX = Time
                DX = Date
                or
                AX = Error code, if CF is set
                     | 06h Invalid handle

    ------------------------------------------------------------------

    The values in CX and DX have the following format:

                <B>Bits    Contents</B>
        CX      0-4     Seconds divided by 2
                5-10    Minutes (0-59)
                11-15   Hours (0-23 on a 24-hour clock)

        DX      0-4     Day of month (1-31)
                5-8     Month (1 = January, 2 = February, etc.)
                9-15    Year offset from 1980
                        (add 1980 to get actual year)
</pre><hr><b>See Also:</b> <a href="ng18d11.php">5701h</a> <pre></pre><hr><center><b>
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

