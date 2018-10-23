


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 31h            keep program</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 31h            keep program</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 31h            keep program</b></title>
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
<a href="ng5299.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng5dd2.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 31h            Keep Program</B>

    Ends the current program by returning control to its parent
    program but leaves (keeps) the program in memory and preserves the
    program's resources, such as open files and allocated memory.

        <B>Entry</B>   AH = 31h
                AL = Return value
                DX = Size of resident portion, in paragraphs

        <B>Return</B>  This function does not return

    ------------------------------------------------------------------

    The return value may be retrieved by a parent process via function
    4Dh, or tested by means of the errorlevel feature of DOS batch
    processing. If the program terminates normally, the return value
    should be 00h.


    Function 31h carries out the following actions:

    - Reallocates program memory to the amount specified by DX (min.
      6 paragraphs). Program memory includes only the program segment
      prefix (PSP) and program data and code. The reallocation does
      not affect the program's environment block, nor does it affect
      the memory allocated by the program after it was loaded.
    - Flushes the file buffers but leaves files open. Any locked
      regions in the open files remain locked.
    - Restores interrupt 22h, 23h, and 24h vectors from the addresses
      saved in the PSP.
    - Transfers control to the address specified by offset 0Ah
      (termination address) in the PSP.

    ------------------------------------------------------------------

    Before calling Keep Program, the initialization routine of a
    terminate-but-stay-resident (TSR) program should do the following:

        - Close all unneeded files, including standard devices
        - Free the environment block if it is not needed
        - Free all memory not needed to support interrupt handlers
</pre><hr><b>See Also:</b> <a href="ng171ed.php">4dh</a> <a href="ng16dfc.php">4ch</a> <a href="ng15656.php">4b00h</a> <a href="ng217bd.php">Int 2Fh</a> <a href="ng3f36d.php">StdDevices</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

