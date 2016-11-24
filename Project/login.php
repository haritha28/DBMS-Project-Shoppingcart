<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	switch ($_SESSION['access']) {
			case 1:
				header("Location: admin.php");
				break;
			
			default:
				header("Location: index.php");
				break;
		}
}

if(isset($_POST['btn-login']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE username='$username'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['username'];
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['access'] = $row['access'];
		$_SESSION['logged']=true;
		
		switch ($_SESSION['access']) {
			case 1:
				header("Location: admin.php");
				break;
			
			default:
				header("Location: index.php");
				break;
		}
		
	}
	else
	{
		$err='Invalid Username or Password';
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Login & Registration System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<?php 
echo $err;?>
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>