


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5d0ah          set extended error                           dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5d0ah          set extended error                           dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5d0ah          set extended error                           dos 3.1+</b></title>
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
<a href="ng1b1df.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1bd1c.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5D0Ah          Set Extended Error                           DOS 3.1+</B>

    Sets the error class, location, suggested action, and other
    information that will be returned by the next call to function 59h.

        <B>Entry</B>   AX    = 5D0Ah
                DS:DX = Pointer to an Error structure

        <B>Return</B>  Nothing


    The Error structure contains error information as well as the
    contents of the registers when an error occurred.

    <B>Note</B>
    This function was undocumented before DOS 5.0. The MS-DOS
    Programmer's Reference 5.0 incorrectly states that this call was
    introduced in DOS 4.0 and that the pointer should be passed in
    the DS:SI registers.
</pre><hr><b>See Also:</b> <a href="ng19dc7.php">59h</a> <a href="ng393f8.php">Error</a> <pre></pre><hr><center><b>
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

