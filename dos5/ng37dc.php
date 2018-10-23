


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 25h            set interrupt vector</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 25h            set interrupt vector</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 25h            set interrupt vector</b></title>
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
<a href="ng36e3.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng3a69.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 25h            Set Interrupt Vector</B>

    Replaces the vector-table entry with the address of the specified
    interrupt handler.

        <B>Entry</B>   AH    = 25h
                AL    = Interrupt number
                DS:DX = Address of interrupt handler

        <B>Return</B>  Nothing

    ------------------------------------------------------------------
                    
    Programs should <U>never</U> set an interrupt handler by directly
    manipulating the interrupt vector table.

    When a program installs a new interrupt handler, it should use
    function 35h to retrieve the address of the original interrupt
    handler and restore this original address before terminating.
</pre><hr><b>See Also:</b> <a href="ng6afc.php">35h</a> <pre></pre><hr><center><b>
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

