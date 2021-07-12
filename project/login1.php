<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dance")or die(mysql_error());
$user=$_POST['t1'];
$pwd=$_POST['t6'];
$r=mysql_query("select * from registrations where e_mail='$user' and user_password='$pwd'");
if(mysql_fetch_array($r))
{
	
	header("location:index.html");
}

$res=mysql_query("select * from admin where user_name='$user' and password='$pwd'");
if(mysql_fetch_array($res))
{
	
	header("location:admin.php");
}

else
{

	header("location:login.php");
}
?>
