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
$sel="select * from test t inner join registration r on t.email_id=r.email_id where t.email_id='".$uid."'";
$row = mysql_query($sel);
      
?>
<br><br><br><br><br><br><center>
<h3><b>&nbsp;&nbsp;&nbsp;&nbsp;COVID TEST RESULT</b></h3><br>
<table class="styled-table">
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>DOB</th>
<th>mode of test</th>
<th>date of test</th>
<th>time</th>
<th>result</th>
<th>Action</th>
</tr>
</thead>
<?php
while($data = mysql_fetch_array($row))
      {
?>
  <tr>
  <tbody>
  <td><?php echo $data["name"] ;?></td>
  <td><?php echo $data["address"] ;?></td>
  <td><?php echo $data["date_of_birth"] ;?></td>
  <td><?php echo $data["typ"] ;?></td>
  <td><?php echo $data["date"] ;?></td>
  <td><?php echo $data["time"] ;?></td>
  <td><?php echo $data["result"] ;?></td>
  <td><a href="dwldrslt.php?id=<?php echo $data['email_id']; ?>">dowload</a>
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
