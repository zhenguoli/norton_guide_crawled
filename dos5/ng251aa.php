


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b01h         build notification chain                     dos 5.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 4b01h         build notification chain                     dos 5.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 4b01h         build notification chain                     dos 5.0+</b></title>
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
<a href="ng24b1a.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng254b1.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 4B01h         Build Notification Chain                     DOS 5.0+</B>

    Creates a linked list of notification-function handlers for global
    client programs and for client programs running in the current
    session. The task switcher calls this function to determine which
    client programs are to be notified about changes to the session.
    To receive notification, client programs must intercept Interrupt
    2Fh and process Build Notification Chain when they receive the
    function call.

        <U>Note    Use the task switcher API patch</U>

        <B>Entry</B>   AX    = 4B01h
                ES:BX = 0000:0000h
                CX:DX = Address of service-function handler

        <B>Return</B>  ES:BX = Pointer to a SwCallBackInfo structure
                or
                ES:BX = 0000:0000h   No notification

    [...]
</pre><hr><b>See Also:</b> <a href="ng3f799.php">SwCallBackInfo</a> <pre></pre><hr><center><b>
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

