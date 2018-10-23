


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>extended key codes</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>extended key codes</b>">
<title>ClipX - DOS 5.0 Ref. - <b>extended key codes</b></title>
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
[&lt;&lt;Previous Entry] [^^Up^^] [Next Entry&gt;&gt;]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Extended key codes</B>

        Extended key codes are 2-byte character values generated
        whenever the user presses certain keys and key combinations.
        DOS system functions, such as Read File or Device (Int 21h,
        function 3Fh), retrieve these extended key codes when reading
        from the keyboard. The following table lists keys and key
        combinations that generate extended key codes (US keyboard):

        <B>Note</B>    Codes listed in parentheses are available
                on enhanced keyboards only.


        <B>Key         Alone   Shift+  Ctrl+   Alt+</B>
        F1          0;3Bh   0;54h   0;5Eh   0;68h
        F2          0;3Ch   0;55h   0;5Fh   0;69h
        F3          0;3Dh   0;56h   0;60h   0;6Ah
        F4          0;3Eh   0;57h   0;61h   0;6Bh
        F5          0;3Fh   0;58h   0;62h   0;6Ch
        F6          0;40h   0;59h   0;63h   0;6Dh
        F7          0;41h   0;5Ah   0;64h   0;6Eh
        F8          0;42h   0;5Bh   0;65h   0;6Fh
        F9          0;43h   0;5Ch   0;66h   0;70h
        F10         0;44h   0;5Dh   0;67h   0;71h
        F11        (0;85h) (0;87h) (0;89h) (0;8Bh)
        F12        (0;86h) (0;88h) (0;8Ah) (0;8Ch)
                                                   Alt-GreyArrows
        Home        0;47h   0;37h   0;77h   --        (0;97h)
        Up Arrow    0;48h   0;38h  (0;8Dh)  --        (0;98h)
        PgUp        0;49h   0;39h   0;84h   --        (0;99h)
        Left Arrow  0;4Bh   0;34h   0;73h   --        (0;9Bh)
        Right Arrow 0;4Dh   0;36h   0;74h   --        (0;9Dh)
        End         0;4Fh   0;31h   0;75h   --        (0;9Fh)
        Down Arrow  0;50h   0;32h  (0;9Dh)  --        (0;A0h)
        PgDn        0;51h   0;33h   0;76h   --        (0;A1h)
        Ins         0;52h   0;30h  (0;92h)  --        (0;A2h)
        Del         0;53h   0;2Eh  (0;93h)  --        (0;A3h)

        1           31h     21h     --      0;78h
        2           32h     40h     --      0;79h
        3           33h     23h     --      0;7Ah
        4           34h     24h     --      0;7Bh
        5           35h     25h     --      0;7Ch
        6           36h     5Eh     --      0;7Dh
        7           37h     26h     --      0;7Eh
        8           38h     2Ah     --      0;7Fh
        9           39h     28h     --      0;80h
        0           30h     29h     --      0;81h
        -           2Dh     5Fh     --      0;82h
        =           3Dh     2Bh     --      0;83h
        BackSpace   08h     08h     7Fh     0;0Eh
        Tab         09h     0;0Fh  (0;94h) (0;A5h)

        <B>Key         Alone   Shift+  Ctrl+   Alt+</B>
        A           61h     41h     01h     0;1Eh
        B           62h     42h     02h     0;30h
        C           63h     43h     03h     0;2Eh
        D           64h     44h     04h     0;20h
        E           65h     45h     05h     0;12h
        F           66h     46h     06h     0;21h
        G           67h     47h     07h     0;22h
        H           68h     48h     08h     0;23h
        I           69h     49h     09h     0;17h
        J           6Ah     4Ah     0Ah     0;24h
        K           6Bh     4Bh     0Bh     0;25h
        L           6Ch     4Ch     0Ch     0;26h
        M           6Dh     4Dh     0Dh     0;32h
        N           6Eh     4Eh     0Eh     0;31h
        O           6Fh     4Fh     0Fh     0;18h
        P           70h     50h     10h     0;19h
        Q           71h     51h     11h     0;10h
        R           72h     52h     12h     0;13h
        S           73h     53h     13h     0;1Fh
        T           74h     54h     14h     0;14h
        U           75h     55h     15h     0;16h
        V           76h     56h     16h     0;2Fh
        W           77h     57h     17h     0;11h
        X           78h     58h     18h     0;2Dh
        Y           79h     59h     19h     0;15h
        Z           7Ah     5Ah     1Ah     0;2Ch
</pre><hr><b>See Also:</b> <a href="ng9336.php">3Fh</a> <a href="ng1ce0.php">07h</a> <pre></pre><hr><center><b>
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

