<?php
session_start();
include"connection.php";
$query="select * from test";
$result=mysql_query($query,$con) or die("error");
echo "<table border='1'>";
echo "<tr>";
echo "<th>mode of test</th>";
echo "<th>purpose</th>";
echo "<th>date</th>";
echo "<th>time</th>";
echo "<th>type</th>";
echo "<th>center</th>";
echo "<th>email id</th>";
echo "</tr>";
while($row=mysql_fetch_row($result))
{
	echo"<tr>";
	echo"<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td>";
	echo"</tr>";
}
echo "</table>";
mysql_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>