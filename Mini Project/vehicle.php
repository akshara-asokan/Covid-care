<?php
session_start();
include "connection.php";
include "model.php";
if(isset($_POST['btnsub']))
{
$id=$_POST["id"];
$p=$_POST["purpose"];
$d=$_POST["date"];
$t=$_POST["time"];
$c=$_POST["center"];
//$type=$_REQUEST["user_type"];
$query="insert into vehicle(email_id,purpose,date,time,center) values('$id','$p','$d','$t','$c')";
if (mysql_query($query,$con)) {
     echo '<script>alert ("Record Added Successfully");</script>';
   }
else
{
  echo '<script>alert ("email mismatch");</script>';
}
mysql_close($con);
}
?> 
<html>
<head>
	    <style>
     *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 90vh;
  display: flex;
  justify-content: center;
   padding: 10px;
  /*align-items: center;*/
  /*background: linear-gradient(#71b7e6, #ffffff, #71b7e6);*/
  background-image: url(home.jpg);
  background-size: cover;
} 
.vehicle{
  max-width: 600px;
  background-color: #fff;
  padding: 28px 80px;
  border-radius: 3px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
form .vehicle-details .input-box{
  margin-bottom: 11px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.vehicle-details .input-box input{
  height: 30px;
  width: 190%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.vehicle-details .input-box input:focus,
.vehicle-details .input-box input:valid{
  border-color: #2691d9;
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
input[type="reset"]{
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
input[type="reset"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two{
   background: #2691d9;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   width: 28px;
   position: all;
   transform: translateY(20px);
   margin-right: 48px;
   margin-bottom: 10px;
   display: inline-block;
   background: #2691d9;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
form .category label{
padding-left: 18px;
}
.content form .vehicle-details{
  display: inline-block;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
   </style>
</head>
<body>
  <br><br>
  <div class="vehicle">
    <div class="nav">
   <h5><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="emp_dashboard.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="login.php">LOG OUT</a></i></b></h5>
             </div><br><br><br>
		<h2>VEHICLE AVAILABILITY</h2>
		 <div class="content">
      <form method="POST" action=" ">
        <div class="vehicle-details">
          <div class="input-box">
            <span class="details">User ID</span>
            <input type="Email" placeholder="Enter user id" name="id" required>
          </div>
          <div class="Purpose-details">
            <span class="details">Purpose</span>
             <input type="radio" name="purpose" id="dot-1" value="Patient">
             <input type="radio" name="purpose" id="dot-2" value="For Test">
              
              <div class="category">
                <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="Purpose">Patient </span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="Purpose"> For Test</span>
                </label>
              </div>
          </div>
		<div class="input-box">
            <span class="details">Date</span>
            <input type="Date" placeholder="date" name="date" required>
          </div>
        <div class="input-box">
            <span class="details">time</span>
            <input type="time" placeholder="time" name="time" required>
          </div>
        <div class="input-box">
            <span class="details">center</span>
            <input type="text" placeholder="Enter center" name="center" required>
          </div>
		
		<div class="button">
           <center>
           	 <input type="reset" value="Reset" name="btnrst">
             <input type="submit" value="Submit" name="btnsub">
          </center>
        </div>
        </div>
        </form>
        </div>
        </div>
        </body>
        </html>
