


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4b05h          set execution state                          dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4b05h          set execution state                          dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4b05h          set execution state                          dos 5.0+</b></title>
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
<a href="ng165f8.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng16dfc.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4B05h          Set Execution State                          DOS 5.0+</B>

    Prepares a new program for execution. This preparation includes
    setting the version number for the program as specified by the
    SETVER command.

        <B>Entry</B>   AX    = 4B05h
                DS:DX = Pointer to an ExecState structure

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | ??

    ------------------------------------------------------------------

    This function is required for programs that intercept function
    4B00h (EXEC).

    After the function returns, the calling program must transfer
    execution control to the new program as soon as possible. In
    particular, before starting the new program, the calling program
    must not call DOS system functions, ROM BIOS functions, or system
    interrupts.

    When DOS is installed in the high-memory area (HMA), this function
    turns off the A20 line, making the HMA inaccessible. If the new
    program must have access to the HMA, the program must turn on the
    A20 line. Note that MS-DOS automatically turns on the A20 line
    (and usually leaves it on) when carrying out other system
    functions.
</pre><hr><b>See Also:</b> <a href="ng15656.php">4b00h</a> <a href="ng1618b.php">4b01h</a> <a href="ng3a146.php">ExecState</a> <pre></pre><hr><center><b>
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

