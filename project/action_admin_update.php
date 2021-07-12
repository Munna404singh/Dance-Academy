<?php
session_start();
include("connect.php");
$id=$_REQUEST['val'];
$_SESSION['id']=$id;
$res=mysql_query("select * from events where id=$id");
$row=mysql_fetch_array($res);
?>
<html>
<body>
<form method="POST" action="update1.php">
<table border="1">
<tr>
<td>City</td>
<td><input type="text" name="city" value="<?php echo $row['city']; ?>" /></td>
</tr>
<tr>
<td>Location</td>
<td><input type="text" name="location" value="<?php echo $row['location']; ?>"  /></td>
</tr>
<tr>
<td>Venue</td>
<td><input type="text" name="venue"  value="<?php echo $row['venue']; ?>" /></td>
</tr>
<tr>
<td>Event Manager</td>
<td><input type="text" name="event"  value="<?php echo $row['event_manager']; ?>" /></td>
</tr>
<tr>
<td>Contact Number</td>
<td><input type="text" name="contact"  value="<?php echo $row['contact_no']; ?>" /></td>
</tr>
<tr>
<td>Opening Date</td>
<td><input type="text" name="opening"   value="<?php echo $row['openinig_date']; ?>"/></td>
</tr>
<tr>
<td>Closing Date</td>
<td><input type="text" name="closing"   value="<?php echo $row['closing_date']; ?>"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit"  value="UPDATE"/></td>
</tr>

</table>


</form></body>
</html>