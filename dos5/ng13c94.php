


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 46h            force duplicate file handle</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 46h            force duplicate file handle</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 46h            force duplicate file handle</b></title>
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
<a href="ng136fa.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng142a8.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 46h            Force Duplicate File Handle</B>

    Forces one handle to refer to the same file or device as another
    handle.

        <B>Entry</B>   AH = 46h
                BX = Handle of file or device
                CX = New handle for same file or device

        <B>Return</B>  Nothing (CF clear)
                or
                AX = Error code, if CF is set
                     | 04h No handles available
                     | 06h Invalid handle

    ------------------------------------------------------------------

    After a program uses this function, both handles can be used to
    read from or write to the file or device specified by CX. Moving
    the file pointer with either handle moves the file pointer for the
    other handle.

    If the second handle refers to an open file, that file is closed
    before the handle is set equal to the first handle.

    ------------------------------------------------------------------

    <B>Example</B>

        ; Redirect output to StdOut to a file,
        ; e.g. for a child program
        mov     bx,STDOUT
        mov     ah,45h                  ; Duplicate Handle
        int     21h
        jc      @@error
        mov     [stdout_dup],ax         ; Store dup. handle
        mov     bx,[file_handle]        ; Handle of an open file
        mov     cx,STDOUT               ; Handle to be redirected
        mov     ah,46h                  ; Force Duplicate Handle
        int     21h
        jc      @@error
        ; Output to standard output now redirected
        ; ...
        ; Cancel the redirection
        mov     bx,[stdout_dup]         ; Previous STDOUT dup.
        mov     cx,STDOUT               ; Handle to be redirected
        mov     ah,46h                  ; Force Duplicate Handle
        int     21h
        jc      @@error
        mov     ah,3eh                  ; Close stdout_dup
        int     21h
        ;...
</pre><hr><b>See Also:</b> <a href="ng136fa.php">45h</a> <a href="ng1f845.php">67h</a> <a href="ng19dc7.php">59h</a> <a href="ngb40a.php">4400h</a> <a href="ng3f36d.php">StdDevices</a> <pre></pre><hr><center><b>
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

