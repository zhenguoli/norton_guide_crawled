


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5f02h          get assign-list entry                        dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5f02h          get assign-list entry                        dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5f02h          get assign-list entry                        dos 3.1+</b></title>
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
<a href="ng1c18e.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1c990.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5F02h          Get Assign-List Entry                        DOS 3.1+</B>

    Returns the local and network names of a device, such as a network
    printer. DOS uses the assign-list index (set by function 5F03h) to
    search a list of network connections.

        <B>Entry</B>   AX = 5F02h
                BX    = Assign-list index
                DS:SI = Pointer to a 16-byte buffer for local device name
                ES:DI = Pointer to a 128-byte buffer for network name

        <B>Return</B>  Buffers filled with ASCIIZ names
                BH = 0 | 1   Device valid | invalid
                BL = Device type
                     | 3 = printer
                     | 4 = drive
                CX = Value stored by function 5F03h
                DX,BP <B>changed</B>
                or
                AX = Error code, if CF is set
                     | 01h Invalid function (Network not running)
                     | 12h No more files

    ------------------------------------------------------------------

    DOS maintains one assign-list entry for each of the currently
    connected network devices. As a program connects and disconnects
    network devices, DOS adds and deletes entries from the list. Each
    entry receives an assign-list index. The assign-list indexes are
    zero-based and consecutive--the first network device to be
    connected receives index 0, the second receives index 1, and so
    on.
    When a program disconnects a network device, DOS reindexes the
    entries so that the indexes remain consecutive. To determine the
    current index for a device, a program typically retrieves
    assign-list entries for each index, starting with 0, until it
    matches either the user value returned in the CX register or the
    network name pointed to by the ES:DI registers.
</pre><hr><b>See Also:</b> <a href="ng1c990.php">5f03h</a> <a href="ng1d084.php">5f04h</a> <pre></pre><hr><center><b>
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

