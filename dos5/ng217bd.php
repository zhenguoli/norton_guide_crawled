


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh                 multiplex interrupt                          overview</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh                 multiplex interrupt                          overview</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh                 multiplex interrupt                          overview</b></title>
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
[&lt;&lt;Previous Entry] <a href="ng210fe.php">[^^Up^^]</a> <a href="ng21cde.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh                 Multiplex Interrupt                          Overview</B>

    Multiplex Interrupt (Interrupt 2Fh) is a common entry point for
    terminate-and-stay-resident programs (TSRs) that provide services
    to other programs. Programs use this interrupt to request services
    from and to check the status of such DOS commands as PRINT,
    ASSIGN, and APPEND.

    A program requests service by placing a specified function number
    in the AX register and issuing interrupt 2Fh. Some functions may
    require additional values in registers before issuing the
    interrupt.

    ------------------------------------------------------------------

    The DOS multiplex functions are available only if the corresponding
    DOS command or program has been loaded. If the command or program
    is not loaded, DOS carries out a default action, such as setting
    the carry flag and setting the AX register to 01h (Invalid
    Function).

    Programs that install their own Interrupt 2Fh handler must create
    a chain of handlers, that is, save the original address from the
    Interrupt 2Fh vector-table entry and call the address as part of
    their processing. Note that Int 2Fh function numbers 0000h through
    0BFFFh are <B>reserved</B> for system programs and commands. Other
    programs can use function numbers 0C000h through 0FFFFh.
</pre><hr><center><b>
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

