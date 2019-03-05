var slideIndex=0;
showSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(){
	var i;
	var slides=document.getElementsByClassName("myPhotos");
	var dots=document.getElementsByClassName("dot");

	for(i=0;i<slides.length;i++){
		slides[i].style.display="none";
	}
	slideIndex++;
	if(slideIndex>slides.length){
		slideIndex=1
	}
	setTimeout(showSlides,2500);
	for(i=0;i<dots.length;i++){
		dots[i].className=dots[i].className.replace(" active","");
	}
	slides[slideIndex-1].style.display="block";
	dots[slideIndex-1].className+=" active";
	
}
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
var city=0;
function myFunction() {
   	var paris = document.getElementsByName("paris");
	var rome = document.getElementsByName("rome");
	var barcelona = document.getElementsByName("barcelona");
	if(paris.checked==true&&rome.checked==false&&barcelona.checked==false)
		city=2;
	if(paris.checked==false&&rome.checked==true&&barcelona.checked==false)
		city=1;
	if(paris.checked==false&&rome.checked==false&&barcelona.checked==true)
		city=3;
	if(paris.checked==true&&rome.checked==true&&barcelona.checked==false)
		city=4;
	if(paris.checked==true&&rome.checked==false&&barcelona.checked==true)
		city=6;
	if(paris.checked==false&&rome.checked==true&&barcelona.checked==true)
		city=5;
	if(paris.checked==true&&rome.checked==true&&barcelona.checked==true)
		city=7;
}
function openWin() {
	localStorage.setItem("cities",city);
    window.open("MyPassport.php","_self");
}


