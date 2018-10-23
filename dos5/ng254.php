


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
</pre>[^^Up^^]  <a href="index.php">[Menu]</a> <a href="credits.php">[About The Guide]</a>
<hr><pre><a href="ng1757.php"> 00h - 05h               Superseded</a>
<a href="ng1878.php"> 06h                     Direct Console I/O</a>
<a href="ng1ce0.php"> 07h                     Direct Console Input</a>
<a href="ng1f82.php"> 08h                     Read Keyboard without Echo</a>
<a href="ng2224.php"> 09h - 0Ah               Superseded</a>
<a href="ng22b8.php"> 0Bh                     Check Keyboard Status</a>
<a href="ng256f.php"> 0Ch                     Flush Buffer, Read Keyboard</a>
<a href="ng2896.php"> 0Dh                     Reset Drive</a>
<a href="ng2aef.php"> 0Eh                     Set Default Drive</a>
<a href="ng2fa2.php"> 0Fh - 17h               Superseded</a>
<a href="ng3165.php"> 19h                     Get Default Drive</a>
<a href="ng330c.php"> 1Ah                     Set Disk Transfer Address (DTA)</a>
<a href="ng3546.php"> 1Bh - 1Ch               Superseded</a>
<a href="ng35d1.php"> 1Fh                     Get Default DPB                             DOS 5.0+</a>
<a href="ng36e3.php"> 21h - 24h               Superseded</a>
<a href="ng37dc.php"> 25h                     Set Interrupt Vector</a>
<a href="ng3a69.php"> 26h - 28h               Superseded</a>
<a href="ng3b46.php"> 29h                     Parse Filename</a>
<a href="ng47b7.php"> 2Ah                     Get Date</a>
<a href="ng48fa.php"> 2Bh                     Set Date</a>
<a href="ng4a57.php"> 2Ch                     Get Time</a>
<a href="ng4cd7.php"> 2Dh                     Set Time</a>
<a href="ng4eed.php"> 2Eh                     Set/Reset Verify Flag</a>
<a href="ng513b.php"> 2Fh                     Get Disk Transfer Address (DTA)</a>
<a href="ng5299.php"> 30h                     Get Version Number</a>
<a href="ng56df.php"> 31h                     Keep Program</a>
<a href="ng5dd2.php"> 32h                     Get DPB                                     DOS 5.0+</a>
<a href="ng5f0a.php"> 3300h                   Get Ctrl-C Check Flag</a>
<a href="ng60f3.php"> 3301h                   Set Ctrl-C Check Flag</a>
<a href="ng6398.php"> 3305h                   Get Startup Drive</a>
<a href="ng65ad.php"> 3306h                   Get MS-DOS Version                          DOS 5.0+</a>
<a href="ng689f.php"> 34h                     Get InDOS Flag Address</a>
<a href="ng6afc.php"> 35h                     Get Interrupt Vector</a>
<a href="ng6c02.php"> 36h                     Get Disk Free Space</a>
<a href="ng6f6e.php"> 38h                     Get/Set Country Information</a>
<a href="ng74cb.php"> 39h                     Create Directory (MKDIR)</a>
<a href="ng77c3.php"> 3Ah                     Remove Directory (RMDIR)</a>
<a href="ng7a79.php"> 3Bh                     Change Current Directory (CHDIR)</a>
<a href="ng7d90.php"> 3Ch                     Create File with Handle</a>
<a href="ng8416.php"> 3Dh                     Open File with Handle</a>
<a href="ng901e.php"> 3Eh                     Close File with Handle</a>
<a href="ng9336.php"> 3Fh                     Read File or Device</a>
<a href="ng9a20.php"> 40h                     Write File or Device</a>
<a href="ng9f2e.php"> 41h                     Delete File</a>
<a href="nga2a0.php"> 42h                     Move File Pointer (LSEEK)</a>
<a href="ngaba9.php"> 4300h                   Get File Attributes</a>
<a href="ngb028.php"> 4301h                   Set File Attributes</a>
<a href="ngb40a.php"> 4400h                   Get Device Data</a>
<a href="ngc714.php"> 4401h                   Set Device Data</a>
<a href="ngca5c.php"> 4402h                   Receive Control Data from Character Device</a>
<a href="ngcdd9.php"> 4403h                   Send Control Data to Character Device</a>
<a href="ngd13b.php"> 4404h                   Receive Control Data from Block Device</a>
<a href="ngd38e.php"> 4405h                   Send Control Data to Block Device</a>
<a href="ngd5c6.php"> 4406h                   Check Device Input Status</a>
<a href="ngd752.php"> 4407h                   Check Device Output Status</a>
<a href="ngd9e3.php"> 4408h                   Does Device Use Removable Media             DOS 3.0+</a>
<a href="ngdcce.php"> 4409h                   Is Drive Remote                             DOS 3.1+</a>
<a href="nge2c8.php"> 440Ah                   Is File or Device Remote                    DOS 3.1+</a>
<a href="nge810.php"> 440Bh                   Set Sharing Retry Count                     DOS 3.1+</a>
<a href="ngec05.php"> 440Ch                   . Generic IOCTL for Character Devices</a>
<a href="ngeda7.php"> 440Ch /45h              Set Iteration Count                         DOS 3.2+</a>
<a href="ngefd3.php"> 440Ch /4ah              Select Code Page                            DOS 3.3+</a>
<a href="ngf1eb.php"> 440Ch /4ch              Start Code-Page Prepare                     DOS 3.3+</a>
<a href="ngf67f.php"> 440Ch /4dh              End Code-Page Prepare                       DOS 3.3+</a>
<a href="ngf8db.php"> 440Ch /5fh              Set Display Mode                            DOS 4.0+</a>
<a href="ngfb2a.php"> 440Ch /65h              Get Iteration Count                         DOS 3.2+</a>
<a href="ngfd74.php"> 440Ch /6ah              Query Selected Code Page                    DOS 3.3+</a>
<a href="ngff76.php"> 440Ch /6bh              Query Code-Page Prepare List                DOS 3.3+</a>
<a href="ng10233.php"> 440Ch /7fh              Get Display Mode                            DOS 4.0+</a>
<a href="ng104a1.php"> 440Dh                   . Generic IOCTL for Block Devices</a>
<a href="ng10650.php"> 440Dh /40h              Set Device Parameters                       DOS 3.2+</a>
<a href="ng10bb2.php"> 440Dh /41h              Write Track on Logical Drive                DOS 3.2+</a>
<a href="ng10f45.php"> 440Dh /42h              Format Track on Logical Drive               DOS 3.2+</a>
<a href="ng11209.php"> 440Dh /46h              Set Media ID                                DOS 4.0+</a>
<a href="ng114ef.php"> 440Dh /60h              Get Device Parameters                       DOS 3.2+</a>
<a href="ng118f0.php"> 440Dh /61h              Read Track on Logical Drive                 DOS 3.2+</a>
<a href="ng11c6b.php"> 440Dh /62h              Verify Track on Logical Drive               DOS 3.2+</a>
<a href="ng11f23.php"> 440Dh /66h              Get Media ID                                DOS 4.0+</a>
<a href="ng1221e.php"> 440Dh /68h              Sense Media Type                            DOS 5.0+</a>
<a href="ng12589.php"> 440Eh                   Get Logical Drive Map                       DOS 3.2+</a>
<a href="ng12c6e.php"> 440Fh                   Set Logical Drive Map                       DOS 3.2+</a>
<a href="ng12f6a.php"> 4410h                   Query IOCTL Handle                          DOS 5.0+</a>
<a href="ng132d3.php"> 4411h                   Query IOCTL Device                          DOS 5.0+</a>
<a href="ng136fa.php"> 45h                     Duplicate File Handle</a>
<a href="ng13c94.php"> 46h                     Force Duplicate File Handle</a>
<a href="ng142a8.php"> 47h                     Get Current Directory (GETDIR)</a>
<a href="ng14632.php"> 48h                     Allocate Memory</a>
<a href="ng14bdc.php"> 49h                     Free Allocated Memory</a>
<a href="ng14fd0.php"> 4Ah                     Set Memory Block Size</a>
<a href="ng15656.php"> 4B00h                   Load and Execute Program (EXEC)</a>
<a href="ng1618b.php"> 4B01h                   Load Program</a>
<a href="ng165f8.php"> 4B03h                   Load Overlay</a>
<a href="ng16969.php"> 4B05h                   Set Execution State                         DOS 5.0+</a>
<a href="ng16dfc.php"> 4Ch                     End Program (EXIT)</a>
<a href="ng171ed.php"> 4Dh                     Get Child-Program Return Value</a>
<a href="ng175a5.php"> 4Eh                     Find First File (FIND FIRST)</a>
<a href="ng17fb7.php"> 4Fh                     Find Next File (FIND NEXT)</a>
<a href="ng18258.php"> 50h                     Set PSP Address</a>
<a href="ng1838c.php"> 51h                     Get PSP Address</a>
<a href="ng18570.php"> 54h                     Get Verify State</a>
<a href="ng1862a.php"> 56h                     Rename File (RENAME)</a>
<a href="ng18a4a.php"> 5700h                   Get File Date and Time</a>
<a href="ng18d11.php"> 5701h                   Set File Date and Time</a>
<a href="ng18fe9.php"> 5800h                   Get Allocation Strategy                     DOS 3.0+</a>
<a href="ng19128.php"> 5801h                   Set Allocation Strategy                     DOS 3.0+</a>
<a href="ng199a5.php"> 5802h                   Get Upper-Memory Link                       DOS 5.0+</a>
<a href="ng19ae2.php"> 5803h                   Set Upper-Memory Link                       DOS 5.0+</a>
<a href="ng19dc7.php"> 59h                     Get Extended Error                          DOS 3.0+</a>
<a href="ng1a846.php"> 5Ah                     Create Temporary File                       DOS 3.0+</a>
<a href="ng1ad95.php"> 5Bh                     Create New File                             DOS 3.0+</a>
<a href="ng1b1df.php"> 5Ch                     Lock/Unlock File                            DOS 3.1+</a>
<a href="ng1ba85.php"> 5D0Ah                   Set Extended Error                          DOS 3.1+</a>
<a href="ng1bd1c.php"> 5E00h                   Get Machine Name                            DOS 3.1+</a>
<a href="ng1bfbf.php"> 5E02h                   Set Printer Setup                           DOS 3.1+</a>
<a href="ng1c18e.php"> 5E03h                   Get Printer Setup                           DOS 3.1+</a>
<a href="ng1c35c.php"> 5F02h                   Get Assign-List Entry                       DOS 3.1+</a>
<a href="ng1c990.php"> 5F03h                   Make Network Connection                     DOS 3.1+</a>
<a href="ng1d084.php"> 5F04h                   Delete Network Connection                   DOS 3.1+</a>
<a href="ng1d43c.php"> 62h                     Get PSP Address                             DOS 3.0+</a>
<a href="ng1d62a.php"> 6501h                   Get Extended Country Information            DOS 3.3+</a>
<a href="ng1da06.php"> 6502h                   Get Uppercase Table                         DOS 3.3+</a>
<a href="ng1de23.php"> 6504h                   Get Filename Uppercase Table                DOS 3.3+</a>
<a href="ng1e275.php"> 6505h                   Get Filename-Character Table                DOS 3.3+</a>
<a href="ng1e6c4.php"> 6506h                   Get Collate-Sequence Table                  DOS 3.3+</a>
<a href="ng1ec68.php"> 6507h                   Get Double-Byte Character Set               DOS 4.0+</a>
<a href="ng1f08f.php"> 6520h                   Convert Character                           DOS 4.0+</a>
<a href="ng1f1b2.php"> 6521h                   Convert String                              DOS 4.0+</a>
<a href="ng1f2fb.php"> 6522h                   Convert ASCIIZ String                       DOS 4.0+</a>
<a href="ng1f445.php"> 6601h                   Get Global Code Page                        DOS 3.3+</a>
<a href="ng1f59a.php"> 6602h                   Set Global Code Page                        DOS 3.3+</a>
<a href="ng1f845.php"> 67h                     Set Maximum Handle Count                    DOS 3.3+</a>
<a href="ng1fcb1.php"> 68h                     Commit File                                 DOS 3.3+</a>
<a href="ng1ff99.php"> 6Ch                     Extended Open/Create                        DOS 4.0+</a>
<a href="ng20cd5.php"> Version notes</a>
</PRE>
<hr><center><b>
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

