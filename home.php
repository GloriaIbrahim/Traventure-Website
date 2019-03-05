
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/icons/logo.jpg" type="image/x-icon">
		<title> Explore Europe </title>
		<link rel="stylesheet" href="includes/index.css" media="screen">
		<link rel="stylesheet" href="includes/header.css" media="screen">
		<link rel="stylesheet" href="includes/footer.css" media="screen">
		
		
		
	</head>
	<body>
		<div id="header"></div>
		<div class="fullBackground">
			<div class="myPhotos fade">
				<img src="images/photos/paris1.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/paris2.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/paris3.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/rome1.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/rome2.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/rome3.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/barcelona1.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/barcelona2.jpg">
			</div>
			<div class="myPhotos fade">
				<img src="images/photos/barcelona3.jpg">
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		
		<div class="passport">
			<div class="column">
				<img src="images/photos/discount.jpg">
				<img src="images/photos/10.png">
				<p>On 10 Attractions</p>
			</div>
			<div class="column">
				<img src="images/photos/discount.jpg">
				<img src="images/photos/20.png">
				<p>On 15 Attractions</p>
			</div>
			<div class="column">
				<img src="images/photos/discount.jpg">
				<img src="images/photos/50.png">
				<p>On 30 Attractions</p>
				<div class="dropright">
				<button><span>See Attractions</span></button>
					<div class="dropright-content">
						<a href="paris.php">Paris</a>
						<a href="rome.php">Rome</a>
						<a href="barcelona.php">Barcelona</a>
					</div>
				 </div>
			</div>
		</div>
		
		
		<div id="cities">
			<img src="images/photos/PARIS-ROME-BARCELONA.jpg">
			<div id="text">Paris - Rome - Barcelona</div>
		</div>
		
			<div class="city">
				<div class="column2">
					<img src="images/photos/paris.jpg" id="paris"><br>
					<h1>Paris <input type="checkbox" class="myCheck" name="paris" onclick="myFunction()"></h1>
				</div>
				<div class="column2">
					<img src="images/photos/rome.jpg" id="rome"><br>
					<h1>Rome <input type="checkbox" class="myCheck" name="rome" onclick="myFunction()"></h1>
				</div>
				<div class="column2">
					<img src="images/photos/barcelona.jpg" id="barcelona"><br>
					<h1>Barcelona <input type="checkbox" class="myCheck" name="barcelona" onclick="myFunction()"></h1>
					<button onclick="openWin()"><span>Create Your Own Passport</span></button>
				</div>
			</div>
		<div id="googleMap" ></div>
		<div id="footer"></div>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scripts/home.js"></script>
		<script src="scripts/index.js"></script>
		<script src="scripts/header.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJtzc1Fhn4pZ_aiyf8_Z5emM5Vv4JsHpE&callback=myMap"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="scripts/headerAndFooter.js"></script>
	</body>
</html>