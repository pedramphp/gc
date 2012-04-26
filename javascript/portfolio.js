$(window).load(function(){

	showNext($(".portfolio-gallery-list img:first"));
	
});

$(document).ready(function(){
	
	enableFancyBox();

});


function showNext($img){
	$img.fadeIn(100);
	
	setTimeout(function(){
		if($img.parents("li").next().length){
			showNext($img.parents("li").next().find("img"));
		}else{
			$(".portfolio-gallery-list").addClass("showhover");
		}
	}, 20)
}

function enableFancyBox(){

	$('a[data-fancybox-group]').fancybox({

		closeBtn  : true,
		arrows    : true,
		prevEffect : 'none',
		nextEffect : 'none',
		nextClick : true,
		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});
	
	$(".portfolio-gallery-list a").mouseenter(function(){
		$(this).find("span").removeClass("activeHover");
	}).mouseleave(function(){
		$this= $(this);
		$(this).find("span").addClass("activeHover");
		setTimeout(function(){
			$this.find("span").removeClass("activeHover");
		}, 300)
	});
		
}