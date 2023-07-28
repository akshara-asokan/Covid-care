<?php
include "connection.php";
$id=$_GET['id'];
$query="update vehicle set status='rejected' where email_id='$id'";
$del=mysql_query($query,$con);
if($del)
{
	header("location:vehiclerqst.php");
}
else
{
	echo "Error in rejecting record";
	header("location:vehiclerqst.php");
}
mysql_close($con);
?>