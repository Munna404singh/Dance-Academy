<?php
$user_name=$_POST['t1'];
$password=$_POST['t2'];


mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("dance")or die(mysql_error());
mysql_query("insert into registrations value('$user_name','$password')") or die(mysql_error());
echo "<br/> data is inserted";
?>
<a href=login1.php>show data</a>";
