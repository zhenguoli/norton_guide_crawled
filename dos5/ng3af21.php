


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - Norton Guide, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - Norton Guide">
<title>ClipX - DOS 5.0 Ref. - Norton Guide</title>
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
<a href="ng3ac8e.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3b483.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

        ; File attributes
        attr_normal    = 00h    ; File can be read from or written to
        attr_readonly  = 01h    ; File can be read from, not written to
        attr_hidden    = 02h    ; File or directory is hidden
        attr_system    = 04h    ; System file or directory
        attr_volume    = 08h    ; Filename is the volume label
        attr_directory = 10h    ; Filename identifies a directory
        attr_archive   = 20h    ; File modified since last backup
        ATTR_ANY       = 3fh    ; All of the above (OR'ed together)

        ; bits  7654 3210
        ;       ..ad vshr       Bits 7 and 6 are reserved (set to 0).
        ;
        ; attr_readonly Write attempts to the file will cause an error.
        ; attr_hidden   System commands (such as DIR) do not list the
        ;               file. Functions such as FindFirst/FindNext do
        ;               not return information about the file, unless
        ;               this attribute is specified.
        ; attr_system   Reserved (by convention) for system files such
        ;               as IBMBIO.COM or IO.SYS. This has the same
        ;               effect as attr_hidden and, when applied to
        ;               program files, prevents COMMAND.COM from
        ;               finding and running the files.
        ; attr_archive  DOS automatically sets this attribute when the
        ;               file is created or written to. The attribute
        ;               does not affect access to the file but gives
        ;               (backup) programs a quick way to check for
        ;               potential changes to the file contents.
</pre><hr><b>See Also:</b> <a href="ngaba9.php">4300h</a> <a href="ngb028.php">4301h</a> <a href="ng175a5.php">4eh</a> <a href="ng7d90.php">3ch</a> <pre></pre><hr><center><b>
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

