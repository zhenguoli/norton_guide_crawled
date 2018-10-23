


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 59h            get extended error                           dos 3.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 59h            get extended error                           dos 3.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 59h            get extended error                           dos 3.0+</b></title>
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
<a href="ng19ae2.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng1a846.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 59h            Get Extended Error                           DOS 3.0+</B>

    Returns extended-error information, including the location where
    an error occurred and a suggested action, for the most recent DOS
    interrupt 21h function call.

        <B>Entry</B>   AH = 59h
                BX = 0000h

        <B>Return</B>  Expect all registers except CS:IP and SS:SP
                to be changed
                AX = Extended error code
                BH = Error class
                BL = Suggested action
                CH = Error locus (source of error)

    ------------------------------------------------------------------

    This function returns detailed diagnostic information about an
    error condition. It can be used from inside a critical-error
    (interrupt 24h) handler; after a DOS function call that reports an
    error by setting the carry flag; and after an FCB file operation
    that reports a return code of FFh.

    Most functions supported by DOS 2.0+ report an error by setting
    the carry flag and placing an error code in the AX register.


    <B>Note</B>
    Functions available under DOS 2.x map the true DOS 3.0+ error code
    into one supported under DOS 2.x (00-12h). A program should call
    this function to retrieve the true error code when a DOS 2.x (or
    FCB) function returns an error.


    <B>Extended-error code (AX)</B>
    See list of "Error codes"


    <B>Error class (BH)</B>
    ERRCLASS_OUTRES  = 01h  ; Out of resource (such as storage)
    ERRCLASS_TEMPSIT = 02h  ; Temporary situation (file or record lock)
    ERRCLASS_AUTH    = 03h  ; Authorization problem (denied access)
    ERRCLASS_INTRN   = 04h  ; Internal (system software bug)
    ERRCLASS_HRDFAIL = 05h  ; Hardware failure
    ERRCLASS_SYSFAIL = 06h  ; System failure (bad/no configuration file)
    ERRCLASS_APPERR  = 07h  ; Application program error
    ERRCLASS_NOTFND  = 08h  ; File or item not found
    ERRCLASS_BADFMT  = 09h  ; File or item has invalid format or type
    ERRCLASS_LOCKED  = 0Ah  ; Interlocked file or item
    ERRCLASS_MEDIA   = 0Bh  ; Storage-medium error
    ERRCLASS_ALREADY = 0Ch  ; File or item exists already
    ERRCLASS_UNK     = 0Dh  ; Unknown (unclassified)


    <B>Suggested action (BL)</B>
    ERRACT_RETRY     = 01h  ; Retry immediately
    ERRACT_DLYRET    = 02h  ; Delay and retry
    ERRACT_USER      = 03h  ; Prompt user to reenter input
    ERRACT_ABORT     = 04h  ; Terminate in an orderly manner
    ERRACT_PANIC     = 05h  ; Terminate immediately
    ERRACT_IGNORE    = 06h  ; Ignore the error
    ERRACT_INTRET    = 07h  ; Retry after user intervention


    <B>Error locus (CH)</B>
    ERRLOC_UNK       = 01h  ; Unknown (or not appropriate)
    ERRLOC_DISK      = 02h  ; Block device (disk)
    ERRLOC_NET       = 03h  ; Network
    ERRLOC_SERDEV    = 04h  ; Serial device (timeout)
    ERRLOC_MEM       = 05h  ; Memory
</pre><hr><b>See Also:</b> <a href="ng1ba85.php">5d0ah</a> <a href="ng28dea.php">Int 24h</a> <a href="ng395ba.php">Error codes</a> <pre></pre><hr><center><b>
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

