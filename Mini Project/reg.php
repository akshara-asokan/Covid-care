<?php
session_start();
include"connection.php";
$pwderror=$pwd1error=$adnoerror=$phnerror=$a=" ";
$error=0;
if(isset($_POST['btnreg']))
{
$name=$_POST["name"];
$add=$_POST["add"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$adno=$_POST["adno"];
$phone=$_POST["phn"];
$email=$_POST["uname"];
$pwd1=$_POST["pswd1"];
$pwd2=$_POST["pswd2"];

if (strlen($pwd1)<8) {
  $error=1;
  $pwderror="password should contain minimum 8 characters";
}
if($pwd1!=$pwd2){
  $error=1;
  $pwd1error="password mismatch";
}
if (strlen($phone)!=10) {
  $error=1;
  $phnerror="invalid phnone number";
}
if (strlen($adno)!=12) {
  $error=1;
  $adnoerror="invalid aadhar number";
}
if ($error==0) {
  include "connection.php";
  $q="select * from registration where email_id='".$email."'";
  $result=mysql_query($q,$con) or die("couldn't connect to server");
  if (mysql_num_rows($result)<=0) {
   $qu="insert into registration(name,address,date_of_birth,gender,ad_no,phone,email_id,password) values('$name','$add','$dob',
   '$gender','$adno','$phone','$email','$pwd1')";
   if (mysql_query($qu,$con)) {
     echo '<script>alert ("Record Added Successfully");</script>';
     header("location:login.php");
   }
   else
   {
    echo "error:".mysql_error($con);
   }
  }
  else
  {
    $error=1;
    $a="already existing account";
  }
}
}
?> 
<html>
  <head>
    <link rel="stylesheet" href="reg.css">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" name="add" required>
          </div>
          <div class="input-box">
            <span class="details">Email ID</span>
            <input type="Email" placeholder="Enter your email" name="uname" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar number</span>
            <input type="text" placeholder="Enter your Aadhar No" name="adno" required>
            <div class="error-details"><?php if($error==1) echo $adnoerror;  ?></div>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="Date" placeholder="Enter your DOB in YYYY-MM-DD format" name="dob" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name="phn" required>
            <div class="error-details" style="color: red !important;"><?php if($error==1) echo $phnerror;  ?></div>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="pswd1" required>
            <div class="error-details"><?php if($error==1) echo $pwderror;  ?></div>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="pswd2" required>
             <div class="error-details"><?php if($error==1) echo $pwd1error;  ?></div>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <center>
            <a href="login.php">
             <input type="submit" value="Register" name="btnreg"></a>
             <div class="error-details"><?php if($error==1) echo $a;  ?></div>
          </center>
         </div>
      </form>
    </div>
  </div>
</body>
</html>
