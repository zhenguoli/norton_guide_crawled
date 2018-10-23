


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4401h          set device data</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4401h          set device data</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4401h          set device data</b></title>
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
<a href="ngb40a.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngca5c.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4401h          Set Device Data</B>

    Tells DOS how to use the device referenced by the specified
    handle. This function cannot change how DOS uses a file.

        <B>Entry</B>   AX = 4401h
                BX = Device handle
                DX = Device information

        <B>Return</B>  AX changed
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 06h Invalid handle
                     | 0Dh Invalid data

    ------------------------------------------------------------------

    The information passed in the DX register is:

                <B>Bit     Description</B>
                0       1 = Console input device
                1       1 = Console output device
                2       1 = Null device
                3       1 = Clock device
                4       1 = Special device
                5       1 = Binary mode, 0 = ASCII mode
                6       0 = EOF returned if device is read
                7       Must be 1 to indicate a device
                8-15    Must be 0
</pre><hr><b>See Also:</b> <a href="ngb40a.php">4400h</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

