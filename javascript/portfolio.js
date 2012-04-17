$(document).ready(function(){

	$('a[data-fancybox-group]').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',
		closeBtn  : false,
		arrows    : false,
		nextClick : true,
		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});
	
});
