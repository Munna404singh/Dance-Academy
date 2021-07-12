<?php

$Stu_name=$_POST['stu_name'];
$age=$_POST['age'];
$intrest=$_POST['intrest'];
$From=$_POST['from'];
$p_no=$_POST['pno'];
$timings=$_POST['timing'];
include("connect.php");
mysql_connect("localhost","root","");
mysql_select_db("dance");
$sql=mysql_query("insert into dance_classes values('','$Stu_name','$age','$intrest','$From','$p_no','$timings')");
header("location:dance_classes.php?msg=0");

?>