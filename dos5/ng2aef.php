


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 0eh            set default drive</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 0eh            set default drive</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 0eh            set default drive</b></title>
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
<a href="ng2896.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng2fa2.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 0Eh            Set Default Drive</B>

    Sets the default drive and returns the number of logical drives in
    the system.

        <B>Entry</B>   AH = 0Eh
                DL = Drive number (0 = A, 1 = B, 2 = C etc.)

        <B>Return</B>  AL = Number of logical drives in the system

    ------------------------------------------------------------------

    The return value includes floppy disk drives, RAM disks, and
    logical drives on any hard disks in the system.

    The number of logical drives in the system is not necessarily the
    same as the number of physical drives. In addition, the number of
    logical drives returned may not map directly to drive letters.

    If the CONFIG.SYS file contains a LASTDRIVE statement, this
    function returns either the number of logical drives for the
    computer or the number of drives specified by LASTDRIVE, whichever
    is larger (extra drive numbers are not valid until a connection to
    a physical drive is established). LASTDRIVE defaults to E:
    returning AL = 05h.


    The drive number used by Set/Get Default Drive (functions 0Eh and
    19h) is one less than the drive number used by other functions.
</pre><hr><b>See Also:</b> <a href="ng3165.php">19h</a> <a href="ng7a79.php">3bh</a> <a href="ng6398.php">3305h</a> <a href="ngdcce.php">4409h</a> <a href="ng12589.php">440eh</a> <a href="ng12c6e.php">440fh</a> <pre></pre><hr><center><b>
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

