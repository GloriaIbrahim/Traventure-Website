<?php
	require('connect.php');
	//If the values are entered, insert them into the database
	if(isset($_POST['uname'])&& isset($_POST['psw'])&& isset($_POST['submit']))
	{
		$fullname=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['uname'];
		$password=$_POST['psw'];
		$cardnum=$_POST['card'];
		
		$query= "INSERT INTO client(FullName, Email, Username, Password, CardNumber) VALUES 
		('$fullname','$email','$username','$password','$cardnum')";
		$result=mysqli_query($connection,$query);
		if(!$result)
			die('Error: ' . mysqli_error($connection));
		else
		{
			echo "Account Added";
			mysqli_close($connection);	
		}
	}
	header('Location: ../home.html');
	exit;
?>