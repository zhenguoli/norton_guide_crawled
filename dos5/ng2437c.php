


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4310h         get himem.sys entry-point address            dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4310h         get himem.sys entry-point address            dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4310h         get himem.sys entry-point address            dos 5.0+</b></title>
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
<a href="ng24080.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng24a03.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4310h         Get HIMEM.SYS Entry-Point Address            DOS 5.0+</B>

    Returns the 32-bit address (segment:offset) of the entry point for
    the extended-memory management functions for HIMEM.SYS.

        <B>Entry</B>   AX = 4310h

        <B>Return</B>  ES:BX = XMS manager entry point address


    Before retrieving and calling this entry point, programs <B>must</B> use
    Int 2Fh function 4300h to ensure that the XMS driver has been
    loaded.

    The extended-memory management functions enable programs to manage
    extended memory, the high memory area (HMA) and upper memory
    blocks (UMBs). Programs also use the functions to enable and
    disable the A20 address line. A program calls a function by
    placing the function number in the AH register, filling other
    registers as needed, and calling the entry point. Following is a
    list of some of the extended-memory management functions:

        <B>Number  Name</B>
        00h     Get XMS version
        01h     Allocate HMA
        02h     Free HMA
        03h     Global Enable A20 Line
        04h     Global Disable A20 Line
        05h     Local Enable A20 Line
        06h     Local Disable A20 Line
        07h     Query A20 Line Status
        08h     Query Free Extended Memory
        09h     Allocate EMB
        0Ah     Free EMB
        0Bh     Move EMB
        0Ch     Lock EMB
        0Dh     Unlock EMB
        0Eh     Get Handle Information
        0Fh     Resize EMB
        10h     Allocate UMB
        11h     Free UMB

    Programs must <U>not</U> use extended-memory management functions to
    manage the HMA or UMBs if DOS already manages these areas.

    This function returns the entry-point address of any extended-
    memory manager as long as the manager conforms to the Lotus/Intel/
    Microsoft/AST eXtended Memory Specification (XMS) version 2.0.
</pre><hr><b>See Also:</b> <a href="ng24080.php">4300h</a> <pre></pre><hr><center><b>
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

