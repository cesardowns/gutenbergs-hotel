<?php

add_action( 'wp_head', 'gh_custom_header_styles' );
function gh_custom_header_styles(){
?>

  <style type="text/css">

    .top-bar{
      background-color: <?php echo get_theme_mod( 'gh_set_top_bar_color' ); ?>
    }

    .main-nav a,
    .nav-panel a,
    #left-nav a{
      color: <?php echo get_theme_mod( 'gh_set_header_text_color' ); ?>
    }

    .site-header,
    .nav-panel{
      background-color: <?php echo get_theme_mod( 'gh_set_header_bg_color' ); ?>
    }

    .site-header nav ul li a{
      font-size: <?php echo get_theme_mod( 'gh_set_header_font_size' ) . 'px'; ?>
    }

    .hamburger-inner,
    .hamburger-inner::before,
    .hamburger-inner::after{
      background-color: <?php echo get_theme_mod( 'gh_set_header_text_color' ); ?>
    }

    <?php if(get_theme_mod( 'gh_set_header_scroll' ) == 1): ?>

       #masthead, .top-bar{
         position: fixed;
         z-index: 100;
       }

       #masthead{
         top: 28px;
       }

     <?php pushMain(); ?>

    <?php endif; ?>

    <?php if(get_theme_mod( 'gh_set_header_transparency' ) == 1): ?>

     #masthead{
       z-index: 100;
       background-color: transparent;
     }

     <?php pushDownHeader(); ?>

    <?php endif; ?>

  </style>

<?php
}
?>


<?php if(get_theme_mod( 'gh_set_header_resize' ) == 1): ?>

  <script>

  /*
   * Make header smaller on Scroll
   */
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {

    let headerContainer = document.querySelector('#masthead .container');

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      headerContainer.style.padding = "10px 0";
      headerContainer.style.transition = ".3s ease all";
    } else {
      headerContainer.style.padding = "20px 0";
    }
  }

  </script>

<?php endif; ?>


<?php
function pushMain(){
  echo 'main{ padding-top: 88px; }';
}
