


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 49h            free allocated memory</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 49h            free allocated memory</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 49h            free allocated memory</b></title>
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
<a href="ng14632.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng14fd0.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 49h            Free Allocated Memory</B>

    Frees a block of memory previously allocated by function 48h.

        <B>Entry</B>   AH = 49h
                ES = Segment address of memory to free

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 07h Memory control blocks destroyed
                     | 09h Invalid memory block address

    ------------------------------------------------------------------

    This function returns to DOS the memory that was allocated by
    means of Allocate Memory (function 48h). ES specifies the segment
    address of the block that is being returned; this is the same
    value that function 48h returned in AX.

    DOS returns an error value of 9 (invalid memory block address) if
    a program tries to free memory that was not allocated by function
    48h.

    ------------------------------------------------------------------

    <B>Note</B>
    DOS 2.1+ does not coalesce adjacent free blocks when a block is
    freed, only when a block is allocated or resized.
</pre><hr><b>See Also:</b> <a href="ng14632.php">48h</a> <a href="ng14fd0.php">4ah</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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
