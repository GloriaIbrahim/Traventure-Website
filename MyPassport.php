<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="jquery-3.3.1.min.js"></script>
		<link rel="icon" href="images/icons/logo.jpg" type="image/x-icon">
		<title> Explore Europe </title>
		<link rel="stylesheet" href="includes/MyPassport.css" media="screen">
		<link rel="stylesheet" href="includes/header.css" media="screen">
		<link rel="stylesheet" href="includes/footer.css" media="screen">
		
	</head>

	<body>
		<div id="header"></div>
		
		
		<div id="myPassport">
			<h1>My Passport</h1>
			<h2>Please select the attractions of the cities you want to visit </h2><br>
		
			
					<div id="rome"><h1>Rome</h1>
					<table class="table table-bordered" id="dynamic_field"align="center">  
								<tr  bgcolor="#0099ff"align="center">  
									<td>Image</td>
									<td>Name</td>
									<td>Price</td></tr>
								<?php
								$connection = mysqli_connect("localhost", "root", "", "traventure");
								  // Check connection
								  if ($connection->connect_error) {
								   die("Connection failed: " . $connection->connect_error);
								  } 
								  $sql = "SELECT Name,Price,Image FROM attraction WHERE City='Rome'";
								  $result = $connection->query($sql);
								  if ($result->num_rows > 0) {
								   // output data of each row
								   while($row = $result->fetch_assoc()) {
									?>

								   <?php
									echo "<tr><td>". "<img src='images/photos/Rome/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] ."<input type='checkbox' name='text1' class='checkbox'  onclick='myFunction()'/>". "</td><br>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
								?>  
					</div>
					<div id="paris"><h1>Paris</h1>
							<table class="table table-bordered" id="dynamic_field"align="center" >  
								<tr  bgcolor="#0099ff"align="center">  
									<td>Image</td>
									<td>Name</td>
									<td>Price</td></tr>
								<?php
								$connection = mysqli_connect("localhost", "root", "", "traventure");
								  // Check connection
								  if ($connection->connect_error) {
								   die("Connection failed: " . $connection->connect_error);
								  } 
								  $sql = "SELECT Name,Price,Image FROM attraction WHERE City='Paris'";
								  $result = $connection->query($sql);
								  if ($result->num_rows > 0) {
								   // output data of each row
								   while($row = $result->fetch_assoc()) {
									?>

								   <?php
									echo "<tr><td>". "<img src='images/photos/Paris/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] ."<input type='checkbox' name='text1' class='checkbox'  onclick='myFunction()'/>". "</td><br>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
								?>  
					</div>
					<div id="barcelona"><h1>Barcelona</h1>
						<table class="table table-bordered" id="dynamic_field"align="center">  
								<tr  bgcolor="#0099ff"align="center">  
									<td>Image</td>
									<td>Name</td>
									<td>Price</td></tr>					
								<?php
								$connection = mysqli_connect("localhost", "root", "", "traventure");
								  // Check connection
								  if ($connection->connect_error) {
								   die("Connection failed: " . $connection->connect_error);
								  } 
								  $sql = "SELECT Name,Price,Image FROM attraction WHERE City='Barcelona'";
								  $result = $connection->query($sql);
								  if ($result->num_rows > 0) {
								   // output data of each row
								   while($row = $result->fetch_assoc()) {
									?>

								   <?php
									echo "<tr><td>". "<img src='images/photos/Barcelona/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] ."<input type='checkbox' name='text1' class='checkbox'  onclick='myFunction()'/>". "</td><br>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
								?>  
					</div>
					<button onclick="Function()">Proceed</button>

		</div>
		<div id="footer"></div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="scripts/MyPassport.js"></script>
		<script src="scripts/header.js"></script> 	
		<script src="scripts/headerAndFooter.js"></script>	
		
		<script src="//code.jquery.com/jquery-1.10.2.js"></script> 	
	</body>
</html>