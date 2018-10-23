


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 3ch            create file with handle</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 3ch            create file with handle</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 3ch            create file with handle</b></title>
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
<a href="ng7a79.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng8416.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 3Ch            Create File with Handle</B>

    Creates a new file or opens and truncates an existing file to zero
    length.

        <B>Entry</B>   AH    = 3Ch
                CX    = File attributes
                DS:DX = Pointer to ASCIIZ filename

        <B>Return</B>  AX = File handle, if CF clear
                or
                AX = Error code, if CF is set
                     | 03h Path not found
                     | 04h No handle available
                     | 05h Access denied (file is read-only,
                     |     or root directory is full)

    ------------------------------------------------------------------

    This function opens the file whose pathname is specified in the
    ASCIIZ string at DS:DX. If the file doesn't already exist, it is
    created. If a file with the specified name already exists, it is
    truncated to zero length, effectively <U>deleting</U> the old data from
    the file.

    The file attributes passed in the CX register can be a combination
    of the following values: attr_normal, attr_readonly, attr_hidden,
    attr_system, attr_volume, and attr_archive.

    When DOS creates a file, it opens the file with read-and-write
    access and compatibility sharing mode and sets the file pointer to
    zero (beginning of file). If the attribute read-only is specified
    in CX, it takes effect only after the new file is closed.

    Function 3Ch creates a volume label for the medium in the
    specified drive only if CX specifies the attribute attr_volume and
    the current medium does not have an existing volume label.

    Function 4301h can be used to change a file's attributes.

    Function 5Bh is similar to this function, but does not overwrite
    the file if it already exists.
</pre><hr><b>See Also:</b> <a href="ngb028.php">4301h</a> <a href="ng1a846.php">5ah</a> <a href="ng1ad95.php">5bh</a> <a href="ng1ff99.php">6ch</a> <a href="ng19dc7.php">59h</a> <a href="ng33042.php">Dev0Dh</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

