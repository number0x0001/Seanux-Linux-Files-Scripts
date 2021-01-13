<?
@set_time_limit(0);
error_reporting(E_ALL & ~E_NOTICE);
?>
<title>Online md5 coder/decoder</title>
<head>
<META HTTP-EQUIV=Content-Type CONTENT=text/html; charset='windows-1251'>
<style>
input,textarea {
color: #340002;
background-color: #444458;
border: 1px;
}
UNKNOWN {
COLOR: white;
TEXT-DECORATION: none
}
A:link {
COLOR: white;
TEXT-DECORATION: none
}
A:hover {
COLOR: gray;
TEXT-DECORATION: none
}
A:active {
COLOR: white;
TEXT-DECORATION: none
}
A:visited {
TEXT-DECORATION: none
}
</style>
<script>
function ins(text){
document.nst.chars.value+=text;
document.nst.chars.focus();
}
</script>
</head>
<?
if($pass==""){$pass="900150983cd24fb0d6963f7d28e17f72";}
if($chars==""){$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";}
$php_self=$_SERVER[PHP_SELF];
?>
<font size=1 face=verdana color=white>
<body bgcolor=black vlink=white>
<a href='<?=$php_self?>?md5=c'>md5 coder</a> :: <a href='<?=$php_self?>?md5=d'>md5 decoder</a><br>
<?if($_GET[md5]=="c"){?>
<form method=post>
md5 coder:<br>
<input name=md5c size=32><br>
<input type=submit value=Code>
</form><br><br>
<?
if($_POST[md5c]){
$md5c=$_POST[md5c];
print htmlspecialchars($md5c)." coded to:<br><br>
                             <table width=100 border=1 cellpadding=0 cellspacing=0>
                             <tr><td><font face=verdana size=1 color=white>
                             <textarea cols=33>".md5($md5c)."</textarea></font></td></tr></table><br><br>
                             o... <a href=http://nst.void.ru target=_blank>Network security team</a> ...o";
                             exit;}

print "o... <a href=http://nst.void.ru target=_blank>Network security team</a> ...o";
exit;}?>
<form method=post name=nst>
md5 hash:<br>
<input name=pass size=32 value='<?=$pass?>' onclick=this.value=''><br>
Chars:<br>
<textarea name=chars rows=5 cols=27><?=$chars?></textarea><br>
<input type=submit value=Crack> <font color=gray>EN:</font>
<a href=javascript:ins('abcdefghijklmnopqrstuvwxyz')>a-z</a>
<a href=javascript:ins('ABCDEFGHIJKLMNOPQRSTUVWXYZ')>A-Z</a>
<a href=javascript:ins('0123456789')>0-9</a>
<a href=javascript:ins("~`'\!@#$%^&*()-_+=|/?&gt;<[]{}:№&nbsp;.,\&quot;")>Symbols</a>
<font color=gray>RU:</font>
<a href=javascript:ins('абвгдеёжзийклмнопрстуфхцчшщъыьэюя')>а-я</a>
<a href=javascript:ins('АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ')>А-Я</a>
</form>
<br><br>
<!-- md5 online cracker -  :: Network security team -->

<?
if($_POST[pass]){
$pass=htmlspecialchars($pass);
$pass=stripslashes($pass);
print "Cracking $pass<br><br>";
$dat=date("H:i:s");
$date=date("d:m:Y");

crack_md5();
} #end of post pass
function crack_md5() {
set_time_limit(0);
$chars=$_POST[chars];
$chars=str_replace("<",chr(60),$chars);
$chars=str_replace(">",chr(62),$chars);
$c=strlen($chars);
for ($next = 0; $next <= 31; $next++) {
for ($i1 = 0; $i1 <= $c; $i1++) {
$word[1] = $chars{$i1};
for ($i2 = 0; $i2 <= $c; $i2++) {
$word[2] = $chars{$i2};
if ($next <= 2) {
result(implode($word));
}else {
for ($i3 = 0; $i3 <= $c; $i3++) {
$word[3] = $chars{$i3};
if ($next <= 3) {
result(implode($word));
}else {
for ($i4 = 0; $i4 <= $c; $i4++) {
$word[4] = $chars{$i4};
if ($next <= 4) {
result(implode($word));
}else {
for ($i5 = 0; $i5 <= $c; $i5++) {
$word[5] = $chars{$i5};
if ($next <= 5) {
result(implode($word));
}else {
for ($i6 = 0; $i6 <= $c; $i6++) {
$word[6] = $chars{$i6};
if ($next <= 6) {
result(implode($word));
}else {
for ($i7 = 0; $i7 <= $c; $i7++) {
$word[7] = $chars{$i7};
if ($next <= 7) {
result(implode($word));
}else {
for ($i8 = 0; $i8 <= $c; $i8++) {
$word[8] = $chars{$i8};
if ($next <= 8) {
result(implode($word));
}else {
for ($i9 = 0; $i9 <= $c; $i9++) {
$word[9] = $chars{$i9};
if ($next <= 9) {
result(implode($word));
}else {
for ($i10 = 0; $i10 <= $c; $i10++) {
$word[10] = $chars{$i10};
if ($next <= 10) {
result(implode($word));
}else {
for ($i11 = 0; $i11 <= $c; $i11++) {
$word[11] = $chars{$i11};
if ($next <= 11) {
result(implode($word));
}else {
for ($i12 = 0; $i12 <= $c; $i12++) {
$word[12] = $chars{$i12};
if ($next <= 12) {
result(implode($word));
}else {
for ($i13 = 0; $i13 <= $c; $i13++) {
$word[13] = $chars{$i13};
if ($next <= 13) {
result(implode($word));
}else {
for ($i14 = 0; $i14 <= $c; $i14++) {
$word[14] = $chars{$i14};
if ($next <= 14) {
result(implode($word));
}else {
for ($i15 = 0; $i15 <= $c; $i15++) {
$word[15] = $chars{$i15};
if ($next <= 15) {
result(implode($word));
}else {
for ($i16 = 0; $i16 <= $c; $i16++) {
$word[16] = $chars{$i16};
if ($next <= 16) {
result(implode($word));
}else {
for ($i17 = 0; $i17 <= $c; $i17++) {
$word[17] = $chars{$i17};
if ($next <= 17) {
result(implode($word));
}else {
for ($i18 = 0; $i18 <= $c; $i18++) {
$word[18] = $chars{$i18};
if ($next <= 18) {
result(implode($word));
}else {
for ($i19 = 0; $i19 <= $c; $i19++) {
$word[19] = $chars{$i19};
if ($next <= 19) {
result(implode($word));
}else {
for ($i20 = 0; $i20 <= $c; $i20++) {
$word[20] = $chars{$i20};
if ($next <= 20) {
result(implode($word));
}else {
for ($i21 = 0; $i21 <= $c; $i21++) {
$word[21] = $chars{$i21};
if ($next <= 21) {
result(implode($word));
}else {
for ($i22 = 0; $i22 <= $c; $i22++) {
$word[22] = $chars{$i22};
if ($next <= 22) {
result(implode($word));
}else {
for ($i23 = 0; $i23 <= $c; $i23++) {
$word[23] = $chars{$i23};
if ($next <= 23) {
result(implode($word));
}else {
for ($i24 = 0; $i24 <= $c; $i24++) {
$word[24] = $chars{$i24};
if ($next <= 24) {
result(implode($word));
}else {
for ($i25 = 0; $i25 <= $c; $i25++) {
$word[25] = $chars{$i25};
if ($next <= 25) {
result(implode($word));
}else {
for ($i26 = 0; $i26 <= $c; $i26++) {
$word[26] = $chars{$i26};
if ($next <= 26) {
result(implode($word));
}else {
for ($i27 = 0; $i27 <= $c; $i27++) {
$word[27] = $chars{$i27};
if ($next <= 27) {
result(implode($word));
}else {
for ($i28 = 0; $i28 <= $c; $i28++) {
$word[28] = $chars{$i28};
if ($next <= 28) {
result(implode($word));
}else {
for ($i29 = 0; $i29 <= $c; $i29++) {
$word[29] = $chars{$i29};
if ($next <= 29) {
result(implode($word));
}else {
for ($i30 = 0; $i30 <= $c; $i30++) {
$word[30] = $chars{$i30};
if ($next <= 30) {
result(implode($word));
}else {
for ($i31 = 0; $i31 <= $c; $i31++) {
$word[31] = $chars{$i31};
if ($next <= 31) {
result(implode($word));

}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}

function result($word) {
global $dat, $date;
$pass=$_POST[pass];
$dat2=date("H:i:s");
$date2=date("d:m:Y");

if(md5($word)==$pass){ print "Password is:<br><br>
                             <table width=100 border=1 cellpadding=0 cellspacing=0>
                             <tr><td><font face=verdana size=1 color=white>
                             <textarea cols=27>$word</textarea><br>
                             <table width=100%><tr><td><font face=verdana size=1 color=white>
                             Start&nbsp;time:</td><td width=100%><font face=verdana size=1 color=white>$dat - $date</td>
                             </tr><tr><td><font face=verdana size=1 color=white>
                             End&nbsp;time:</td><td><font face=verdana size=1 color=white>$dat2 - $date2</td></tr></table></font></td></tr></table><br><br>
                             o... <a href=http://nst.void.ru target=_blank>Network security team</a> ...o";
                             exit;}
}

?>
o... <a href=http://nst.void.ru target=_blank>Network security team</a> ...o