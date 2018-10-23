


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - Norton Guide, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - Norton Guide">
<title>ClipX - DOS 5.0 Ref. - Norton Guide</title>
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
<a href="ng3caac.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3d274.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc LoadExec
 leEnvironment  dw ?    ; Environment-block segment
 leCommandTail  dd ?    ; Address of command tail
 leFCB_1        dd ?    ; Address of default FCB #1
 leFCB_2        dd ?    ; Address of default FCB #2
ends                    ; = 14d bytes

;       ; leEnvironment
;       if 0000h, parent's environment block is duplicated to child,
;       else segment of memory block containing child's environment.
;
;       ; leCommandTail
;       Pointer to the command tail that DOS copies to the child
;       program's PSP, offset 0080h.
;       Any redirection of standard files must be accomplished by the
;       parent program. Including redirection characters (&lt; &gt; |) does
;       not redirect files.
;       Refer to PSP for format requirements.
;
;       ; leFCB_1, leFCB_2
;       Pointer to the 2 default FCBs that DOS copies to the child
;       program's PSP, offset 5Ch and 6Ch, respectively.
</pre><hr><b>See Also:</b> <a href="ng15656.php">4B00h</a> <a href="ng3e6e1.php">PSP</a> <pre></pre><hr><center><b>
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

