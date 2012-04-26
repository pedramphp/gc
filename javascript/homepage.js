$(document).ready(function(){


	$('#portfolio-holder').carousel({
		prev: '.prev',
		next: '.next',
		nav : 'nav',
		time: 800,
		loop: true,
		limit: 5
	});	
	
	
	$('a[data-fancybox-group]').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',
		closeBtn  : true,
		arrows    : true,
		nextClick : true,
		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});
	

	
});



var activeIndex = 0,
	slideshow,
	timeout,
	slideshowFunc = function(){
		
		slideshow = setInterval(function(){
			
			if( activeIndex === $("#slide-picture li").length -1 ){
				activeIndex = 0;
			}else{
				activeIndex++;
			}
			
			changeImage();

		
		},5000);		
	
	},
	changeImage = function(){
		$("#slide-navigation-buttons").find(".active").removeClass("active")
                                         .end()
                                         .find("li:eq("+activeIndex+")").addClass("active");
                                       
                                       
                                       
$("#slide-picture").find(".active").fadeOut(500,function(){ $(this).removeClass("active"); })
                                       .end().find("li:eq("+activeIndex+")").fadeIn(500,function(){ $(this).addClass("active"); });

	
	}
	
	

$(window).load(function(){

	slideshowFunc();
	
	$("#slide-navigation-buttons a").click(function(e){
		e.preventDefault();
		if( $("#slide-navigation-buttons").is(".active")){
			return;
		}
		clearTimeout(timeout);
		activeIndex = $("#slide-navigation-buttons a").index($(this));
		
		changeImage();
		clearInterval(slideshow);
		
		timeout = setTimeout(slideshowFunc, 5000);
	
	});
	
});



