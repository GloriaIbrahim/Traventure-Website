<?php
	require('../php/connect.php');
	include "../php/register.php";
	include "../php/login.php";
?>

<html>
	<body>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><span>Top</span></button>
		<header>
		<div id="navbar">
			
			<img src="images/icons/logo.jpg" alt="logo" id="logo">
			<a href="home.php"> Home </a>
			<a href="MyPassport.php">My Passport </a>
			<div class="dropdown">
				<a href="#" class="dropbtn">Attractions</a><br>
				<div class="dropdown-content">
					<a href="paris.php">Paris</a><br>
					<a href="rome.php">Rome</a><br>
					<a href="barcelona.php">Barcelona</a><br>
				</div>
			</div>
			
			<div class="search-container">
				<form>
					<input type="text" placeholder="Search.." name="search">
					<button type="submit"><img src ="images/icons/search.png" alt="search"></button>
				</form>
			</div>
			<button class="sign" onclick="document.getElementById('id01').style.display='block'">Sign up</button>
			<button class="sign" onclick="document.getElementById('id02').style.display='block'">Sign in</button>
		</div>
		</header>
		<div id="contact-us">
			<a href="https://www.facebook.com/" target="_blank">
				<img src ="images/icons/facebook.png" alt="facebook">
			</a> 
			<a href="http://www.twitter.com/" target="_blank">
				<img src ="images/icons/twitter.png" alt="twitter"> 
			</a> 
			<a href="http://www.linkedin.com/" target="_blank">
				<img src ="images/icons/linkedin.png" alt="linkedin"> 
			</a> 
			<a href="https://www.google.com.eg/maps?hl=en&tab=wl" target="_blank">
				<img src ="images/icons/location.png" alt="location on map">
			</a>
			<a href="mailto:gloria150753@bue.edu.eg">
				<img src ="images/icons/email.png" alt="email address"> 
			</a>
		</div>	
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<form class="modal-content" method="post" action="php/register.php">
				<fieldset>
				<div class="container">
				  <h1>Sign Up</h1>
				  <p>Please fill in this form to create an account.</p>
				  <hr>
				  <label for="name"><b>Full Name</b></label>
				  <input type="text" placeholder="Enter Full Name" name="name" required>
				  
				  <label for="email"><b>Email</b></label>
				  <input type="text" placeholder="Enter Email" name="email" required>
					
				  <label for="uname"><b>Username</b></label>
				  <input type="text" placeholder="Enter Username" name="uname" required>
				  
				  <label for="psw"><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
					id="password" onkeyup='check();'required>

				  <label for="psw-repeat"><b>Repeat Password</b></label>
				  <input type="password" placeholder="Repeat Password" name="psw-repeat" id="confirm_password"  onkeyup='check();'required>
				  <span id='message'></span><br><br>
				  
				  <label for="card"><b>Card Number</b></label>
				  <input type="text" placeholder="Enter Card Number" name="card" required>
				  
				  <label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				  </label>

				  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				  <div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn" name="submit">Sign Up</button>
				  </div>
				 </div>
				 </fieldset>
			</form>
		</div>	
		
		
		<div id="id02" class="modal2">
			<span onclick="document.getElementById('id02').style.display='none'" class="close2" title="Close Modal">&times;</span>
			<form class="modal-content2" method="post" action="php/login.php">
				<fieldset>
				<div class="container2">
				<h1>Sign In</h1>
				  <p>Please enter your username and password</p>
				  <hr>
				  <label for="uname"><b>Username</b></label>
				  <input type="text" placeholder="Enter Username" name="uname" required>

				  <label for="psw"><b>Password</b></label>
				  <input type="password" placeholder="Enter Password" name="psw" required>
					
				  <button type="submit" id="login" name="login">Login</button>
				  <label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				  </label>
				</div>

				<div class="container2" style="background-color:#f1f1f1">
				  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
				  <span class="psw">Forgot <a href="#">password?</a></span>
				</div>
				</fieldset>
			</form>
		</div>	
		
		<script src="scripts/header.js"></script>
	</body>
</html>