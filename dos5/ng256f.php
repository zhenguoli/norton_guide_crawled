


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 0ch            flush buffer, read keyboard</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 0ch            flush buffer, read keyboard</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 0ch            flush buffer, read keyboard</b></title>
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
<a href="ng22b8.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng2896.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 0Ch            Flush Buffer, Read Keyboard</B>

    Removes any characters in the standard input buffer, then invokes
    the specified function.

        <B>Entry</B>   AH = 0Ch
                AL = Function to be invoked (06h, 07h, 08h)
                     (0Ah may not be used, 01h may be used but is
                      superseded)

        <B>Return</B>  AL = Return value from function
                     (zero if invalid function)

    ------------------------------------------------------------------

    This function clears the keyboard buffer, then invokes a DOS
    service (specified in AL). The purpose is to ensure that your
    program receives new input before it performs the followup
    function.


    <B>Note</B>
    If used to call function 06h, this function must pass 0FFh in the
    DL register; it cannot be used to write a character.
</pre><hr><b>See Also:</b> <a href="ng1878.php">06h</a> <a href="ng1ce0.php">07h</a> <a href="ng1f82.php">08h</a> <pre></pre><hr><center><b>
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

