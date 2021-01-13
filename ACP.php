

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SEA | ACP Finder .</title>
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
echo CSS($sh3llColor)
?>
</head>
<body>
<!-- ACP Finder -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">																			</a></p>
<form method='POST' name='nst'><table width='100%' height='107' border='0'  id='Box'><tr>
<td width='7%' height='21' style='background-color:<?php echo $sh3llColor; ?>'>&nbsp;</td>
<td width="93%" style='background-color:#666;padding-left:10px;'>ACP Finder</td></tr><tr>
  <td height='26'>Site<br></td>
  <td><input name='host' id="host" value="http://www.victim.com" size='50' /></td>
</tr>
<tr>
  <td height='24'>Extension</td>
  <td height='24'><input type='text' name="extension" value='.php' size='10' id="extension" /></td>
</tr>
<tr>
  <td height='26' colspan='2'><input type='submit' value='Scan Now' name='scanNow' id="scanNow" /></td>
</tr>
</table>
</form><br />
<!-- End Of ACP Finder -->
<?php
# --------------------------
#   ACP Finder
#---------------------------
if($_POST)
{
	$host = RemoveLastSlash(trim($_POST['host']));
	$host = str_replace(array("http://","https://","www."),"",$host);
	$host = "http://www.".$host;
	$extention = trim($_POST['extension']);
	echo "<sy>Testing ".$host." ... <br /></sy>";
	$adminlocales = array(
"admin/",
"wp-admin/",
"administration/",
"administrator/",
"moderator/",
"webadmin/",
"adminarea/",
"bb-admin/",
"adminLogin/",
"admin_area/",
"panel-administracion/",
"instadmin/",
"memberadmin/",
"administratorlogin/",
"adm/",
"siteadmin/login".$extention."",
"admin/account".$extention."",
"admin/index".$extention."",
"admin/login".$extention."",
"admin/admin".$extention."",
"admin_area/login".$extention."",
"admin_area/index".$extention."",
"admincp/index".$extention."",
"adminpanel".$extention."",
"webadmin".$extention."",
"webadmin/index".$extention."",
"webadmin/login".$extention."",
"admin/admin_login".$extention."",
"admin_login".$extention."",
"panel-administracion/login".$extention."",
"admin_area/admin".$extention."",
"bb-admin/index".$extention."",
"bb-admin/login".$extention."",
"bb-admin/admin".$extention."",
"admin/home".$extention."",
"pages/admin/admin-login".$extention."",
"admin/admin-login".$extention."",
"admin-login".$extention."",
"admin/adminLogin".$extention."",
"home".$extention."",
"adminarea/index".$extention."",
"admin/controlpanel".$extention."",
"admin".$extention."",
"admin/cp".$extention."",
"cp".$extention."",
"adminpanel.php",
"moderator".$extention."",
"administrator/index".$extention."",
"administrator/login".$extention."",
"user".$extention."",
"administrator/account".$extention."",
"administrator".$extention."",
"login".$extention."",
"modelsearch/login".$extention."",
"moderator/login".$extention."",
"panel-administracion/admin".$extention."",
"admincontrol/login".$extention."",
"adm/index".$extention."",
"moderator/admin".$extention."",
"account".$extention."",
"controlpanel".$extention."",
"admincontrol".$extention."",
"webadmin/admin".$extention."",
"adminLogin".$extention."",
"panel-administracion/login".$extention."",
"wp-login".$extention."",
"adminLogin".$extention."",
"admin/adminLogin".$extention."",
"adminarea/index".$extention."",
"adminarea/admin".$extention."",
"adminarea/login".$extention."",
"panel-administracion/index".$extention."",
"modelsearch/index".$extention."",
"modelsearch/admin".$extention."",
"adm/admloginuser".$extention."",
"admloginuser".$extention."",
"admin2".$extention."",
"admin2/login".$extention."",
"admin2/index".$extention."",
"adm/index".$extention."",
"adm".$extention."",
"affiliate".$extention."",
"adm_auth".$extention."",
"memberadmin".$extention."",
"administratorlogin".$extention."");
foreach ($adminlocales as $admin)
{
	$headers = get_headers("$host/$admin");
	if (eregi('200', $headers[0])) {echo "<sy>[+] <a href=\"$host/$admin\" target=\"_blank\">$host/$admin</a><font color=\"Green\">  ~ Found!<br /> </font></sy>";}
	flush();
}
echo "<br />";	
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
function RemoveLastSlash($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{return substr($host,0,strrpos($host, '/', -1));}
	else{return $host;}
}
footer();
?>
