<?php
	require('../php/connect.php');
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
				if($username == "glo" && $realpass == $password)
				{
					echo "Logged in Successfully";
					header('Location: functionalities.php');
				}
				else
				{
					echo "Login Unsucceeded";
					header('Location: login.php');
				}
			}
		}
	}
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="icon" href="../images/icons/logo.jpg" type="image/x-icon">
		<title> Explore Europe </title>
		<link rel="stylesheet" href="admin.css" media="screen">
	</head>
	<body>
		<h2>Login Form</h2>

		<form method="post" action="functionalities.php">
		  <div class="imgcontainer">
			<img src="../images/icons/admin.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
				
			<button type="submit" name="login">Login</button>
			<label>
			  <input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot <a href="#">password?</a></span>
		  </div>
		  
		</form>
		
		<div id="message">
			  <h3>Password must contain the following:</h3>
			  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
			  <p id="number" class="invalid">A <b>number</b></p>
			  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
		</div>
		
		<script src="login.js"></script>
	</body>
</html>
