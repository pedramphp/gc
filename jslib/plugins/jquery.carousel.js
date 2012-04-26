(function($){

	$.fn.carousel = function( options ){
		options = $.extend({}, $.fn.carousel.settings, options );
		this.each(function(){

			var activeIndex = 1,
			container = this,
			$ul = $(container).find('ul:first'),
			size = $ul.children().length; 
			
			$ul.find('li').css({
				display: 'block',
				'float': 'left'
			});
			
			var elementWidth = $ul.find(':first-child').outerWidth(true);
			
			$ul.css({
				width :elementWidth * size, 
				position: 'relative',
				left: 0
			});
			$(container).find(options.nav).css({
		    	position: 'relative',
			    display: 'block',
			    overflow: 'hidden'
			});



			
			var slider = {

				init: function(){
					if(size <= options.limit){ 
						$( options.next+","+options.prev ).remove(); 
						return; 
					}
					$(container).find( options.next ).click($.proxy(this,"next"));
					$(container).find( options.prev ).click( $.proxy(this,"prev"));
					$(container).bind('swipeleft', $.proxy(this,"next"));
					$(container).bind('swiperight', $.proxy(this,"prev"));
				},
				
				next: function(e){

					e.preventDefault();
					e.stopPropagation();
					if( $ul.is(':animated') ){ return; }
					if( activeIndex > size - options.limit ){
						if( !options.loop) return;
			
						activeIndex = 1;
						$ul.animate({ left: 0 }, options.time);
						return; 
					}
					activeIndex += options.limit;	
					
					$ul.animate({ left: parseInt($ul.css('left')) + parseInt( options.limit * elementWidth * -1 ) }, options.time );							
				

				},
				prev: function(e){
					
					e.preventDefault();
					e.stopPropagation();
					if( $ul.is(':animated') ){ return; }
					var start;
					if( activeIndex === 1 ){ 
						if( !options.loop ) return;
						start = size-options.limit;
						if( size-options.limit < options.limit){
							start = options.limit;
						}else if(size % options.limit != 0){
							start = size - (size % options.limit);
						}
						activeIndex = start+1;
						$ul.animate({ left: start * elementWidth * -1  }, options.time);
						return; 
					}
					activeIndex -= options.limit;	
					
					$ul.animate({ left: parseInt($ul.css('left'))  + parseInt(options.limit * elementWidth) }, options.time);

				}

			};

			slider.init();
			
		});
		
	}; 
	$.fn.carousel.settings = {
		prev: '.prev',
		next:  '.next',
		limit: 3,
		time: 500,
		loop: false
	};
	

})(jQuery);
