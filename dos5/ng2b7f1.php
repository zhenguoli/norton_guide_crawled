


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 27h                 terminate and stay resident                <u>superseded</b></u>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 27h                 terminate and stay resident                <u>superseded</b></u>">
<title>ClipX - DOS 5.0 Ref. - <b>int 27h                 terminate and stay resident                <u>superseded</b></u></title>
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
<a href="ng2aeda.php">[&lt;&lt;Previous Entry]</a> <a href="ng26e43.php">[^^Up^^]</a> <a href="ng2bd7e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 27h                 Terminate and Stay Resident                <U>Superseded</B></U>

    Ends the current program by returning control to its parent
    program, but it leaves the program in memory and preserves such
    program resources as open files and allocated memory.

        <U>Note</U>    Int 27h has been superseded. Programs should use
                Keep Program (Int 21h, function 31h).

        <B>Entry</B>   CS = Segment of PSP
                DX = Size of resident portion, in bytes

        <B>Return</B>  This interrupt does not return

    ------------------------------------------------------------------

    This interrupt is intended to be used by .COM programs. When a
    program issues Int 27h, the CS register must contain the segment
    address of the program segment prefix (PSP).

    Int 27h carries out the following actions:

    - Sets the new size of the program by converting the value passed
      in the DX register to a corresponding number of paragraphs and
      reallocating the program memory. Program memory includes only
      the PSP and program data and code. The reallocation does not
      affect the program's environment block, nor does it affect the
      memory allocated by the program after it was loaded.
    - Flushes the file buffers but leaves files open.
    - Restores interrupt 22h, 23h, and 24h vectors from the addresses
      saved in the PSP.
    - Transfers control to the address specified by offset 0Ah
      (termination address) in the PSP.
</pre><hr><b>See Also:</b> <a href="ng56df.php">31h</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

