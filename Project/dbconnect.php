<?php
if(!mysql_connect("localhost","root","iamsherlocked"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("cart"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>