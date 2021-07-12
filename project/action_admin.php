<?php
$id=$_REQUEST['val'];

include("connect.php");
mysql_query("delete from events where id=$id");
header("location:admin.php");



?>