


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3301h          set ctrl-c check flag</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3301h          set ctrl-c check flag</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3301h          set ctrl-c check flag</b></title>
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
<a href="ng5f0a.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng6398.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3301h          Set Ctrl-C Check Flag</B>

    Turns Ctrl-C check flag on or off.

        <B>Entry</B>   AX = 3301h
                DL = 0 | 1   Set BREAK flag off | on

        <B>Return</B>  Nothing

    ------------------------------------------------------------------

    If the Ctrl-C (Ctrl-Break) flag is off, DOS checks for Ctrl-C
    keystrokes only while processing I/O functions 01h through 0Ch.
    If the flag is on, DOS checks for Ctrl-C while processing other
    system functions, such as disk operations.

    The Ctrl-C flag affects all programs. If a program changes the
    state of this flag, the state change remains in effect even after
    the program terminates.
</pre><hr><b>See Also:</b> <a href="ng5f0a.php">3300h</a> <pre></pre><hr><center><b>
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

