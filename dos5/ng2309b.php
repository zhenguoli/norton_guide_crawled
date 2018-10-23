


<html>
<head>
<meta name=keywords content="ClipX - DOS 5.0 Ref. - <b>int 2fh / 1a00h         get ansi.sys installed state                 dos 4.0+</b>, intraSYS international, Clipper CGI, ClipX.Lib, eMailX, MsgX, Norton Guides, Apache, xBase++, IS2WCGI.DLL, dBase, FoxPro, Norton Guides, vDbase, C/C++, ng2Html By Dave Pearson">
<meta name=description content="On-line Norton Guide for DOS 5.0 Ref. - <b>int 2fh / 1a00h         get ansi.sys installed state                 dos 4.0+</b>">
<title>ClipX - DOS 5.0 Ref. - <b>int 2fh / 1a00h         get ansi.sys installed state                 dos 4.0+</b></title>
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
<a href="ng22d52.php">[&lt;&lt;Previous Entry]</a> <a href="ng210fe.php">[^^Up^^]</a> <a href="ng24080.php">[Next Entry&gt;&gt;]</a> <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre>
<B>Int 2Fh / 1A00h         Get ANSI.SYS Installed State                 DOS 4.0+</B>

    Determines whether the ANSI.SYS device driver has been loaded.

        <B>Entry</B>   AX = 1A00h

        <B>Return</B>  AL = 0FFh | 00h   ANSI.SYS loaded | not loaded

    ------------------------------------------------------------------

    <B>ANSI Escape Sequences</B>

    ANSI escape sequences affect output to the screen device, giving
    programs control of the screen's cursor, colors, and display
    modes. (An escape sequence is one or more characters preceded by
    the escape character ASCII 1Bh.) When a program writes an escape
    sequence to the screen, the screen device translates the sequence
    into its corresponding action, such as positioning the cursor or
    changing colors.

    The following list summarizes the ANSI escape sequences supported
    by the ANSI.SYS driver. ANSI escape sequences are available only
    if this driver has been installed. Parameters shown in <U>underline<B></B></U>
    are ASCII strings representing integers.

    <B>Escape sequence     Action</B>
        ESC[2J          Clears the entire screen and moves the cursor
                        to upper-left corner (home).
        ESC[K           Clears the screen from cursor to end of line.
        ESC[<U>rows</U>A       Moves the cursor up the specified number of
                        rows without changing the column (one row if
                        <U>rows</U> omitted). Ignored if cursor already
                        at top row.
        ESC[<U>rows</U>B       Moves the cursor down the specified number of
                        rows without changing the column (one row if
                        <U>rows</U> omitted). Ignored if cursor already
                        at bottom row.
        ESC[<U>cols</U>C       Moves the cursor to the right the specified
                        number of columns without changing the row
                        (one column if <U>cols</U> omitted). Ignored if
                        cursor already at rightmost column.
        ESC[<U>cols</U>D       Moves the cursor to the left the specified
                        number of columns without changing the row
                        (one column if <U>cols</U> omitted). Ignored if
                        cursor already at leftmost column.
        ESC[<U>row</U>;<U>col</U>H    Moves the cursor to an absolute position, e.g.
                        ESC[25;80H moves the cursor to the lower-right
                        corner on an 80x25 screen. Either <U>row</U> or <U>col</U>
                        can be omitted.
        ESC[s           Saves the current cursor position.
        ESC[u           Moves the cursor to the position most recently
                        saved by ESC[s.
        ESC[6n          Returns the current cursor position in the
                        format ESC[row;colR. A program should read the
                        cursor position from standard input immediately
                        after writing the escape sequence.
        ESC[<U>attr</U>m       Selects from the character attributes and
                        colors in Table 1. If more than one attribute
                        or color is specified, values are separated by
                        semicolons. The ability to display certain
                        attributes and colors depends on the screen
                        device.
        ESC[=<U>mode</U>h      Selects on of the display modes in Table 2.
        ESC[=7l         Disables line wrap.


        <B>Table 1 - Character attributes and colors</B>
          <B>Value   Attribute</B>
            0     No special attributes
            1     High intensity
            2     Low intensity
            3     Italic
            4     Underline (on monochrome display adapter only)
            5     Blinking
            6     Rapid blinking
            7     Reverse video
            8     Invisible (doesn't display)
        <B>Foreground    Background</B>
        <B>  value         value         Color</B>
           30            40           Black
           31            41           Red
           32            42           Green
           33            43           Yellow
           34            44           Blue
           35            45           Magenta
           36            46           Cyan
           37            47           White

        
        <B>Table 2 - Display modes</B>
        <B>Value   Mode</B>
          0     40 columns by 25 rows, 16-color text (color burst off)
          1     40 columns by 25 rows, 16-color text
          2     80 columns by 25 rows, 16-color text (color burst off)
          3     80 columns by 25 rows, 16-color text
          4     320 pixels by 200 pixels, 4-color graphics
          5     320 pixels by 200 pixels, 4-color graphics (color burst off)
          6     640 pixels by 200 pixels, 2-color graphics
          7     Enables line wrapping
          14    640 pixels by 200 pixels, 16-color graphics (EGA/VGA)
          15    640 pixels by 350 pixels, 2-color graphics (EGA/VGA)
          16    640 pixels by 350 pixels, 16-color graphics (EGA/VGA)
          17    640 pixels by 480 pixels, 2-color graphics (MCGA/VGA)
          18    640 pixels by 480 pixels, 16-color graphics (VGA)
          19    320 pixels by 200 pixels, 256-color graphics (MCGA/VGA)
        Note: Modes 14-19 supported by DOS 4.0+
</pre><hr><center><b>
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

