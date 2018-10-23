


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 42h            move file pointer (lseek)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 42h            move file pointer (lseek)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 42h            move file pointer (lseek)</b></title>
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
<a href="ng9f2e.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ngaba9.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 42h            Move File Pointer (LSEEK)</B>

    Moves the file pointer forward or backward in an open file.

        <B>Entry</B>   AH    = 42h
                BX    = File handle
                CX:DX = Offset, in bytes (32-bit integer)
                AL    = Mode code:
                         0   Move file pointer CX:DX bytes from
                             beginning of file (offset = un-signed value)
                         1   Move file pointer CX:DX bytes from
                             current location (offset = signed value)
                         2   Move file pointer CX:DX bytes from
                             end of file (offset = signed value)

        <B>Return</B>  DX:AX = New file position (unsigned 32-bit), from
                        start of file
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (bad mode code)
                     | 06h Invalid handle

    ------------------------------------------------------------------

    This function changes the logical read/write position in the
    specified file, by incrementing or decrementing the value assigned
    to the file pointer. The file pointer is maintained by the system
    and is shared by all file handles that identify a given file.

    With method 00h, the 32-bit value in CX:DX is always interpreted
    as a positive value. With methods 01h and 02h, however, the 32-bit
    offset is interpreted as a signed value; it is possible to move
    the file pointer either forward or backward.


    A program should never attempt to move the file pointer to a
    position before the start of the file. Although this action does
    not generate an error during the move, it does generate an error
    on a subsequent read or write operation.

    A program can move the file pointer beyond the end of the file. On
    a subsequent write operation, DOS writes data to the given
    position in the file, filling the gap between the previous end of
    the file and the given position with undefined data. This is a
    common way to reserve file space without writing to the file, but
    using this method to grow a file from zero bytes to a very large
    size can corrupt the FAT in some versions of DOS; the file should
    first be grown from zero to one byte and then to the desired large
    size.


    Use AL = 2 and CX:DX = 0 to move the file pointer to the end of
    the file, or to find the <B>length</B> of the file.

    A file can be <B>truncated</B> my moving the file pointer to the new end
    of file and writing zero bytes using function 40h.
</pre><hr><b>See Also:</b> <a href="ng9a20.php">40h</a> <a href="ng9336.php">3fh</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

