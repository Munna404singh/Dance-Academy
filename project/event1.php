<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
$city=$_POST['city'];
$location=$_POST['location'];
$venue=$_POST['venue'];
$event=$_POST['event'];
$contact=$_POST['contact'];
$opening=$_POST['opening'];
$closing=$_POST['closing'];
$con=mysqli_connect("localhost","root","","dance");
$query="insert into events values('','$city','$location','$venue','$event','$contact','$opening','$closing')";
mysqli_query($con,$query);
header("location:admin.php");


?>