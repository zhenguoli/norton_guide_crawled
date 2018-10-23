


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 45h            duplicate file handle</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 45h            duplicate file handle</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 45h            duplicate file handle</b></title>
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
<a href="ng132d3.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng13c94.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 45h            Duplicate File Handle</B>

    Creates a new file handle that can be used to read from or write
    to the same file or device that is associated with the original
    handle.

        <B>Entry</B>   AH = 45h
                BX = Handle to duplicate

        <B>Return</B>  AX = Duplicate file handle
                or
                AX = Error code, if CF is set
                     | 04h No handles available
                     | 06h Invalid handle

    ------------------------------------------------------------------

    If this function is used to duplicate the handle of an open file,
    the file pointer for the new handle is set to the same position as
    the pointer for the open handle. Using either handle to read from
    or write to the file changes the file pointer for both handles.

    Duplicate File Handle can also be used to keep a file open while
    its directory entry is changed. If a program creates a duplicate
    handle and then closes the duplicate handle, the file's directory
    entry is updated (and buffers flushed), but the original handle
    remains open (and the file pointer unchanged).

    ------------------------------------------------------------------

    <B>Example</B>

        ; Pre-DOS 3.30 commit file
        mov     bx,[file_handle]        ; Handle of open file
        mov     ah,45h                  ; Force Duplicate Handle
        int     21h
        jc      @@error
        mov     bx,ax                   ; bx = duplicate handle
        mov     ah,3eh                  ; Close duplicate
        int     21h
        jc      @@error
</pre><hr><b>See Also:</b> <a href="ng13c94.php">46h</a> <a href="ng1f845.php">67h</a> <a href="ng1fcb1.php">68h</a> <a href="ng19dc7.php">59h</a> <a href="ngb40a.php">4400h</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

