


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 08h            read keyboard without echo</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 08h            read keyboard without echo</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 08h            read keyboard without echo</b></title>
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
<a href="ng1ce0.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng2224.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 08h            Read Keyboard without Echo</B>

    Waits for a character from the standard input device. Does not
    echo, but does check for Ctrl-C.

        <B>Entry</B>   AH = 08h

        <B>Return</B>  AL = Character

    ------------------------------------------------------------------

    If no character is available this function waits until one is
    available.

    If the character read from the keyboard is an extended key code
    (for example, if the user presses one of the function keys), this
    function returns 00h and the program must call the function again
    to get the second byte of the extended key code.
</pre><hr><b>See Also:</b> <a href="ng1878.php">06h</a> <a href="ng1ce0.php">07h</a> <a href="ng22b8.php">0Bh</a> <a href="ng256f.php">0Ch</a> <a href="ng27979.php">Int 23h</a> <pre></pre><hr><center><b>
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

