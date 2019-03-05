$(document).ready(function(){
	$("#barcelona").hover(function(){
		$("#barcelona").fadeTo("slow", 1);
	},
	function(){
		$("#barcelona").fadeTo("slow", 0.4);
	}); 
	$("#paris").hover(function(){
		$("#paris").fadeTo("slow", 1);
	},
	function(){
		$("#paris").fadeTo("slow", 0.4);
	}); 
	$("#rome").hover(function(){
		$("#rome").fadeTo("slow", 1);
	},
	function(){
		$("#rome").fadeTo("slow", 0.4);
	});
	$("#cities").hover(function(){
		$("#text").animate({fontSize: '3em'}, "slow");
		$("#text").animate({fontSize: '72px'}, "slow");
	}); 
});