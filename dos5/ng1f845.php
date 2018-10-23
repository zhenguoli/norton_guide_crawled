


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 67h            set maximum handle count                     dos 3.3+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 67h            set maximum handle count                     dos 3.3+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 67h            set maximum handle count                     dos 3.3+</b></title>
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
<a href="ng1f59a.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1fcb1.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 67h            Set Maximum Handle Count                     DOS 3.3+</B>

    Sets the maximum number of handles a program can use at any one
    time.

        <B>Entry</B>   AH = 67h
                BX = Maximum number of open handles

        <B>Return</B>  AX = Error code, if CF is set
                     | ??

    ------------------------------------------------------------------

    This function sets the maximum number of handles for the program
    but does not change the number of handles available in the system.
    The total number of system handles is set by the FILES command in
    the CONFIG.SYS file.

    The maximum handle count specified in BX is a property of the
    given program and is not inherited by child programs. This count
    must be in the range 20 to 65,535. If a number less than 20 is
    specified, the function uses 20 by default.

    If this function is used to reduce the number of allowed handles,
    the new limit does not take effect until any handles above the new
    limit are closed.


    <B>Note</B>
    If a program requests an increase in the number of file handles,
    there must be enough free memory for DOS to process this function.
</pre><hr><b>See Also:</b> <a href="ng13c94.php">46h</a> <a href="ng14fd0.php">4ah</a> <pre></pre><hr><center><b>
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

