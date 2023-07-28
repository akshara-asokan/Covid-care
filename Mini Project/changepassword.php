<?php
session_start();
include"connection.php";
include "model.php";

if(isset($_POST["btnchangepsw"]))
{
	$sel="select * from registration  where email_id='".$_SESSION["name"]."'  and  password='".$_POST["txtpassword"]."'";
	$rows=mysql_query($sel);
	$count=mysql_num_rows($rows);
	$a=$_POST["txtpassword"];
	//echo "<script>alert('$a')</script>";
	if($count>0)
	{
		if($_POST["txtnewpassword"]==$_POST["txtconfirmpsd"])
		{
			$up="update registration set  password='".$_POST["txtnewpassword"]."' where  email_id='".$_SESSION["name"]."'";
			mysql_query($up);
			$_SESSION['umsg']= "Password Changed";
		}
		else
		{
			echo "<script>alert('Password Mismatch')</script>";
		}
		
	}
	else
	{
		echo "<script>alert('Wrong Current Password')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Covid-19</title>
	<!-- plugins:css -->
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

</head>
<body>
	<br><br><br><br><br>
									<center><h3 class="card-title">Change Password</h3>
										 <?php
                  if(isset($_SESSION['umsg']))
                  {?>
                  	<center>
                  	<div style="color:green;background-color:skyblue;padding:1rem;"><?php echo $_SESSION['umsg'];unset($_SESSION['umsg']);?></div></center>
                  		<?php
                  }?>
									<form class="forms-sample" method="post" enctype="multipart/form-data">
										<table class="styled-table">
              
						<tr>
						<th>Current Password</th>
						<td> <input type="password" name="txtpassword" id="txtpassword"required="required" autocomplete="off"  /></td>
						</tr>
						<tr>
						<th>New Password</th>
						<td><input type="password" name="txtnewpassword" id="txtnewpassword"required="required" autocomplete="off"  /></td>
						</tr>
						<tr>
						<th>Confirm Password</th>
						<td><input type="password" name="txtconfirmpsd" id="txtconfirmpsd"required="required" autocomplete="off"  /></td>
						</tr></table>
							<input type="submit" name="btnchangepsw" value="Change">
									</form>
								</center>
						
</body>

</html>