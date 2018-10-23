


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4fh            find next file (find next)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4fh            find next file (find next)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4fh            find next file (find next)</b></title>
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
<a href="ng175a5.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng18258.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4Fh            Find Next File (FIND NEXT)</B>

    Searches for the next directory entry that matches the name and
    attributes specified in a previous call to Find First (4eh). The
    current DTA must contain the information filled in by the Find
    First function.

        <B>Entry</B>   AH = 4Fh

        <B>Return</B>  FileInfo structure at current DTA
                or
                AX = Error code, if CF is set
                     | 02h File not found
                     | 03h Path not found
                     | 12h No more files to be found

    ------------------------------------------------------------------

    Function 4fh continues the file search that was begun by function
    4eh (Find First File).
</pre><hr><b>See Also:</b> <a href="ng175a5.php">4eh</a> <a href="ng19dc7.php">59h</a> <a href="ng3b848.php">FileInfo</a> <pre></pre><hr><center><b>
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

