<?php
include "connection.php";
$id=$_GET['id'];
$query="update test set status='rejected' where email_id='$id'";
$del=mysql_query($query,$con);
if($del)
{
	header("location:trequest.php");
}
else
{
	echo "Error in rejecting record";
	header("location:trequest.php");
}
mysql_close($con);
?>