


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4301h          set file attributes</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4301h          set file attributes</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4301h          set file attributes</b></title>
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
<a href="ngaba9.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngb40a.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4301h          Set File Attributes</B>

    Sets the attributes for a specified file or directory.

        <B>Entry</B>   AX    = 4301h
                CX    = Desired attributes
                DS:DX = Pointer to filespec (ASCIIZ string)

        <B>Return</B>  AX = Error code, if CF is set
                     | 01h Invalid function code
                     | 02h File not found
                     | 03h Path not found
                     | 05h Access denied

    ------------------------------------------------------------------

    The file specification must be a valid DOS file name or directory
    name and cannot contain wildcards.

    The file attributes in the CX register can be a combination
    (OR'ed) of the following values:

                attr_normal     = 00h
                attr_readonly   = 01h
                attr_hidden     = 02h
                attr_system     = 04h
                attr_archive    = 20h

    Only attr_hidden and attr_system are meaningful for directories.

    Bits 6 and 7 of the attribute byte are reserved and must be zero
    (values larger than 3Fh should not be specified).
</pre><hr><b>See Also:</b> <a href="ngaba9.php">4300h</a> <a href="ng7d90.php">3ch</a> <a href="ng1ff99.php">6ch</a> <a href="ng19dc7.php">59h</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

