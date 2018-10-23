


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
<a href="ng3af21.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3b848.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc FileCharTable
 fctLength      dw ?    ; Byte size of structure, excl. this field,
                        ;   and array of characters
                db ?    ; ?
 fctFirst       db ?    ; Lowest permissible character value
 fctLast        db ?    ; Highest permissible character value
                db ?    ; ?
 fctExcludeFirst db ?   ; First in range of excluded characters
 fctExcludeLast db ?    ; Last in range of excluded characters
                db ?    ; ?
 fctIllegals    db ?    ; No. of characters in array
                        ; Start of array of illegal characters (terminators)
ends

label FileNameTerminators byte
; Invalid in filename or file extension (defaults)
  db 00h,01h,02h,03h,04h,05h,06h,07h    ; ASCII 0..31
  db 08h,09h,0Ah,0Bh,0Ch,0Dh,0Eh,0Fh    ; incl. tab, LF, CR
  db 11h,11h,12h,13h,14h,15h,16h,17h
  db 18h,19h,1Ah,1Bh,1Ch,1Dh,1Eh,1Fh
  db 7Ch,3Ch,3Eh                        ; '|&lt;&gt;'
  db 3Ah,5Ch,2Eh                        ; ':\.'
  db 22h,2Fh,5Bh,5Dh                    ; '"/[]'
  db 2Bh,3Dh,3Bh,2Ch                    ; '+=;,'
     NUM_FILE_NAME_TERMINATORS = ($ - FileNameTerminators)
</pre><hr><b>See Also:</b> <a href="ng1e275.php">6505h</a> <pre></pre><hr><center><b>
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

