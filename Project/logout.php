<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

if(isset($_SESSION['user']))
{
	unset($_SESSION['user']);
	unset($_SESSION['access']);
	unset($_SESSION['logged']);
	session_destroy();
	header('Location:index.php?status=loggedout');
}
?>