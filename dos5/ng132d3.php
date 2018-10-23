


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4411h          query ioctl device                           dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4411h          query ioctl device                           dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4411h          query ioctl device                           dos 5.0+</b></title>
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
<a href="ng12f6a.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng136fa.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4411h          Query IOCTL Device                           DOS 5.0+</B>

    Determines whether the specified IOCTL function is supported by
    the given drive.

        <B>Entry</B>   AX = 4411h
                BL = Drive number (0 = default, 1 = A, etc.)
                CH = 08h (device category, must be 8)
                CL = Function (function 440Dh minor code):
                     | 40h   Set device parameters
                     | 41h   Write track on logical drive
                     | 42h   Format track on logical drive
                     | 46h   Set media ID
                     | 60h   Get device parameters
                     | 61h   Read track on logical drive
                     | 62h   Verify track on logical drive
                     | 66h   Get media ID
                     | 68h   Sense media ID

        <B>Return</B>  Nothing (CF clear)
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 0Fh Invalid drive

    ------------------------------------------------------------------
              
    This function returns an error value of 1 (invalid function) if
    the device driver has no support for IOCTL functions, 5 (access
    denied) if the driver supports IOCTL functions but does not
    support the specified IOCTL.
</pre><hr><b>See Also:</b> <a href="ng12f6a.php">4410h</a> <a href="ng35cdd.php">Dev19h</a> <pre></pre><hr><center><b>
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

