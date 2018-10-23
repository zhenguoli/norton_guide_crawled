


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5801h          set allocation strategy                      dos 3.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5801h          set allocation strategy                      dos 3.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5801h          set allocation strategy                      dos 3.0+</b></title>
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
<a href="ng18fe9.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng199a5.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5801h          Set Allocation Strategy                      DOS 3.0+</B>

    Sets the method DOS uses to allocate memory.

        <B>Entry</B>   AX = 5801h
                BX = allocation-strategy value

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (bad strategy value)

    ------------------------------------------------------------------

    If a program changes the allocation strategy to permit allocations
    from the upper-memory area, it <B>must</B> save the original allocation
    strategy and restore it before terminating.

    ------------------------------------------------------------------

    If the current allocation strategy specifies the upper-memory area
    but the upper-memory area is not linked, DOS searches conventional
    memory instead.

    The <B>allocation-strategy value</B> can be one of the following:

    first_fit_low      = 0000h   Search conventional memory for the
                                 available block having the lowest
                                 address.
                                 This is the <U>default</U> strategey.

    best_fit_low       = 0001h   Search conventional memory for the
                                 available block that most closely
                                 matches the requested size.

    last_fit_low       = 0002h   Search conventional memory for the
                                 available block at the highest address.

    first_fit_high     = 0080h   Search the upper-memory area for the
                                 available block having the lowest
                                 address.
                                 If no block is found, the search
                                 continues in conventional memory.

    best_fit_high      = 0081h   Search the upper-memory area for the
                                 available block that most closely
                                 matches the requested size.
                                 If no block is found, the search
                                 continues in conventional memory.

    last_fit_high      = 0082h   Search the upper-memory area for the
                                 available block at the highest address.
                                 If no block is found, the search
                                 continues in conventional memory.

    first_fit_highonly = 0040h   Search the upper-memory area for the
                                 available block at the lowest address.

    best_fit_highonly  = 0041h   Search the upper-memory area for the
                                 available block that most closely
                                 matches the requested size.

    last_fit_highonly  = 0042h   Search the upper-memory area for the
                                 available block at the highest address.
</pre><hr><b>See Also:</b> <a href="ng14632.php">48h</a> <a href="ng18fe9.php">5800h</a> <a href="ng199a5.php">5802h</a> <a href="ng19ae2.php">5803h</a> <pre></pre><hr><center><b>
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

