/**
 * Scroll for the theme electronicmind
 *
 */

 ( function($) {
   $(document).ready(function(){

     $(window).scroll(function(e){
       parallax();
     });

     function parallax(){
       var scrolled = $(window).scrollTop();
       
     }
   });
 } )(jQuery);
