


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 48h            allocate memory</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 48h            allocate memory</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 48h            allocate memory</b></title>
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
<a href="ng142a8.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng14bdc.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 48h            Allocate Memory</B>

    Allocates the requested amount of memory and returns the segment
    address of the allocated memory block.

        <B>Entry</B>   AH = 48h
                BX = Number of memory paragraphs to be allocated

        <B>Return</B>  AX = Segment address of allocated memory block
                or
                AX = Error code, if CF is set
                     | 07h Memory control blocks destroyed
                     | 08h Insufficient memory (BX = largest block)

    ------------------------------------------------------------------

    Function 48h dynamically allocates memory, in multiples of 16
    bytes (one paragraph). The amount of memory to be allocated, in
    paragraphs, is specified in BX. If the function is successful,
    AX:0000 points to the allocated memory block. (AX holds the
    segment address; the offset is always 0000.)

    The contents of the allocated memory are not defined.

    DOS allocates all available memory to a .COM program; most .EXE
    programs request all available memory when they load. If a program
    is to subsequently use the Allocate Memory function to dynamically
    allocate memory, it should use Set Memory Block Size (function
    4ah) to free as much memory as possible.

    The default memory-management strategy is to allocate the first
    available block that contains the requested number of bytes. A
    program can use function 5801h to change the way DOS chooses
    memory blocks for allocation.
</pre><hr><b>See Also:</b> <a href="ng14bdc.php">49h</a> <a href="ng14fd0.php">4ah</a> <a href="ng18fe9.php">5800h</a> <a href="ng19128.php">5801h</a> <a href="ng19dc7.php">59h</a> <pre></pre><hr><center><b>
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

