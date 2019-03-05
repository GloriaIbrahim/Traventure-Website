<?php
	//create database connection
	$connection=mysqli_connect('localhost','root','');
	if(!$connection)
		die("Database Connection Failed".mysqli_connect_error());
	//select database to use
	$select_db=mysqli_select_db($connection,'traventure');
	if(!$select_db)
		die("Database Selection Failed".mysqli_error($connection));
?>