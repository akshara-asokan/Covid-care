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
<form action="trequest.php" method="POST">
<div>
<?php
include 'connection.php';
include "adminnav.php";
$qr="select * from vehicle";
$r=mysql_query ($qr,$con) or die ("couldn't connect to server");
?>
<br><br><br><br><br><br><center>
<h3><b>&nbsp;&nbsp;&nbsp;&nbsp;VEHICLE AVAILABILITY REQUESTS</b></h3><br>
<table class="styled-table">
<thead>
<tr>
<th>email id</th>
<th>purpose</th>
<th>date</th>
<th>time</th>
<th>center</th>
<th colspan="2">status</th>
</tr></thead>
<?php while($row=mysql_fetch_array($r))
{?>
<tr>
<tbody>
<td><?php echo $row['email_id'] ;?></td>
<td><?php echo $row['purpose'] ;?></td>
<td><?php echo $row['date'] ;?></td>
<td><?php echo $row['time'] ;?></td>
<td><?php echo $row['center'] ;?></td>
<td><a href="aprv.php?id=<?php echo $row['email_id']; ?>">approve</a></td>
    <td><a href="rjct.php?id=<?php echo $row['email_id']; ?>">reject</a></td>
</tbody></tr>
<?php
}?>
</table>
<?php
 mysql_close($con); ?>
</div>
</form>
</body>
</html>