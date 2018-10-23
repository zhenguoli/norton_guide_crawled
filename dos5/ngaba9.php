


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4300h          get file attributes</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4300h          get file attributes</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4300h          get file attributes</b></title>
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
<a href="nga2a0.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngb028.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4300h          Get File Attributes</B>

    Returns the attributes for a specified file or directory.

        <B>Entry</B>   AX    = 4300h
                DS:DX = Pointer to filespec (ASCIIZ string)

        <B>Return</B>  CX = File attributes
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 02h File not found
                     | 03h Path not found
                     | 05h Access denied

    ------------------------------------------------------------------

    The file specification must be a valid DOS file name or directory
    name and cannot contain wildcards.

    The file attributes returned in the CX register can be a
    combination (OR'ed) of the following values:

        attr_normal     = 00h   File can be read from or written to
        attr_readonly   = 01h   File can be read from but not written to
        attr_hidden     = 02h   File/directory is hidden and does not
                                appear in a directory listing
        attr_system     = 04h   File/directory is a system file
        attr_volume     = 08h   Filename is the current volume label
                                for the media
        attr_directory  = 10h   Filename identifies a directory,
                                not a file
        attr_archive    = 20h   File has been modified
</pre><hr><b>See Also:</b> <a href="ngb028.php">4301h</a> <a href="ng19dc7.php">59h</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

