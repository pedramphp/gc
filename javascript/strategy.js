$(document).ready(function(){

	$links = $(".phases-box nav a");
	$links.click(function(e){
		e.preventDefault();
		if($(this).is(".active")){
			return;
		}
		$links.filter(".active").removeClass("active");
		$this = $(this);
		$(".phases-box > div:visible").fadeOut(function(){
			$($this.attr("href")).fadeIn();
		});
		$(this).addClass("active");
	});
	
	$(".next-section").click(function(){
		$links.filter(".active").next().trigger("click");
	});
	
	$(".prev-section").click(function(){
		$links.filter(".active").prev().trigger("click");
	});
	
	
	$($links.filter(".active").attr("href")).fadeIn();
	

});