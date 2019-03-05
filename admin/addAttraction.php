<?php
	require('../php/connect.php');
	if(isset($_POST["upload"])){
		//Select image from PC
		$target="../images/photos/".basename($_FILES['image']['name']);
		//Get data from user
		$name=$_POST['name'];
		$city=$_POST['city'];
		$price=$_POST['price'];
		$image=$_FILES['image']['name'];
		//Add new attraction to database
		$query= "INSERT INTO attraction(Name,City,Price,Image) VALUES ('$name','$city','$price','$image')";
		$result=mysqli_query($connection,$query);
		if(!$result)
			die('Error: ' . mysqli_error($connection));
		else
		{
			echo "Attraction Added";
			header('Location: addAttraction.php');	
		}
	}
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="icon" href="../photos/icons/logo.jpg" type="image/x-icon">
		<title> Explore Europe </title>
		<link rel="stylesheet" href="functionalities.css" media="screen">
	</head>
	<body>

		<form id="regForm" action="addAttraction.php" method="post" enctype="multipart/form-data">
		  <h1>Add Attraction</h1>
		  <!-- One "tab" for each step in the form: -->
		  <div class="tab"><h3>Select City:</h3>
			<div class="custom-select">
				<select>
					<option value="0">Select city:</option>
					<option value="1">Paris</option>
					<option value="2">Rome</option>
					<option value="3">Barcelona</option>
				</select>
			</div>
		  </div>
		  
		  <div class="tab">
		  <div>
			<input type="text" placeholder="Enter Attraction Name" name="name" required>
			<input type="text" placeholder="Enter Attraction City" name="city" required>
			<input type="text" placeholder="Enter Attraction Price" name="price" required>
			<input type="file" name="image">
		  </div>
		  <div>
			<input type="submit" name="upload" value="Upload Image">
		  </div>
		  </div>
		  <br>
		  <div style="overflow:auto;">
			<div style="float:right;">
				<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
				<button type="button" id="nextBtn" onclick="nextPrev(1)">Logout</button>
			</div>
		  </div>
		  <!-- Circles which indicates the steps of the form: -->
		  <div style="text-align:center;margin-top:40px;">
			<span class="step"></span>
			<span class="step"></span>
		  </div>
		  
		</form>
		<script src="displayAttractions.js"></script>
	</body>
</html>