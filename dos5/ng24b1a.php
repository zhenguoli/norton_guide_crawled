


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4810h         read command line                            dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4810h         read command line                            dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4810h         read command line                            dos 5.0+</b></title>
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
<a href="ng24a03.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng251aa.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4810h         Read Command Line                            DOS 5.0+</B>

    Reads a line of up to 126 characters from the console and copies
    it to the specified buffer. While the line is being read, all
    DOSKEY function keys and macros are enabled. This means, for
    example, that the user can select a line from the DOSKEY history,
    edit a line, or enter macros that are automatically expanded.

        <B>Entry</B>   AX    = 4810h
                DS:DX = Pointer to 128-byte line buffer
                        (1st byte initialized to 128)

        <B>Return</B>  AX = 00h   Line buffer filled
                or
                AX &gt; 00h   Function failed

    ------------------------------------------------------------------

    The line buffer that receives the command line must have the
    following format:

        <B>Offset  Contents</B>
        00h     The maximum size of the buffer (must be 128 (80h))
        01h     A number that is one less than the number of
                characters read. The function copies a carriage-
                return (ASCII 0Dh) to the buffer but does not include
                the byte in its total.
        02h     The first byte of the input line.


    If the user types a macro name, AX contains zero but no text is
    copied to the buffer. Instead, the program must immediately call
    the function a <B>second time</B> to expand the macro and copy the macro
    text to the buffer.

    This function adds the command line to the DOSKEY history. If the
    user types a macro name or a special parameter (such as $*), the
    program must call the function a second time to expand the macro
    or parameter. On the second call, the function automatically
    writes the expanded macro to the screen, overwriting the macro
    name. It also copies the expanded macro text to the line buffer.
</pre><hr><b>See Also:</b> <a href="ng24a03.php">4800h</a> <pre></pre><hr><center><b>
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

