<html>
<head>
<title>SEA | Joomla & Wordpress Scanner .</title>
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
<!--Joomla & Wordpress Scanner-->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='576' height='82' border='0' id='Box'><tr>
<td width='5%' height='21' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td width="95%" style='padding-left:10px;' >Joomla & Wordpress Scanner </td></tr><tr><td height='27'>&nbsp;</td>
  <td height='27'><input type="text" name="site" size="50" value="http://www.site.com/">
    <select size="1" name="what">
      <option>WordPreSs</option>
      <option>JooMla</option>
    </select></td>
</tr>
<tr>
  <td height='26'>&nbsp;</td>
  <td height='26'><input type="submit" value="Scan Now"></td>
</tr>
  </table>
</form>
<!-- End Of Joomla & Wordpress Scanner -->
</center>
<?php


# --------------------------
#  Joomla & Wordpress Scanner
#---------------------------

if($_POST)
{
	$site=strip_tags(trim($_POST['site']));
	t_header($site);
	echo $x01 = ($_POST['what']=="WordPreSs") ? get_plugins($site):"";
	echo $x02 = ($_POST['what']=="JooMla") ? get_components($site):"";
}

echo "</table>";

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

function ask_exploit_db($component)
{
	$ExPloiTdb ="http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
	$result = @file_get_contents($ExPloiTdb);
	if (eregi("No results",$result))  
	{echo"<td>Not Found</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";}
	else
	{echo"<td><a href='$ExPloiTdb'>Found ..!</a></td><td><--</td></tr>";}
}
function get_components($site)
{
	$source = @file_get_contents($site);
	preg_match_all('{option,(.*?)/}i',$source,$f);
	preg_match_all('{option=(.*?)(&amp;|&|")}i',$source,$f2);
	preg_match_all('{/components/(.*?)/}i',$source,$f3);
	$arz=array_merge($f2[1],$f[1],$f3[1]);
	$coms=array();
	if(count($arz)==0){ echo "<tr><td colspan=3>[~] Nothing Found ..! , Maybe there is some error site or option ... check it .</td></tr>";}
	foreach(array_unique($arz) as $x){$coms[]=$x;}
	foreach($coms as $comm)
	{
		echo "<tr><td>$comm</td>";
		ask_exploit_db($comm);
	}
}
function get_plugins($site)
{ 
	$source = @file_get_contents($site);
	preg_match_all("#/plugins/(.*?)/#i", $source, $f);
	$plugins=array_unique($f[1]);
	if(count($plugins)==0){ echo "<tr><td colspan=3>[~] Nothing Found ..! , Maybe there is some error site or option ... check it .</td></tr>";}
	foreach($plugins as $plugin)
	{
		echo "<tr><td>$plugin</td>";
		ask_exploit_db($plugin);
	}
}
function t_header($site)
{ 
	echo'<table align="center" border="1" width="50%" cellspacing="1" cellpadding="5">';
	echo'
	<tr id="oo">
	<td>Site : <a href="'.$site.'">'.$site.'</a></td>
	<td>Exploit-db</b></td>
	<td>Exploit it !</td>
	</tr>
	';
}

?>
