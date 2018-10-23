


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440bh          set sharing retry count                      dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440bh          set sharing retry count                      dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440bh          set sharing retry count                      dos 3.1+</b></title>
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
<a href="nge2c8.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngec05.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Bh          Set Sharing Retry Count                      DOS 3.1+</B>

    Sets the number of times DOS retries a disk operation after a
    failure caused by a file-sharing operation. When the number of
    retries is reached without success, DOS returns an error value to
    the program that requested the disk operation.

        <B>Entry</B>   AX = 440Bh
                CX = No. of times to execute delay loop between retries
                DX = No. of times to retry file operation

        <B>Return</B>  AX = Error code, if CF is set
                     | 01h Invalid function

    ------------------------------------------------------------------

    This function returns an error value of 1 (invalid function) if
    file sharing is not active (SHARE.EXE has not been loaded).

    The pause time depends on the computer's clock speed. The default
    sharing retry count is 3; the default number of times between
    retries is 1. If a program changes the retry count or pause value,
    it should restore the default values before terminating.
</pre><hr><b>See Also:</b> <a href="ng1b1df.php">5ch</a> <a href="ng19dc7.php">59h</a> <a href="ng228c2.php">1000h</a> <pre></pre><hr><center><b>
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

