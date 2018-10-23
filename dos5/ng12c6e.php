


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440fh          set logical drive map                        dos 3.2+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440fh          set logical drive map                        dos 3.2+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440fh          set logical drive map                        dos 3.2+</b></title>
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
<a href="ng12589.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng12f6a.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Fh          Set Logical Drive Map                        DOS 3.2+</B>

    Sets the active drive number for a physical drive that has more
    than one logical drive number.

        <B>Entry</B>   AX = 440Fh
                BL = Drive number (0 = default, 1 = A, etc.)

        <B>Return</B>  AL = 0   Physical drive has only one drive number
                AL &gt; 0   Active drive number for the corresponding
                         physical drive (1 = A, 2 = B, etc.)
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 0Fh Invalid drive

    ------------------------------------------------------------------

    Programs that set the active drive prevent DOS from prompting the
    user with the message "Insert diskette for drive <B>x:</B> and press any
    key when ready."
</pre><hr><b>See Also:</b> <a href="ng12589.php">440Eh</a> <a href="ng3592f.php">Dev18h</a> <pre></pre><hr><center><b>
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

