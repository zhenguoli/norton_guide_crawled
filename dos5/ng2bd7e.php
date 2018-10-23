


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 28h                 dos idle handler</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 28h                 dos idle handler</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 28h                 dos idle handler</b></title>
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
<a href="ng2b7f1.php">[&lt;&lt;Previous Entry]</a> <a href="ng26e43.php">[^^Up^^]</a> [Next Entry&gt;&gt;]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 28h                 DOS Idle Handler</B>

    The DOS Idle Handler carries out background operations, such as
    printing from a queue, while the system waits for user input. DOS
    issues this interrupt while waiting for completion of character
    I/O functions (Int 21 functions 01h through 0Ch).

    Programs that are idle (for example, programs that are polling for
    user input) can issue Int 28h. Programs should also issue DOS Idle
    Call (Int 2Fh, multiplex function 1680h).

    ------------------------------------------------------------------

    DOS provides a minimal Int 28h handler that returns immediately.
    System commands, such as PRINT, install their own handlers to
    carry out background processing. Although other programs can
    install Int 28h handlers, these programs must take great care to
    prevent corrupting internal stacks and registers.

    DOS issues Int 28h only if a character I/O function has not yet
    completed, but does not issue the interrupt if a critical-error
    handler is currently running (that is, the ErrorMode internal
    variable is not zero). DOS issues the interrupt each time it loops
    through a low-level read or write operation, and continues to
    issue the interrupt until a character is read or written.

    Programs that install an idle handler should create a chain of
    handlers - that is, save the original address from the Int 28h
    vector-table entry and call the address as part of processing.

    ------------------------------------------------------------------

    DOS makes a few preparations before issuing Int 28h. When control
    transfers to the Int 28h handler, segment registers point to
    internal DOS data segments. The SS:SP registers point to the top
    of the DOS internal I/O stack. To prevent corrupting the system
    data and stack, the Int 28h handler must switch to its own stack,
    preserve all registers, and set segment registers to point to its
    own data segments.

    Although the Int 28h handler can call system functions, it must
    not call character I/O functions (Int 21h functions 01h through
    0Ch) without first setting the ErrorMode variable to 1. If the
    handler calls these functions without setting ErrorMode, the call
    will corrupt the internal I/O stack and DOS operation.

    Before returning to the system, the Int 28h handler must restore
    the SS:SP registers to point to the I/O stack, restore all
    registers, and set the ErrorMode variable to zero.
</pre><hr><b>See Also:</b> <a href="ng22d52.php">1680h</a> <a href="ng689f.php">34h</a> <pre></pre><hr><center><b>
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

