


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 56h            rename file (rename)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 56h            rename file (rename)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 56h            rename file (rename)</b></title>
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
<a href="ng18570.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng18a4a.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 56h            Rename File (RENAME)</B>

    Renames or moves a file or directory by changing its directory
    entry.

        <B>Entry</B>   AH    = 56h
                DS:DX = Pointer to an ASCIIZ string containing
                        original path and filename
                ES:DI = Pointer to an ASCIIZ string containing
                        new path and filename

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 02h File not found
                     | 03h Path not found
                     | 05h Access denied
                     | 11h Not the same device

    ------------------------------------------------------------------

    Open files must be closed before they are moved or renamed with
    this function.

    A program can use this function to move a file or directory by
    specifying different paths in the parameters and keeping the
    filename or directory name the same. This function cannot be used
    to move files or directories from one disk drive to another;
    however both the old and new names must specify the same drive
    either explicitly or by default.

    Wildcard characters cannot be included in the filenames.
</pre><hr><b>See Also:</b> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

