<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?PHP
include ("connect.php");
$name=$_POST['q'];
$res=mysql_query("select * from events where city='$name'");

while($row=mysql_fetch_array($res))
{
	echo $row['city'];
	echo"<br>";
	echo $row['location'];
	echo"<br>";
	echo $row['venue'];
	echo"<br>";
	echo $row['event_manager'];
	echo"<br>";
	echo $row['contact_no'];
	echo"<br>";
    echo $row['openinig_date'];
	echo"<br>";
	echo $row['closing_date'];
}
?>