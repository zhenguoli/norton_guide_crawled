


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / b711h         set true-name flag                           dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / b711h         set true-name flag                           dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / b711h         set true-name flag                           dos 4.0+</b></title>
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
<a href="ng26942.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> [Next Entry&gt;&gt;]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / B711h         Set True-Name Flag                           DOS 4.0+</B>

    Sets the current program's flag that specifies whether the APPEND
    command converts a filename to a full path when it processes
    system functions such as Open File with Handle (Int 21h/3Dh).

        <B>Entry</B>   AX = 0B711h

        <B>Return</B>  Nothing

    ------------------------------------------------------------------

    If the true-name flag is set, APPEND expands filenames that are
    passed to the following functions:

        Open File with Handle   Int 21h function 3Dh
        Get File Attributes     Int 21h function 4300h
        Find First File         Int 21h function 4Eh
        Extended Open/Create    Int 21h function 6Ch

    For each function, the program passes an address to the
    zero-terminated filename and APPEND copies the zero-terminated
    path to the same address. The program making the call must ensure
    that the buffer at the address is large enough to contain the full
    path. The APPEND command <B>resets</B> the true-name flag after expanding
    a filename.
</pre><hr><b>See Also:</b> <a href="ng1ff99.php">6Ch</a> <pre></pre><hr><center><b>
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

