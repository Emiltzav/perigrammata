<!-- Search-->	

//jQuery(document).ready(function() {


jQuery(function () {
	'use strict';   


   jQuery('#search_bt').on('click', function(event) {
        event.preventDefault();
		
	jQuery('#search').addClass('open');
        jQuery('#search > form > input[type="search"]').focus();
    });
    jQuery('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('open');
        }
    });


    jQuery('#search_bt_en').on('click', function(event) {
        event.preventDefault();
		
	jQuery('#search_en').addClass('open');
        jQuery('#search_en > form > input[type="search"]').focus();
    });
    jQuery('#search_en, #search_en button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('open');
        }
    });


});