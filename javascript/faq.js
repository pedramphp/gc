$(document).ready(function(){

	$('.faq-list li').bind('click',function(){
	
		$(this).toggleClass('active').find('div.answer').slideToggle(200);

	}).each(function(index){
	
		if( index == 0){
			$(this).addClass('active').find('div.answer').show();
		}else{
			$(this).find('div.answer').hide();
		}
		
	});
	if($.browser.msie && ($.browser.version=="7.0" || $.browser.version=="8.0")){
		$(".faq-list li > a").before("<span class='faq-list-before'></span>");
	};


});
