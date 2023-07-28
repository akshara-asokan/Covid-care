<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("connection failed".mysql_error($con));
}
$db=mysql_select_db("covid_care",$con);
if(!$db)
{
die("cannot select".mysql_error($con));
}
?>