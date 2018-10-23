


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5e00h          get machine name                             dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5e00h          get machine name                             dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5e00h          get machine name                             dos 3.1+</b></title>
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
<a href="ng1ba85.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1bfbf.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5E00h          Get Machine Name                             DOS 3.1+</B>

    Returns the network name of the local computer (machine).

        <B>Entry</B>   AX    = 5E00h
                DS:DX = Pointer to a 16-byte memory buffer

        <B>Return</B>  If CH &gt; 0
                   CL = NetBIOS number
                   Machine name copied to buffer (blank-padded ASCIIZ)
                endif
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (Network not running)

    ------------------------------------------------------------------

    This function returns an error value of 01h (invalid function) if
    the network is not running. If the network was never installed, a
    zero is returned in the CH register.
</pre><hr><b>See Also:</b> <a href="ng1c990.php">5f03h</a> <a href="ng19dc7.php">59h</a> <a href="ng22b46.php">1100h</a> <pre></pre><hr><center><b>
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

