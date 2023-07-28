<?php
session_start();
include"connection.php";
include "model.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>profile</title>
  <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

 .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table tr {
    background-color: #2691d9;
    color: #363636;
    text-align: left;
    border-bottom: 2px solid #2691d9;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tr {
    border-bottom: 2px solid #2691d9;
}

.styled-table tr:nth-of-type(even) {
    background-color: #f3f3f3;
     border-bottom: 2px solid #2691d9;
}

.styled-table tr:last-of-type {
    border-bottom: 2px solid #2691d9;
}
.styled-table tr.active-row {
    font-weight: bold;
    color: ##2691d9;
}
b{
    color: #2691d9;
}
</style>
</head>
<body>



  <br><br><br><br><br>
   <div class="card-body" align="center">
                  <h4 class="card-title">My Pofile</h4>
                   <?php

                $sel1="select * from registration where email_id='".$_SESSION["name"]."'";
   //echo $sel1;
                $rows=mysql_query($sel1);
                $i=0;
                while($res=mysql_fetch_array($rows))
                {
                    $i++;
                ?>
                 

        <center><table class="styled-table">
              
<tr>
<th>Name</th>
<td><?php echo $res['name'] ;?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $res['address'];?></td>
</tr>
<tr>
<th>DOB</th>
<td><?php echo $res['date_of_birth'];?></td>
</tr>
<tr>
<th>Adhaar no</th>
<td><?php echo $res['ad_no'];?></td>
</tr>
<tr>
<th>Contact</th>
<td><?php echo $res['phone'];?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $res['email_id'];?></td>
</tr>
</table></center>
<?php
 mysql_close($con); ?>
                  
                  <?php
                }
                ?>
                </div>
</body>

</html>