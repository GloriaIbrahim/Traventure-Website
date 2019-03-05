<?php
	require('../php/connect.php');
	if(isset($_POST['delete']))
	{
		//Get attraction name that the user want to delete from the user
		$attraction=$_POST['attraction'];
		
		//Check for the attraction and delete it
		$sql = "DELETE FROM attraction WHERE Name = '$attraction'";
		$result =$connection->query($sql);
		if($result===TRUE)
		{
			echo "Attraction Deleted";
			header('Location: deleteAttraction.php');
		}
		else
		{
			echo "Attraction hasn't been deleted";
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

		<form id="regForm" action="deleteAttraction.php" method="post">
		  <h1>Delete Attraction</h1>
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
			
					<div id="paris"><h2>Paris</h2><br>&nbsp;
						<div class="table-responsive">  
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
								  $sql = "SELECT Name,Price,Image FROM attraction WHERE City='Paris'";
								  $result = $connection->query($sql);
								  if ($result->num_rows > 0) {
								   // output data of each row
								   while($row = $result->fetch_assoc()) {
									?>

								   <?php
									echo "<tr><td>". "<img src='../images/photos/Paris/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] . "</td>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
								?>       
                          </div> 
					</div>
					<div id="rome"><h2>Rome</h2><br>&nbsp;
						<div class="table-responsive">  
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
								   
									echo "<tr><td>". "<img src='../images/photos/Rome/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] . "</td>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
								?>       
                          </div> 
					</div>
					<div id="barcelona"><h2>Barcelona</h2><br>&nbsp;	
						<div class="table-responsive">  
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
									echo "<tr><td>". "<img src='../images/photos/Barcelona/".$row['Image']."'>" ."</td><td>" . $row["Name"]. "</td><td>" . "$". $row["Price"] . "</td>";
									?>								  
								   </tr>
								<?php
								}
								echo "</table>";
								} else { echo "0 results"; } 
							?>       
                          </div> 
					</div>
					<input type="text" placeholder="Enter Attraction Name" name="attraction" required>
					<button type="submit" name="delete">Delete</button>
		  </div>
		  <div style="overflow:auto;">
			<div style="float:right;">
			  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
			  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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