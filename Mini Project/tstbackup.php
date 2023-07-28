<html>
<head>
   <style>
     .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #2691d9;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #2691d9;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: ##2691d9;
}
b{
    color: #2691d9;
}
    </style> 
</head>
<body>
  <div>
<?php
session_start();
include "connection.php";
include "model.php";
$uid=$_SESSION['name'];
$query="select * from test t inner join registration where email_id='".$uid."'";
$result=mysql_query ($query,$con) or die ("couldn't connect to server");
?>
<br><br><br><br><br><br><center>
<h3><b>&nbsp;&nbsp;&nbsp;&nbsp;COVID TEST RESULT</b></h3><br>
<table class="styled-table">
<thead>
<tr>
<th>mode of test</th>
<th>date of test</th>
<th>time</th>
<th>type</th>
<th>result</th>
</tr>
</thead>
<?php while($row=mysql_fetch_array($result))
{?>
  <tr>
  <tbody>
  <td><?php echo $row[0] ;?></td>
  <td><?php echo $row[2] ;?></td>
  <td><?php echo $row[4] ;?></td>
  <td><?php echo $row[5] ;?></td>
  <td><?php echo $row[8] ;?></td>
  </tbody>
  </tr>
<?php
}?>
</table>
<?php
mysql_close($con);
?>
</center>
</div></body></html>
</body>
</html>
