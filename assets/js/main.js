jQuery(document).ready(function($) {   

//  /*=============================
//  Easy-peasy jQuery AJAX
//  =============================*/

//  $('.ajax-link').click(function() {
//    var url=$(this).attr('href');     
// 	  $('.ctb').load(url);	
// 	  return false;	        
// 	}); //end click   

    /*=============================
    Animate header on page scroll
    =============================*/
	$(document).scroll( function() {

	    var value = $(this).scrollTop();  
	    var navs = ('.navbar .navbar-inner');
	    if($(window).width() > 976){
		    if ( value > 60 ){	          
		        $(navs).stop().animate({height:'40px'}, 200);
		    }
		    else{
		        $(navs).stop().animate({height:'120px'}, 200);
		    }
		}
	});





}); // end ready


