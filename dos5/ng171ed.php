


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4dh            get child-program return value</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4dh            get child-program return value</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4dh            get child-program return value</b></title>
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
<a href="ng16dfc.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng175a5.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4Dh            Get Child-Program Return Value</B>

    Retrieves the return value specified by the last child program.
    The child program must have specified a return value by using
    either function 4ch (EXIT) or 31h (KEEP).

        <B>Entry</B>   AH = 4Dh

        <B>Return</B>  AL = Return value from child program
                AH = Termination method
                     | 00h   Normal termination
                     | 01h   Terminated by Ctrl-C (Ctrl-Break)
                     | 02h   Terminated by DOS because of
                     |       critical device error
                     | 03h   Terminated by function 31h

    ------------------------------------------------------------------

    <B>Note</B>
    The return value for the program is available only once.
    Subsequent calls to this function in relation to the same child
    program give meaningless results.

    If there is no child-program return value to retrieve, this
    function does not return an error, and the information in the AX
    register is meaningless.
</pre><hr><b>See Also:</b> <a href="ng56df.php">31h</a> <a href="ng16dfc.php">4ch</a> <a href="ng15656.php">4b00h</a> <pre></pre><hr><center><b>
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

