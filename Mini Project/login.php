<?php
session_start();
$error=0;

if(isset($_POST['btnlogin']))
{
$uid=$_POST["uname"];
$pwd=$_POST["pswd"];
//$type=$_REQUEST["user_type"];
include"connection.php";
$query="SELECT * FROM registration WHERE  email_id='".$uid."'  AND password='". $pwd."'";
$result =mysql_query($query,$con) or die ("could not connect to server");
if( mysql_num_rows($result) >0  )
{

    $row = mysql_fetch_array($result);
 echo $row['password'];
$_SESSION['name'] = $row['email_id'];
$_SESSION['password'] = $row['password'];
    if($row['email_id'] == 'Admin')
    {
      
      header("location:admin_dashboard.php");
    }
    else
    {  
      
      header("location:emp_dashboard.php");
    }
}
else
{
	 $error=1;
  $pwderror="Incorrect Credentials";
//echo '<script>alert("Incorrect Credentials");
//window.location="login.php"</script>'; 
 
}mysql_close($con);
}
?> 
<html>
<head>
	<link rel="stylesheet" href="login.css">
<style>
	body{
		background-image: url("image.jpeg");
	}
	error-details{
  font-family: monospace;
  color: red !important;
	}
</style>
</head>
<body>
<div class="center">
	<h1>Login</h1>
	<form method="POST">
		<div class="txt_field">
			<input type="text" name="uname" required>
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="password" name="pswd" required>
			<label>Password</label>
		</div>
		<input type="submit" value="Login" name="btnlogin">
		 <center><div class="error-details" color: red;><?php if($error==1) echo $pwderror;  ?></div></center>
		<div class="signup_link">
			Don't have an account?<a href="reg.php">signup</a>
		</div>
	</form></div>
</body>
</html>
