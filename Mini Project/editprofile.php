<?php
session_start();
include"connection.php";
include "model.php";
if(isset($_POST["btn_edit"]))
{
	$name=$_POST["txtname"];
	$address=$_POST["txtaddress"];
	$phn=$_POST["txtcontact"];
	$a=$_SESSION["name"];
	//echo "<script>alert('.$a.')</script>";
	
  $up="update registration set name = '$name', address = '$address',phone = '$phn' where email_id = '$a'";
  $_SESSION['umsg']= "Profile Updated";
 //echo $up;
  mysql_query($up);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><br>
  <title>edit profile</title>
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
input[type="submit"]{
    width: 190px;
    height: 40px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
</style>

</head><body>
  <br><br><br><br><h3 align="center">Edit Profile</h3>
                  <?php
                  if(isset($_SESSION['umsg']))
                  {?>
                  	<center>
                  	<div style="color:green;background-color:skyblue;padding:1rem;"><?php echo $_SESSION['umsg'];unset($_SESSION['umsg']);?></div></center>
                  		<?php
                  }
                  $sel1="select * from registration where email_id='".$_SESSION["name"]."'";
   //echo $sel1;
                  $rows=mysql_query($sel1);
                  $i=0;
                  while($data1=mysql_fetch_array($rows))
                  {
                    $i++;
                    ?>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                       <center><table class="styled-table">
              
						<tr>
						<th>Name</th>
						<td> <input type="text" name="txtname" id="txtname" required="required" pattern="[A-Za-z ]*$" title="only alphabets" autocomplete="off" value="<?php echo $data1["name"];?>"/></td>
						</tr>
						<tr>
						<th>Address</th>
						<td><input type="text" name="txtaddress" id="txtaddress" required="required" pattern="[A-Za-z ]*$" title="only alphabets" autocomplete="off" value="<?php echo $data1["address"];?>"/></td>
						</tr>
						<tr>
						<th>Adhaar no</th>
						<td> <input type="text" name="txtadno" id="txtadno"required="required" autocomplete="off"  value="<?php echo $data1["ad_no"];?>"  readonly /></td>
						</tr>
						<tr>
						<th>Contact</th>
						<td> <input type="text" name="txtcontact" id="txtcontact"required="required"pattern="^[7-9][0-9]{9}$" autocomplete="off"  value="<?php echo 	$data1["phone"];?>" /></td>
						</tr>

						</table></center>
                      <div class="container-login100-form-btn m-t-32">
                       <center>  <input type="submit" name="btn_edit" value="Edit"></center>
                      </div>
                    </div>
                  </form>
                  <?php
                }
                ?>
              
              </body></html>

              