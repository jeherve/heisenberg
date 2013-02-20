jQuery(document).ready(function($) {
	// Initiate Stellar
	$.stellar({
		horizontalScrolling: false,
		//verticalOffset: 40
	});
	// Hide the Site title when you scroll down
	jQuery(window).scroll(function(){
          var scrollTop = jQuery(window).scrollTop();
          if(scrollTop != 0)
              jQuery('#masthead').stop().animate({
              		'opacity':'0'
              	},
              	200,
              	function() {
              		$(this).css('visibility', 'hidden');
              	}
              );
          else
              jQuery('#masthead').stop().animate({
              		'opacity':'1'
              	},
              	200,
              	function() {
              		$(this).css('visibility', 'visible');
              	}
              );
      });
   
      jQuery('.title').hover(
          function (e) {
              var scrollTop = jQuery(window).scrollTop();
              if(scrollTop != 0){
                  jQuery('#masthead').stop().animate({'opacity':'1'},200);
              }
          },
          function (e) {
              var scrollTop = jQuery(window).scrollTop();
              if(scrollTop != 0){
                  jQuery('#masthead').stop().animate({'opacity':'0.2'},200);
              }
          }
      );
});