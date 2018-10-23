


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4409h          is drive remote                              dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4409h          is drive remote                              dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4409h          is drive remote                              dos 3.1+</b></title>
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
<a href="ngd9e3.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="nge2c8.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4409h          Is Drive Remote                              DOS 3.1+</B>

    Determines whether the specified drive is local (attached to the
    computer running the program) or remote (on a network server).

        <B>Entry</B>   AX = 4409h
                BL = Drive number (0 = default, 1 = A, etc.)

        <B>Return</B>  DX bit 12 = 1   If drive is remote
                AX changed
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 0Fh Invalid drive

    ------------------------------------------------------------------

    If bit 12 of DX is set, the drive is remote (for example, if it
    represents a network connection) or is a non-standard file system
    (for example, CD-ROM); the other bits in DX are zero.

    If bit 12 of DX is zero, the drive is not a network drive, and the
    bits in the DX register have the following meaning:

                <B>Bit     Description</B>
                1       1 = Drive uses 32-bit sector addressing
                6       1 = Drive accepts Generic IOCTL for Block
                            Devices, Get Logical Drive Map, and Set
                            Logical Drive Map (functions 440dh, 440eh,
                            and 440fh)
                7       1 = Drive accepts Query IOCTL Device (function
                            4411h)
                9       1 = Drive is local but shared by other
                            computers in the network.
                11      1 = Drive accepts Does Device Use Removable
                            Media (function 4408h)
                13      1 = Drive requires media descriptor in FAT
                14      1 = Drive accepts Receive Control Data from
                            Block Device and Send Control Data to
                            Block Device (functions 4404h and 4405h)
                15      1 = Substitution drive (for example, set by
                            the SUBST command)
                All other bits zero
</pre><hr><b>See Also:</b> <a href="nge2c8.php">440ah</a> <a href="ngd9e3.php">4408h</a> <pre></pre><hr><center><b>
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

