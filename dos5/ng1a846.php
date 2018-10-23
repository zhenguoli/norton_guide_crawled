


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5ah            create temporary file                        dos 3.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5ah            create temporary file                        dos 3.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5ah            create temporary file                        dos 3.0+</b></title>
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
<a href="ng19dc7.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1ad95.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5Ah            Create Temporary File                        DOS 3.0+</B>

    Creates a file with a unique name and returns both a handle for
    the file and the new filename.

        <B>Entry</B>   AH    = 5Ah
                CX    = File attributes
                DS:DX = Pointer to path ending in \ (ASCIIZ string)

        <B>Return</B>  AX = File handle
                Unique filename appended to path (ASCIIZ string)
                or
                AX = Error code, if CF is set
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied

    ------------------------------------------------------------------

    Before function 5ah is invoked, DS:DX must point to a string that
    specifies the path for the temporary file; the path must end with
    a backslash (\) and a zero. The program must reserve the 13 bytes
    immediately following the terminating zero to hold the temporary
    filename.
    The file attributes parameter can be a combination of:
    attr_normal, attr_readonly, attr_hidden, attr_system, attr_archive.


    When DOS creates a file, it opens it with read-and-write access
    and compatibility sharing mode and sets the file pointer to zero.
    If the attr_readonly attribute is specified, it takes affect only
    after the new file is closed.

    DOS does not delete temporary files; programs using temporary
    files should delete them when they are no longer in use.
</pre><hr><b>See Also:</b> <a href="ng7d90.php">3ch</a> <a href="ng1ad95.php">5bh</a> <a href="ng19dc7.php">59h</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

