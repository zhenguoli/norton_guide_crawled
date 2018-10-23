


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 5ch            lock/unlock file                             dos 3.1+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 5ch            lock/unlock file                             dos 3.1+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 5ch            lock/unlock file                             dos 3.1+</b></title>
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
<a href="ng1ad95.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1ba85.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 5Ch            Lock/Unlock File                             DOS 3.1+</B>

    Denies or allows access to the specified region in a file.

        <B>Entry</B>   AH = 5Ch
                AL    = 0 | 1   Lock | unlock a file
                BX    = File handle
                CX:DX = File offset of region
                SI:DI = Length of region

        <B>Return</B>  Nothing
                or
                AX = Error code, if CF is set
                     | 01h Invalid function code
                     | 06h Invalid handle
                     | 21h Lock violation
                     | 24h Sharing buffer overflow

    ------------------------------------------------------------------

    This function is used to lock or unlock a selected portion of a
    file, preventing or allowing access to that region by other
    processes in a multitasking or networking environment.


    File sharing must be loaded (by running the SHARE program) before
    this function can be used on a local computer.

    This function returns an error value of 21h (lock violation) if
    all or part of the specified region is already locked or if the
    specified region is not identical to a region previously locked by
    the same procedure.

    If another program attempts to write to or read from a locked
    region, DOS retries the operation one or more times; if all
    retries fail, DOS issues an interrupt 24h for the requesting
    program. A program can set the number of retries by using function
    440bh.

    The locked region can be anywhere in a file. For example, locking
    beyond the end of the file is not an error. Functions 45h (DUP)
    and 46h (FORCEDUP) duplicate access to any locked regions. Passing
    an open file to a child program by using function 4b00h (EXEC)
    does <B>not</B> duplicate access to locked regions.

    Programs should not depend on being denied access to a locked
    region. To determine the status of a region (locked or unlocked),
    a program can attempt to lock the region and then examine the
    error value.


    <B>Note</B>
    File locks should be released before terminating a program.

    Use this function in the following file modes:
                Deny read sharing mode
                Deny none sharing mode
                Deny write sharing mode, and file opened for read/write
                Deny write sharing mode, and file opened for write only
</pre><hr><b>See Also:</b> <a href="nge810.php">440bh</a> <a href="ng136fa.php">45h</a> <a href="ng13c94.php">46h</a> <a href="ng15656.php">4b00h</a> <a href="ng28dea.php">Int 24h</a> <a href="ng8416.php">3dh</a> <a href="ng901e.php">3eh</a> <a href="ng19dc7.php">59h</a> <a href="ng228c2.php">1000h</a> <pre></pre><hr><center><b>
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

