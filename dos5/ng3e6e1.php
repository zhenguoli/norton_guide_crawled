


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
<a href="ng3e20f.php">[&lt;&lt;Previous Entry]</a> <a href="ng361d7.php">[^^Up^^]</a> <a href="ng3ebcd.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>

struc PSP                               ; Program Segment Prefix
 pspInt20               dw ?            ; Int 20h instruction
 pspNextParagraph       dw ?            ; Segment addr of next paragraph
                        db ?            ; Reserved
 pspDispatcher          db 5 dup (?)    ; Far call to DOS
 pspTerminateVector     dd ?            ; Int 22h addr
 pspControlCVector      dd ?            ; Int 23h addr
 pspCritErrorVector     dd ?            ; Int 24h addr
                        dw 11 dup (?)   ; Reserved
 pspEnvironment         dw ?            ; Segment addr of environment
                        dw 23 dup (?)   ; Reserved
 pspFCB_1               db 16 dup (?)   ; Default FCB #1
 pspFCB_2               db 16 dup (?)   ; Default FCB #2
                        dd ?            ; Reserved
 pspCommandTail         db 128 dup (?)  ; Command tail (also default DTA)
ends                                    ; = 256d = 100h bytes

        ; The Program Segment Prefix is a control structure that
        ; DOS builds for each program. PSP occupies the first 256
        ; (100h) bytes of the memory allocated to the program.


        ; pspNextParagraph (offset 0002h in PSP)
        ; Segment address of 1st paragraph after
        ; program's memory allocation block.

        ; pspEnvironment   (offset 002Ch in PSP)
        ; Segment address of program's environment block

        ; pspCommandTail   (offset 0080h in PSP)
        ; Program's command-line arguments
        ; Format: byte length of arguments, arguments, CR character
        ;         (db 9," /s a.fil",0dh)
</pre><hr><b>See Also:</b> <a href="ng1838c.php">51h</a> <a href="ng175a5.php">4Eh</a> <a href="ng273cf.php">Int 22h</a> <pre></pre><hr><center><b>
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

