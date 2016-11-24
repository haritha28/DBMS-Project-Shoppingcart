<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$address = mysql_real_escape_string($_POST['address']);
	$phone = mysql_real_escape_string($_POST['phone']);
	if(mysql_query("INSERT INTO users(username,email,password,firstname, lastname,address, phone) 
		VALUES('$uname','$email','$upass', '$firstname', '$lastname', '$address', $phone)"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>//alert('error while registering you...');</script>
        <?php
        die(mysql_error());
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>

<tr>
<td><input type="text" name="firstname" placeholder="First Name" required /></td>
</tr>

<tr>
<td><input type="text" name="lastname" placeholder="Last Name" required /></td>
</tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><input type="text" name="address" placeholder="Your Address" required /></td>
</tr>
<tr>
<td><input type="tel" name="phone" placeholder="Phone" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>