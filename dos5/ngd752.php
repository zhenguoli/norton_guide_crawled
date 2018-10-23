


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4407h          check device output status</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4407h          check device output status</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4407h          check device output status</b></title>
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
<a href="ngd5c6.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngd9e3.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4407h          Check Device Output Status</B>

    Checks to see if the device or file is ready for output.

        <B>Entry</B>   AX = 4407h
                BX = Device or file handle

        <B>Return</B>  AL = FFh   Ready
                AL = 00h   Device not ready
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle

    <B>Note</B>
    For an output file, this function always returns AL = FFh (ready),
    even if the disk is full or there is no disk in the drive.

    
    <B>Example</B>

        mov     bx,StdPrn
        mov     ax,4407h
        int     21h
        jc      @@error
        cmp     al,0ffh
        jnz     @@PRN_not_ready
        ;...
</pre><hr><b>See Also:</b> <a href="ngd5c6.php">4406h</a> <a href="ng32536.php">Dev0Ah</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

