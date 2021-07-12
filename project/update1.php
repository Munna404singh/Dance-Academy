<?php
include("connect.php");
session_start();
$city=$_POST['city'];
$location=$_POST['location'];
$venue=$_POST['venue'];
$event=$_POST['event'];
$contact=$_POST['contact'];
$opening=$_POST['opening'];
$closing=$_POST['closing'];

mysql_query("update events set city='".$city."',location='$location',venue='$venue',event_manager='$event',contact_no='$contact',openinig_date='$opening',closing_date='$closing' where id=".$_SESSION['id']."");

header("location:admin.php");

?>