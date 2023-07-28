<?php
include "connection.php";
$id=$_GET['id'];
$query="update vehicle set status='accepted' where email_id='$id'";
$del=mysql_query($query,$con);
if($del)
{
	header("location:vehiclerqst.php");
}
else
{
	echo "Error in acceptting record";
	header("location:vehiclerqst.php");
}
mysql_close($con);
?>