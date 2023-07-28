<?php
session_start();
include "connection.php";
include "model.php";
if(isset($_POST['btn']))
{
  header("location:vprint.php");
}
mysql_close($con);
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
  height: 50vh;
  display: flex;
  justify-content: center;
   padding: 10px;
  /*align-items: center;*/
  /*background: linear-gradient(#71b7e6, #ffffff, #71b7e6);*/
  background-image: url(home.jpg);
  background-size: cover;
} 
.rqst{
  max-width: 600px;
  background-color: #fff;
  padding: 28px 80px;
  border-radius: 3px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
form .rqst-details .input-box{
  margin-bottom: 11px;
}
form .input-box span.details{
  display: inline-block;
  font-weight: 500;
  margin-bottom: 5px;
}
.rqst h2{
  padding-bottom: 15px;
}
.rqst-details .input-box input{
  height: 30px;
  width: 100%;
  outline: none;
  font-size: 15px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.rqst-details .input-box input:focus,
.rqst-details .input-box input:valid{
  border-color: #2691d9;
}
input[type="submit"]{
    width: 250px;
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
	<div class="rqst">
		<div class="nav">
   <h5><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="emp_dashboard.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="login.php">LOG OUT</a></i></b></h5>
             </div><br><br><br>
    <h2>REQUEST STATUS</h2>
		<form method="POST">
			<div class="rqst-details">
				<div class="input-box">
					 <span class="details">Email id</span>
                     <input type="Email" placeholder="Enter Email id" name="id" required>
				</div>
                <div class="button">
                <center>
                 <input type="submit" value="Check Request Status" name="btn">
                </center>
               </div>
           </div>
       </form>
   </div>
</body>
</html> 