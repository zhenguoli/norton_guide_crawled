


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440ch /65h     get iteration count                          dos 3.2+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440ch /65h     get iteration count                          dos 3.2+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440ch /65h     get iteration count                          dos 3.2+</b></title>
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
<a href="ngf8db.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngfd74.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Ch /65h     Get Iteration Count                          DOS 3.2+</B>

    Returns the number of times the device driver is to try to send
    output to a device before assuming that the device is busy.

        <B>Entry</B>   AX    = 440Ch
                BX    = Device handle
                CH    = Device category:
                        | 01h   Serial device
                        | 03h   Console (screen)
                        | 05h   Parallel printer
                CL    = 65h
                DS:DX = Pointer to 2-byte buffer for iteration count

        <B>Return</B>  Buffer updated
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 06h Invalid handle
                     |     Device-dependent error
</pre><hr><b>See Also:</b> <a href="ngeda7.php">440Ch /45h</a> <pre></pre><hr><center><b>
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

