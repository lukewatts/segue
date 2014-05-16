jQuery(document).ready(function($) {   

  /* =============================
   * Animate header on page scroll
   * ============================= */
  $(document).scroll( function() {

    // Variables
    var value = $(this).scrollTop();  
    var navs = ('.navbar .navbar-inner');

    if($(window).width() > 976){
      
      if ( value > 60 ){            
        $(navs).stop().animate({height:'40px'}, 200);
      }
      else{
        $(navs).stop().animate({height:'120px'}, 200);
      }
    
    } // endif window.width

  }); // end document.scroll

}); // end document.ready


