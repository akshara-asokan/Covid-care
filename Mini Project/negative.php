<?php
include "connection.php";
$id=$_GET['id'];
$query="update test set result='negative' where email_id='$id'";
$p=mysql_query($query,$con);
if($p)
{
	header("location:result.php");
}
else
{
	echo "Error in change record";
	header("location:result.php");
}
mysql_close($con);
?>