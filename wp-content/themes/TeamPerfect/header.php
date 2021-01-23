<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script defer src="assets/js/footer.js"></script>
  </head>
  <body <?php body_class(); ?>>

    <div id="page">

      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to content', 'TPrestaurant' ); ?>
      </a>

      <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ) ;?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
          </p>
          <p class="site-description" >
            <?php bloginfo( 'description' ); ?>
          </p>
        </div>

       <!-- Menu header -->
	
    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse ml-4',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'mx-auto nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </div>
    </nav>

      </header>

      <div id="content" class="site-content">
