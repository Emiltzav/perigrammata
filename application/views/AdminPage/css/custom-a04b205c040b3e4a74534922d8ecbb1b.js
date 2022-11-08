/* Write here your custom javascript codes */

jQuery(document).ready(function() {

   App.init();
   // OwlCarousel.initOwlCarousel();
   // StyleSwitcher.initStyleSwitcher();
   //ParallaxSlider.initParallaxSlider();
    
  
   // if (jQuery('#top_comments').is(':empty')) 
   if ( jQuery('#top_message').text().length == 0 ) { 
     
      $(".purchase").css("display", "none");
  
   }
   else 
   {
    
      jQuery('.purchase').css({"border-bottom-color": "#eee", "border-bottom-width":"1px","border-bottom-style":"solid"});
       
   } 
  
  
  
  
  jQuery('.active').last().addClass('last_active');
  

    //'use strict';
    //jQuery('#layerslider').layerSlider({
    //    autoStart: true,
    //    responsive: true,
    //    responsiveUnder: 900,
    //    layersContainer: 1170,
    //    skinsPath: 'fileadmin/templates/enveng/layerslider/skins/'
    //    // Please make sure that you didn't forget to add a comma to the line endings
    //    // except the last line!
    //});
    
  
});