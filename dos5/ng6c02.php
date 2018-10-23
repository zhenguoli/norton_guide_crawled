


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 36h            get disk free space</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 36h            get disk free space</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 36h            get disk free space</b></title>
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
<a href="ng6afc.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng6f6e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 36h            Get Disk Free Space</B>

    Returns the number of available clusters, and other information
    about the disk in the specified drive.

        <B>Entry</B>   AH = 36h
                DL = Drive number (0=default, 1=A, 2=B, etc.)

        <B>Return</B>  AX = FFFFh if function failed
                otherwise
                AX = Number of sectors per cluster
                BX = Number of available clusters on the disk
                CX = Number of bytes per sector
                DX = Total number of clusters on the disk

    ------------------------------------------------------------------

    The number of free bytes on the disk can be calculated by
    multiplying the available clusters by the sectors per cluster by
    the bytes per sector (BX * AX * CX).

    DOS reports sectors allocated in the file allocation table (FAT)
    but not belonging to a file (lost clusters) as used clusters, just
    as if they were allocated to a file.
</pre><hr><center><b>
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

