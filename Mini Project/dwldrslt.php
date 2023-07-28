<?php
    include('connection.php');
    $id=$_REQUEST['id'];
    $q=mysql_query("select * from test t inner join registration r on t.email_id=r.email_id where t.email_id='".$id."'" );
    $res=mysql_fetch_array($q);
    
?>
<html>
    <head>
       <!-- <link rel="stylesheet" href="print.css">-->
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
.logo{
  color: #2691d9;
  font-size: 30px;
  font-weight: 600;
}
.logo{
  background: #2691d9;
  position: fixed;
  width: 100%;
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
@media print{
    @page{
        margin:0;
    }
    body{margin:1.6cm;}
}
</style>
    </head>
    <body >
        <div class="logo">CovidCare.</div>
         <!--<img src="css/image/logg.png" class="logo"></center>-->
<br><br>

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
<th>Type of test</th>
<td><?php echo $res['typ'];?></td>
</tr>
<tr>
<th>Date of test</th>
<td><?php echo $res['date'];?></td>
</tr>
<tr>
<th>Time</th>
<td><?php echo $res['time'];?></td>
</tr>
<tr>
<th>Result</th>
<td><?php echo $res['result'];?></td>
</tr>
</table></center>
<?php
 mysql_close($con); ?>


            
        
    </body>
    </html>
    <script type="text/javascript">
window.print();
window.onafterprint = function(event) {
    window.location.href = 'rsltprint.php'
};

</script>




