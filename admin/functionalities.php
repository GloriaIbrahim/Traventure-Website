
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="icon" href="../photos/icons/logo.jpg" type="image/x-icon">
		<title> Explore Europe </title>
		<link rel="stylesheet" href="functionalities.css" media="screen">
	</head>
	<body>

		<form id="regForm" action="login.php" method="post" >
		  <h1>Select Functionalities</h1>
		  <!-- One "tab" for each step in the form: -->
		  <div class="tab"><h3>Select Functionality:</h3>
			<div class="custom-select">
				<select>
					<option value="0">Select Functionality</option>
					<option value="1">Add Attraction</option>
					<option value="2">Update Attraction</option>
					<option value="3">Delete Attraction</option>
					<option value="4">Display All Attractions</option>
				</select>
			</div>
		  </div>
		  <br>
		  <div style="overflow:auto;">
			<div style="float:right;">
				<button type="button" id="prevBtn" onclick="nextPrev(-1)">Logout</button>
				<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			</div>
		  </div>
		  <!-- Circles which indicates the steps of the form: -->
		  <div style="text-align:center;margin-top:40px;">
			<span class="step"></span>
		  </div>
		  
		</form>
		<script src="functionalities.js"></script>
	</body>
</html>