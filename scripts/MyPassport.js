window.onload=function displayAttractions(){
	var citySelected=localStorage.getItem("cities");
	if(citySelected == 1) {
			document.getElementById("paris").style.display = 'none';
			document.getElementById("rome").style.display = 'block';
			document.getElementById("barcelona").style.display = 'none';
		}
		else if(citySelected == 2) {
			document.getElementById("rome").style.display = 'none';
			document.getElementById("paris").style.display = 'block';
			document.getElementById("barcelona").style.display = 'none';
		}
		else if(citySelected == 3) {
			document.getElementById("barcelona").style.display = 'block';
			document.getElementById("paris").style.display = 'none';
			document.getElementById("rome").style.display = 'none';
		}
		else if(citySelected== 4) {
			document.getElementById("barcelona").style.display = 'none';
			document.getElementById("paris").style.display = 'block';
			document.getElementById("rome").style.display = 'block';
		}
		else if(citySelected == 5) {
			document.getElementById("barcelona").style.display = 'block';
			document.getElementById("paris").style.display = 'none';
			document.getElementById("rome").style.display = 'block';
		}
		else if(citySelected == 6) {
			document.getElementById("barcelona").style.display = 'block';
			document.getElementById("paris").style.display = 'block';
			document.getElementById("rome").style.display = 'none';
		}
		else if(citySelected == 7) {
			document.getElementById("barcelona").style.display = 'block';
			document.getElementById("paris").style.display = 'block';
			document.getElementById("rome").style.display = 'block';
		}
}
function myFunction() {
   	var a = document.getElementsByName("text1");
	var x=1;
	var c=1;
    for(var i=0; i<a.length; i++){
	if (a[i].checked==true){
       
		document.getElementById("demo"+x).innerHTML = "Checkbox " +x+" CHECKED!";
		x++;
		c++;
		
    } 
	else {
       document.getElementById("demo"+x).innerHTML = "Checkbox " +x+" unxhecked!";
	   x++;
	   
    }
	}
	
	
}
function Function() {
    
	
	var a = document.getElementsByName("text1");
	var x=1;
	var c=0;
    for(var i=0; i<a.length; i++){
	if (a[i].checked==true){
       
		
		x++;
		c++;
		
    } 
	else {
       
	   x++;
	   
    }
	}
	if(c>=30)
		window.alert("The attractions that have been chosen are  "+ c+" \n Congratulations, you got a 50% discount on your purchase");
	else if(c>=15)
		window.alert("The attractions that have been chosen are  "+ c+" \n Congratulations, you got a 20% discount on your purchase");
	else if(c>=10)
		window.alert("The attractions that have been chosen are  "+ c+" \n Congratulations, you got a 10% discount on your purchase");
	else
		window.alert("The attractions that have been chosen are  "+ c+" \n Sorry, you have not gotten any discount on your purchase");
	
}


