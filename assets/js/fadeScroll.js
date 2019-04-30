(function ($) {
 
    $.fn.geseratas = function( options ) {
    	
    	// VARIABLES ------------------------------------
    	var elements = $(this);
    	
 
        
        // SETTINGS ------------------------------------
        var settings = $.extend({
	        minDistance: 	50 * $(window).height() / 100   //Distance between the browser top scroll and the next element
        }, options );
        
        
        
        // MAIN ------------------------------------
    	// Add sFade classes
		$(elements).each(function(){
		    $(this).css('opacity','0');
		});
		
		// Check the position of all the elemnents.
		CheckFades();
        
        
        
		// FUNCTIONS ------------------------------------
		function CheckFades(){
			
		
			//Get the top of the browser
			vWindowScrollTop = $(window).scrollTop();
		
		    //Test if the window TopScroll reachs the element TopScroll minus the minimun distance
		    $(elements).each(function(){
			    if( ( (vWindowScrollTop + parseInt(settings.minDistance)) >= $(this).offset().top) ){
			        $(this).addClass('animated fadeInUp');
			    }
		    });
		}
		
		

        // EVENTS ------------------------------------
        $(window).scroll(function() {
		  CheckFades();
		});
    };
 
}( jQuery ));

(function ($) {
 
    $.fn.geserkiri = function( options ) {
    	
    	// VARIABLES ------------------------------------
    	var elements = $(this);
    	
 
        
        // SETTINGS ------------------------------------
        var settings = $.extend({
	        minDistance: 	50 * $(window).height() / 100   //Distance between the browser top scroll and the next element
        }, options );
        
        
        
        // MAIN ------------------------------------
    	// Add sFade classes
		$(elements).each(function(){
		    $(this).css('opacity','0');
		});
		
		// Check the position of all the elemnents.
		CheckFades();
        
        
        
		// FUNCTIONS ------------------------------------
		function CheckFades(){
			
		
			//Get the top of the browser
			vWindowScrollTop = $(window).scrollTop();
		
		    //Test if the window TopScroll reachs the element TopScroll minus the minimun distance
		    $(elements).each(function(){
			    if( ( (vWindowScrollTop + parseInt(settings.minDistance)) >= $(this).offset().top) ){
			        $(this).addClass('animated fadeInLeft');
			    }
		    });
		}
		
		

        // EVENTS ------------------------------------
        $(window).scroll(function() {
		  CheckFades();
		});
    };
 
}( jQuery ));

(function ($) {
 
    $.fn.geserkanan = function( options ) {
    	
    	// VARIABLES ------------------------------------
    	var elements = $(this);
    	
 
        
        // SETTINGS ------------------------------------
        var settings = $.extend({
	        minDistance: 	50 * $(window).height() / 100   //Distance between the browser top scroll and the next element
        }, options );
        
        
        
        // MAIN ------------------------------------
    	// Add sFade classes
		$(elements).each(function(){
		    $(this).css('opacity','0');
		});
		
		// Check the position of all the elemnents.
		CheckFades();
        
        
        
		// FUNCTIONS ------------------------------------
		function CheckFades(){
			
		
			//Get the top of the browser
			vWindowScrollTop = $(window).scrollTop();
		
		    //Test if the window TopScroll reachs the element TopScroll minus the minimun distance
		    $(elements).each(function(){
			    if( ( (vWindowScrollTop + parseInt(settings.minDistance)) >= $(this).offset().top) ){
			        $(this).addClass('animated fadeInRight');
			    }
		    });
		}
		
		

        // EVENTS ------------------------------------
        $(window).scroll(function() {
		  CheckFades();
		});
    };
 
}( jQuery ));

(function ($) {
 
    $.fn.geserbawah = function( options ) {
    	
    	// VARIABLES ------------------------------------
    	var elements = $(this);
    	
 
        
        // SETTINGS ------------------------------------
        var settings = $.extend({
	        minDistance: 	50 * $(window).height() / 100   //Distance between the browser top scroll and the next element
        }, options );
        
        
        
        // MAIN ------------------------------------
    	// Add sFade classes
		$(elements).each(function(){
		    $(this).css('opacity','0');
		});
		
		// Check the position of all the elemnents.
		CheckFades();
        
        
        
		// FUNCTIONS ------------------------------------
		function CheckFades(){
			
		
			//Get the top of the browser
			vWindowScrollTop = $(window).scrollTop();
		
		    //Test if the window TopScroll reachs the element TopScroll minus the minimun distance
		    $(elements).each(function(){
			    if( ( (vWindowScrollTop + parseInt(settings.minDistance)) >= $(this).offset().top) ){
			        $(this).addClass('animated fadeInDown');
			    }
		    });
		}
		
		

        // EVENTS ------------------------------------
        $(window).scroll(function() {
		  CheckFades();
		});
    };
 
}( jQuery ));