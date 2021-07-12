<?php
  $name=$_POST['t1'];
$address=$_POST['t2'];
$email=$_POST['t3'];
$state=$_POST['state'];
$phone=$_POST['t5'];
$pwd=$_POST['t6'];
$cpwd=$_POST['t7'];


mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dance")or die(mysql_error());
mysql_query("insert into registrations value('','$name','$address','$email','$state','$phone','$pwd')") or die(mysql_error());
header("location:login.php?msgsd=0");
?>
