


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 22h                 termination address</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 22h                 termination address</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 22h                 termination address</b></title>
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
<a href="ng2736b.php">[&lt;&lt;Previous Entry]</a> <a href="ng26e43.php">[^^Up^^]</a> <a href="ng27979.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 22h                 Termination Address</B>

    Interrupt 22h is not used as an interrupt. Instead, DOS stores the
    termination address for the current program in the corresponding
    vector-table entry. This address is also specified in offset 0Ah
    in the current program's PSP.

    <B>Programs must not issue Interrupt 22h.</B>

    ------------------------------------------------------------------
    
    The termination address is a return address back to the program
    that started the current program. DOS transfers control to the
    termination address as the last step in completing Terminate
    Program (Int 20h), Terminate Program (Int 21h, function 00h), Keep
    Program (Int 21h, function 31h), End Program (Int 21h, function
    4ch), and Terminate and Stay Resident (Int 27h). These functions
    always restore the vector-table entry from offset 0Ah in the
    current PSP before transferring control, so changes to the
    vector-table entry are ignored.
    
    Before transferring control to the termination address, DOS
    restores the parent program's stack and PSP. Furthermore, if a
    program terminates by using Int 20h, Int 21h/00h, or Int 21h/4ch,
    DOS frees all resources for the program, such as allocated memory,
    stack, files, and standard devices. This means that changes to the
    termination address in the PSP or direct calls to the termination
    address may corrupt the operation of the system.
</pre><hr><b>See Also:</b> <a href="ng16dfc.php">4ch</a> <a href="ng56df.php">31h</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

