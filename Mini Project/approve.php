<?php
include "connection.php";
$id=$_GET['id'];
$query="update test set status='accepted',result='will be update soon' where email_id='$id'";
$del=mysql_query($query,$con);
if($del)
{
	header("location:trequest.php");
}
else
{
	echo "Error in accepting record";
	header("location:trequest.php");
}
mysql_close($con);
?>