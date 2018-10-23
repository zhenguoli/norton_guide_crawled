


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
<a href="ng3ba2e.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3c366.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc FontFileHeader
 ffhFileTag     db 8 dup (?)    ; Font-file identifier (0ffh,"FONT   ")
 ffhReserved    db 8 dup (?)    ; Reserved (must be 0)
 ffhPointers    dw ?            ; No. of information pointers (= 1)
 ffhPointerType db ?            ; Type of pointer (= 1)
 ffhOffset      dd ?            ; File offset of FontInfoHeader
ends                            ; = 23d bytes


struc FontInfoHeader
 fihCodePages   dw ?            ; No. of code-page entries
ends                            ; = 2 bytes


struc CPEntryHeader
 cpeLength      dw 28d          ; Size of this structure, in bytes (28)
 cpeNext        dd ?            ; Offset to next CPEntryHeader (last=0)
 cpeDevType     dw ?            ; Device type (1=screen, 2=printer)
 cpeDevSubType  db 8 dup (?)    ; Name of device &amp; file (e.g. "EGA     ")
 cpeCodePageID  dw ?            ; Code-page identifier
 cpeReserved    db 6 dup (?)    ; Reserved (must be 0)
 cpeOffset      dd ?            ; Offset to font data for this code-page
ends                            ; = 28d bytes


struc FontDataHeader
 fdhReserved    dw 1            ; Reserved (must be 1)
 fdhFonts       dw ?            ; Number of fonts (max. 1 if printer)
 fdhLength      dw ?            ; Byte size of font data
ends                            ; = 6 bytes


struc ScreenFontHeader
 sfhHeight      db ?            ; Character height
 sfhWidth       db ?            ; Character width
 sfhRelHeight   db ?            ; Currently unused; must be 0
 sfhRelWidth    db ?            ; Currently unused; must be 0
 sfhCharacters  dw ?            ; No. of characters defined in bitmap
ends                            ; = 6 bytes
        ; ScreenFontHeader followed immediately by character bitmaps.
        ; Byte size of bitmaps = sfhCharacters * 8


struc PrintFontHeader
 pfhSelType     dw ?            ; Selection type for printer font
 pfhSeqLength   dw ?            ; Byte size of control-sequence data
ends                            ; = 4 bytes
        ; PrinterFontHeader followed immediately by control sequence
        ; data (&lt; 31 bytes) and possibly downloadable font data.


; Structure of EGA.CPI  ; Code-Page Information file
;       FontFileHeader
;       FontInfoHeader
;       NUM_CODEPAGES * CPEntryHeader
;       NUM_CODEPAGES * (FontDataHeader
;                       (ScreenFontHeader + bitmaps  ; VGA 8*16
;                       (ScreenFontHeader + bitmaps  ; EGA 8*14
;                       (ScreenFontHeader + bitmaps  ; CGA 8*8
;       Copyright notice (1-150 bytes)
</pre><hr><b>See Also:</b> <a href="ng372f5.php">CodePageIDs</a> <pre></pre><hr><center><b>
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

