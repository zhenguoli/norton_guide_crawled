


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 0104h         hold print jobs and get status               dos 3.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 0104h         hold print jobs and get status               dos 3.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 0104h         hold print jobs and get status               dos 3.0+</b></title>
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
<a href="ng220d7.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng2254a.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 0104h         Hold Print Jobs and Get Status               DOS 3.0+</B>

    Stops the current print job and returns the address of the PRINT
    queue.

        <B>Entry</B>   AX = 0104h

        <B>Return</B>  DX    = Error count
                DS:SI = Pointer to print queue

    ------------------------------------------------------------------

    The print queue consists of a series of 64-byte entries, each
    containing a zero-terminated string specifying the path of a file
    in the queue. The first file in the list is the one currently
    being printed. The last entry in the list consists of a single
    null character.

    Programs must <B>not</B> change the contents of the print queue. To add or
    remove a file from the queue, use Int 2Fh functions 0101h or 0102h.

    The print spooler continues to <B>hold</B> the current print job until
    Int 2Fh function 0105h (Release Print Jobs) is called.
</pre><hr><b>See Also:</b> <a href="ng21ddb.php">0101h</a> <a href="ng21fa2.php">0102h</a> <a href="ng2254a.php">0105h</a> <pre></pre><hr><center><b>
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
