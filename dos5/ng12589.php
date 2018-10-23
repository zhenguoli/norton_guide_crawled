


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 440eh          get logical drive map                        dos 3.2+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 440eh          get logical drive map                        dos 3.2+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 440eh          get logical drive map                        dos 3.2+</b></title>
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
<a href="ng1221e.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng12c6e.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 440Eh          Get Logical Drive Map                        DOS 3.2+</B>

    Determines whether a physical drive has more than one logical
    drive number and returns the active drive number if it does.

        <B>Entry</B>   AX = 440Eh
                BL = Logical drive number (0 = default, 1 = A, etc.)

        <B>Return</B>  AL = 0   Physical drive has only one drive number
                AL &gt; 0   Active drive number for the corresponding
                         physical drive (1 = A, 2 = B, etc.)
                or
                AX = Error code, if CF is set
                     | 01h Invalid function
                     | 05h Access denied
                     | 0Fh Invalid drive

    ------------------------------------------------------------------

    If a program attempts to access the drive by using an inactive
    drive number, DOS prompts the user with the message "Insert
    diskette for drive <B>x:</B> and press any key when ready."

    Function 440Fh can be used to set the active drive number for a
    physical drive that has more than one logical drive number.


    <B>Example</B>

        ; Examine drive A
        mov     bl,1            ; Logical drive number
        mov     ax,4409h        ; Is Drive Remote
        int     21h             ; Returns dx = device attributes
        mov     cx,0000h        ; Assume invalid drive
        jc      done            ; cf = 1 if invalid drive
        mov     cl,bl           ; Assume logical = physical drive
        test    dx,1 shl 12     ; Is drive local?
        jnz     done            ; No, jump
        test    dx,1 shl 6      ; Is function 440eh supported?
        jz      done            ; No, done here
        mov     ax,440eh        ; Yes,
        int     21h             ;   Get Logical Drive Map
        jc      done            ; CF set on error
        mov     ch,al           ; Return current alias drive no. if any
     done:
        jcxz    no_drive        ; cx = 0 if invalid drive
        test    ch,ch           ; ch = 0 if logical = physical drive
        jz      no_alias
     has_alias:                 ; ch = logical drive number currently
        ;...                    ;      used to access drive A (i.e. 2
                                ;      if used as B:)
</pre><hr><b>See Also:</b> <a href="ng12c6e.php">440Fh</a> <a href="ngdcce.php">4409h</a> <a href="ng353de.php">Dev17h</a> <pre></pre><hr><center><b>
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

