


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>function 4eh            find first file (find first)</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>function 4eh            find first file (find first)</b>">
<title>ClipX - DOS 5.0 Ref. - <b>function 4eh            find first file (find first)</b></title>
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
<a href="ng171ed.php">[&lt;&lt;Previous Entry]</a> <a href="ng254.php">[^^Up^^]</a> <a href="ng17fb7.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Function 4Eh            Find First File (FIND FIRST)</B>

    Searches a directory for the first file or directory whose name
    and attributes match the specified name and attributes.

        <B>Entry</B>   AH    = 4Eh
                CX    = File attributes
                DS:DX = Pointer to ASCIIZ filespec (* ? allowed)

        <B>Return</B>  FileInfo structure at current DTA
                or
                AX = Error code, if CF is set
                     | 02h File not found
                     | 03h Path not found
                     | 12h No more files to be found

    ------------------------------------------------------------------

    This function searches for the first filename matching the filespec
    (ASCIIZ string pointed to by DS:DX). The filespec may include a drive
    letter and path, and the filename can include wildcard characters.

    The CX register controls the scope of the search by specifying a
    file attribute mask. Note that bits 0 and 5 of the mask are
    <B>ignored</B>, hence a search for files with attr_readonly or
    attr_archive must be performed by testing these bits for all files.
    If a program specifies any combination of attr_system,
    attr_hidden, and attr_directory, this function returns normal
    files in addition to the specified files. The program must examine
    the attributes contained in the returned FileInfo structure to
    determine the type of file found.


    If the DTA has not been explicitly set by function 1ah, DOS uses
    the default DTA at offset 80h in the program segment prefix (PSP).

    ------------------------------------------------------------------

    <B>Example</B>

        DATASEG
        fname   db "\abc\*.*",0 ; Search all files/directories in \abc
        UDATASEG
        fi      FileInfo ?      ; Uninitialized structure
        CODESEG
        assume  ds:dgroup
        mov     dx,offset fi            ; ds:dx -&gt; new DTA
        mov     ah,1ah                  ; Set disk transfer address
        int     21h
        mov     dx,offset fname         ; ds:dx -&gt; ASCIIZ filespec.
        mov     cx,ATTR_ANY - ATTR_VOLUME   ; Exclude volume label
                                            ; from the search
        mov     ah,4eh                  ; Invoke Find First File
        int     21h
        jc      @@cf_set                ; Carry flag set if error
    @@got_name:
        mov     bx,offset fi            ; ds:bx -&gt; FileInfo
        test    [byte bx + 15h],ATTR_DIRECTORY
        jnz     @@findnxt               ; Skip if subdirectory
        cmp     [byte bx + 1eh],"."     ;   or parent's or own dir.
        jz      @@findnxt
        lea     dx,[bx + 1eh]           ; ds:dx -&gt; filename
        call    process_file            ; Do something useful
    @@findnxt:
        mov     ah,4fh                  ; Invoke Find Next File
        int     21h
        jnc     @@got_name              ; Back for more
    @@cf_set:
        cmp     ax,12h                  ; No more files?
        jz      @@end                   ; Then return
        call    error_proc              ;   else trap error
        stc
    @@end:
        ret
</pre><hr><b>See Also:</b> <a href="ng17fb7.php">4fh</a> <a href="ng330c.php">1ah</a> <a href="ng19dc7.php">59h</a> <a href="ng3b848.php">FileInfo</a> <a href="ng3af21.php">File attributes</a> <pre></pre><hr><center><b>
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

