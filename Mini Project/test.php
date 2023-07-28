<?php
session_start();
include"connection.php";
include "model.php";
//$error=0;
if(isset($_POST['sbtn']))
{
$type=$_POST["b"];
$eid=$_POST["uname"];
$prps=$_POST["prps"];
$pdate=$_POST["pdate"];
$time=$_POST["t"];
$typ=$_POST["typ"];
$cen=$_POST["cen"];
$query="insert into test(type,purpose,date,time,typ,center,email_id,status) values('$type','$prps','$pdate','$time','$typ','$cen','$eid','sent')";
if (mysql_query($query,$con)) {
     echo '<script>alert ("Record Added Successfully");</script>';
   }
   else{
    echo '<script>alert ("email not the same");</script>';
   }
mysql_close($con);
}
?>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 95vh;
  display: flex;
  justify-content: center;
   padding: 10px;
  /*align-items: center;*/
  /*background: linear-gradient(#71b7e6, #ffffff, #71b7e6);*/
  background-image: url(home.jpg);
  background-size: cover;
}  
/*.nav{
  position: absolute;
  left: 50%;
  margin-left: -100px;
}*/
.test{
  max-width: 600px;
  background-color: #fff;
  padding: 28px 80px;
  border-radius: 3px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
form .test-details .input-box{
  margin-bottom: 11px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.test-details .input-box input{
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
.test-details .input-box input:focus
.test-details .input-box input:valid{
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

</style></head>
	<body>
		<div class="test">
            <div class="nav">
   <h5><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="emp_dashboard.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="login.php">LOG OUT</a></i></b></h5>
             </div><br><br>
		
			<div class="content">
			<form Method="POST">
			<div class="test_details">
          <h2><br>COVID TEST REGISTATION</h2><br>
				<div class="button">
				government&nbsp;&nbsp;<input type="radio" name="b" id="rd1" value="government">&nbsp;&nbsp;&nbsp;
				private &nbsp;&nbsp;<input type="radio" name="b" id="rd2" value="private">
			    </div>
                <div class="input-box">
                <span class="details">Email id</span>
                <input type="Email" placeholder="Enter email id" name="uname" required>
                </div>
                <div class="input-box">
                <span class="details">purpose</span>
                <input type="text" placeholder="Enter purpose" name="prps" required>
                </div>
                <div class="input-box">
                <span class="details">preffered date</span>
                <input type="date" placeholder="Enter preffered date" name="pdate" required>
                </div>
		        <div class="input-box">
                <span class="details">preffered time</span>
                  10am-12pm&nbsp;&nbsp;<input type="radio" name="t" id="st1" value="10am-12pm">&nbsp;&nbsp;&nbsp;
      	        1pm-4pm&nbsp;&nbsp;<input type="radio" name="t" id="st2" value="1pm-4pm"></div>
                  <div class="input-box">
                <span class="details">Type of Test</span>
      		RTPCR&nbsp;&nbsp;<input type="radio" name="typ" id="tp1" value="RTPCR">&nbsp;&nbsp;&nbsp;
      		    ANTIGEN&nbsp;&nbsp;<input type="radio" name="typ" id="tp2" value="ANTIGEN">
      		</div>
      		 <div class="input-box">
                    <span class="details">Center</span>
      			<input type="text" placeholder="center for test" name="cen" required>
                 </div><br><br>
                 <input type="reset" name="rbtn" value="reset">
                 <input type="submit" name="sbtn" value="submit">
          </div>
         </form>
     </div>
 </div>
</body>
</html>



			

