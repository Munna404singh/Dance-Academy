<?php

$uname=$_POST['uname'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$intrest=$_POST['intrest'];
include("connect.php");
mysql_connect("localhost","root","");
mysql_select_db("dance");
$sql=mysql_query("insert into apply values('','$uname','$age','$mob','$intrest')");
header("location:compitition.php?msg=0");

?>