$(document).ready(function(){

	$('[data-link]').click(function(){
		window.location.href = $(this).data("link");
	}).css("cursor","pointer");

});