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
	
	
	
	$('#slide-picture').fadeIn().cycle({
		fx: 'fade',
		timeout: 5000,
		activePagerClass: 'active',
		pager: '#slide-navigation-buttons',
		pagerAnchorBuilder: function(idx, slide){
			return '<li><a href="#"></a></li>';
		
		}
	});
	
		
});

