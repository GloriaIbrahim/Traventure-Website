<?php
	require('connect.php');
	if(isset($_POST['uname'])&& isset($_POST['psw'])&& isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['psw'];
		$sql = "SELECT Username,Password FROM client WHERE Username = '$username'";
		$result =$connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()){
				$realname = $row['Username'];
				$realpass = $row['Password'];
				if($realname == $username && $realpass == $password)
				{
					echo "Logged in Successfully";
					header('Location: ../home.html');
				}
				else
				{
					echo "Login Unsucceeded";
				}
			}
		}
	}
	
	exit;
?>