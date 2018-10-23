


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 41h            delete file (unlink)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 41h            delete file (unlink)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 41h            delete file (unlink)</b></title>
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
<a href="ng9a20.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="nga2a0.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 41h            Delete File (UNLINK)</B>

    Deletes a specified file.

        <B>Entry</B>   AH    = 41h
                DS:DX = Pointer to filespec (ASCIIZ string)

        <B>Return</B>  AX = Error code, if CF is set
                     | 02h File not found
                     | 03h Path not found
                     | 05h Access denied

    ------------------------------------------------------------------

    This function removes the directory entry for the file whose
    pathname is given in the zero-ended string pointed to by DS:DX.
    Wildcard characters cannot be used in the pathname specification.

    <U>Note</U>
    Deleting an open file may result in corruption of the file system.

    This function cannot be used to remove a directory, a volume
    label, or a read-only file. A program can use function 4301h to
    change the attributes of a read-only file so that the file can be
    deleted.
</pre><hr><b>See Also:</b> <a href="ng77c3.php">3ah</a> <a href="ng901e.php">3eh</a> <a href="ngaba9.php">4300h</a> <a href="ngb028.php">4301h</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

