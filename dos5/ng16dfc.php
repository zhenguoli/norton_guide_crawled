


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4ch            end program (exit)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4ch            end program (exit)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4ch            end program (exit)</b></title>
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
<a href="ng16969.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng171ed.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4Ch            End Program (EXIT)</B>

    Terminates the current program and returns control to its parent
    program.

        <B>Entry</B>   AH = 4Ch
                AL = Return value

        <B>Return</B>  This function does not return

    -----------------------------------------------------------------

    This function performs the following actions:

    - Flushes the file buffers and closes files, unlocking any regions
      locked by the program.
    - Restores interrupt 22h, 23h, and 24h vectors from the addresses
      saved in the PSP.
    - Frees any memory owned by the terminating program.
    - Transfers control to the address specified by offset 0Ah
      (termination address) in the PSP (usually COMMAND.COM).


    The return value may be retrieved (using function 4dh) by a parent
    process that was started by function 4b00h, or tested by means of
    the errorlevel feature of DOS batch processing. If the program
    terminates normally, the return value should be 00h.
</pre><hr><b>See Also:</b> <a href="ng56df.php">31h</a> <a href="ng171ed.php">4dh</a> <a href="ng1b1df.php">5ch</a> <a href="ng15656.php">4b00h</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

