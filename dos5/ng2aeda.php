


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 26h                 absolute disk write                        <u>superseded</b></u>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 26h                 absolute disk write                        <u>superseded</b></u>">
<title>ClipX - DOS 5.0 Ref. - <b>int 26h                 absolute disk write                        <u>superseded</b></u></title>
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
<a href="ng2a5e8.php">[&lt;&lt;Previous Entry]</a> <a href="ng26e43.php">[^^Up^^]</a> <a href="ng2b7f1.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 26h                 Absolute Disk Write                        <U>Superseded</B></U>

    Writes data from the specified buffer to one or more logical
    sectors on the specified drive.

        <U>Note</U>    Int 26h has been superseded. Programs should use
                Write Track on Logical Device (Int 21h, function
                440Dh, minor code 41h).

                        <B>Drive &lt; 32 MB            Drive &gt;= 32 MB (DOS 3.31+)</B>
        <B>Entry</B>   AL    = Drive number             Drive number
                DS:BX = Addr of data buffer      Addr of DiskIO structure
                CX    = No. of sectors to write  0FFFFh
                DX    = First sector to write    Ignored if CX = 0FFFFh

        <B>Return</B>  <U>Note</U>   The flags register is left on the stack
                       Expect BP to be changed
                If CF is clear, disk sectors written
                or
                If CF is set, AL and AH contain error values

    ------------------------------------------------------------------

    The drive number in AL must be set to 0 for drive A:, 1 for drive
    B:, 2 for drive C:, etc. If the size of the specified drive is
    greater than or equal to 32 MB (CX = 0FFFFh), the DiskIO structure
    is required (DOS 3.31+).

    On return, Int 26h leaves the CPU flags on the stack. Programs
    should check the carry flag for an error before popping the flags
    from the stack.

    Int 26h does not process critical errors. If one occurs, the
    interrupt routine returns an error value to the program but does
    not issue Int 24h.

    Int 26h writes logical sectors only. This means, for example, that
    the interrupt cannot write to hidden sectors.

    ------------------------------------------------------------------

    If Int 26h returns the carry flag set, AL and AH contain error
    values. The AL register specifies device-driver errors and
    contains one of the following values:

                <B>Value   Meaning</B>
                00h     Write-protection violation
                01h     Unknown unit
                02h     Drive not ready
                04h     Data error (CRC error)
                06h     Seek error
                07h     Unknown media type
                08h     Sector not found
                0Ah     Write fault
                0Ch     General failure
                0Fh     Invalid media change

    For most computers, the AH register specifies ROM BIOS errors and
    may contain one of the following values:

                <B>Value   Meaning</B>
                01h     Bad command
                02h     Address mark not found
                04h     Sector not found
                10h     Data error (CRC error)
                20h     Controller failure
                40h     Seek failure
                80h     No response from drive
</pre><hr><b>See Also:</b> <a href="ng10bb2.php">440Dh /41h</a> <a href="ng28dea.php">Int 24h</a> <a href="ng2a5e8.php">Int 25h</a> <a href="ng38c9d.php">DiskIO</a> <pre></pre><hr><center><b>
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

