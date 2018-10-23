


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4300h         get himem.sys installed state                dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4300h         get himem.sys installed state                dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4300h         get himem.sys installed state                dos 5.0+</b></title>
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
<a href="ng2309b.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng2437c.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4300h         Get HIMEM.SYS Installed State                DOS 5.0+</B>

    Determines whether an extended-memory manager (HIMEM.SYS) has been
    loaded.

        <B>Entry</B>   AX = 4300h

        <B>Return</B>  AL = 80h | 00h   XMS-driver loaded | not loaded


    The HIMEM.SYS driver provides a set of functions that programs use
    to independently manage extended memory. Although programs can
    also use these functions to manage the high memory area (HMA) and
    upper memory blocks (UMBs), programs should <U>not</U> do so if DOS
    already manages these areas.

    This function returns the installed state of any extended-memory
    manager as long as the manager conforms to the Lotus/Intel/
    Microsoft/AST eXtended Memory Specification (XMS) version 2.0.
</pre><hr><b>See Also:</b> <a href="ng2437c.php">4310h</a> <pre></pre><hr><center><b>
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

