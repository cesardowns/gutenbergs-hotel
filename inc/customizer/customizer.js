( function($){


  /*
   * Header Background Color live Preview
   */
  wp.customize('gh_set_header_bg_color', function(val){
    val.bind(function(newval){
      $('.site-header').css('background-color', newval);
    });
  });

  /*
   * Header Text Size live Preview
   */
  wp.customize('gh_set_header_font_size', function(val){
    val.bind(function(newval){
      $('.site-header nav a').css('font-size', newval);
    });
  });


  /*
   * Header Text Color live Preview
   */
  wp.customize('gh_set_header_text_color', function(val){
    val.bind(function(newval){
      $('.site-header nav ul li a').css('color', newval);
    });
  });


  /*
   * Top Bar Background Color live Preview
   */
  wp.customize('gh_set_top_bar_color', function(val){
    val.bind(function(newval){
      $('.top-bar').css('background-color', newval);
    });
  });


  /*
   * Top Bar Text Color live Preview
   */
  wp.customize('gh_set_top_bar_link_color', function(val){
    val.bind(function(newval){
      $('.top-bar ul li a').css('color', newval);
    });
  });



})(jQuery);
