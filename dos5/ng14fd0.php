


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4ah            set memory block size</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4ah            set memory block size</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4ah            set memory block size</b></title>
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
<a href="ng14bdc.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng15656.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4Ah            Set Memory Block Size</B>

    Changes the size of a memory block previously allocated by function
    48h, or changes the amount of memory originally allocated to a
    program by DOS.

        <B>Entry</B>   AH = 4Ah
                BX = New block size, in paragraphs
                ES = Segment address of the memory block to resize

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 07h Memory control blocks destroyed
                     | 08h Insufficient memory (BX = largest block)
                     | 09h Invalid memory block address

    ------------------------------------------------------------------

    To resize a memory block allocated by Allocate Memory, ES must
    specify the segment address returned in AX by function 48h.

    To resize the amount of memory originally allocated to a program
    (when loaded by DOS), ES must specify the segment address of the
    program segment prefix (PSP).

    If this function is used to decrease the size of a memory block,
    the memory above the new limit is no longer owned by the program
    and should not be used. If this function is used to increase the
    size of a memory block, the contents of the new memory are not
    defined.


    If this function returns an error value of 8 (insufficient memory)
    the BX register contains the number of paragraphs in the largest
    available memory block.

    ------------------------------------------------------------------

    <B>Note</B>
    Under DOS 2.1+, if there is insufficient memory to expand the
    block as much as requested, the block will be made as large as
    possible. DOS 2.1+ coalesces any free blocks immediately following
    the block to be resized.
</pre><hr><b>See Also:</b> <a href="ng14632.php">48h</a> <a href="ng14bdc.php">49h</a> <a href="ng19dc7.php">59h</a> <a href="ng15656.php">4b00h</a> <pre></pre><hr><center><b>
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

