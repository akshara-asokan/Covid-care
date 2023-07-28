<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
	<link rel="stylesheet" href="login.css">
<style>
	body{
		background-image: url("image.jpeg");
	}
</style>
</head>
<body>
<div class="center">
	<h1>Login</h1>
	<form method="post">
		<div class="txt_field">
			<input type="text" required>
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="password" required>
			<label>Password</label>
		</div>
		<input type="submit" value="Login">
		<div class="signup_link">
			Don't have an account?<a href="#">signup</a>
		</div>
	</form>
</body>
</html>
