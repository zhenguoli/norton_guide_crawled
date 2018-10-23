


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / b706h         get append.exe modes flag                    dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / b706h         get append.exe modes flag                    dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / b706h         get append.exe modes flag                    dos 4.0+</b></title>
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
<a href="ng264aa.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng26942.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / B706h         Get APPEND.EXE Modes Flag                    DOS 4.0+</B>

    Returns the current operation modes for the APPEND command.

        <B>Entry</B>   AX = 0B706h

        <B>Return</B>  BX = APPEND operation modes

        <B>BX bit  Meaning</B>
        0       APPEND is enabled.
        12      APPEND applies appended directories to file requests
                that already specify a drive.
        13      APPEND applies appended directories to file requests
                that already specify a path (set if /PATH switch is
                on).
        14      APPEND stores the appended directories in the APPEND
                environment variable (set if /e switch specified).
        15      APPEND applies appended directories to functions such
                as Load and Execute Program (Int 21h/4B00h), and Find
                First File (Int 21h/4Eh) (set if /x switch is on).
        All other bits are reserved (0).
</pre><hr><b>See Also:</b> <a href="ng26942.php">B707h</a> <pre></pre><hr><center><b>
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

