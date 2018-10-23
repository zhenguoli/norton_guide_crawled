# DOS 5.0 Ref -- Norton Guide
# Retrieved from http://www.ousob.com/ng/dos5/index.php
# Transform web pages to remove useless content.

rename 's/.php/.html/' *

# There is only one table in "index.html"
sed -i 's/<title>ClipX - DOS 5.0 Ref. - \(.*\)<\/title>/<title>\1<\/title>/g;
        s/<title>.*<b>\(.*\)<\/b>.*<\/title>/<title>\1<\/title>/g;
        s/<title>Norton Guide<\/title>//g;
        s/\(href="[^"]*\).php"/\1.html"/g;
        /cxrefine.gif/d;
        /<table/,/<\/table>/d;
        :x /\(<br>\)*<hr><center><b>/,/<hr>/{N; s/\(<br>\)*<hr><center><b>.*<font.*<\/center>.*<hr>//g; bx};
        /<script/,/<\/script>/d' *.html
