


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b05h         identify instance data                       dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4b05h         identify instance data                       dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b05h         identify instance data                       dos 5.0+</b></title>
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
<a href="ng2591e.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng25d87.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4B05h         Identify Instance Data                       DOS 5.0+</B>

    Identifies instance data maintained by a client program. A task
    switcher calls this function to create a linked list of instance
    data blocks for all client programs running on the system. Client
    programs with instance data must intercept interrupt 2Fh and
    process function 4B05h when they receive the function call.

        <B>Entry</B>   AX    = 4B05h
                ES:BX = 0000:0000h
                CX:DX = Address of service-function handler

        <B>Return</B>  ES:BX = Pointer to a SwStartupInfo structure
                or
                ES:BX = 0000:0000h

    [...]
</pre><hr><b>See Also:</b> <a href="ng3f96e.php">SwStartupInfo</a> <pre></pre><hr><center><b>
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

