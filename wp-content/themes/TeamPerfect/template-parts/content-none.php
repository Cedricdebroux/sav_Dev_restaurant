<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <h1><?php esc_html_e( '404 - Page Not Found', 'TPrestaurant' ); ?></h1>

  </header>

  <div class="entry-content">

  <div class="row mx-auto">
            <div class="my-4 px-5 py-5 text-warning">
<h2><i class="fa fa-exclamation-triangle ml-2"></i><?php esc_html_e( '404 Error', 'TPrestaurant' ); ?></h2>

<p><?php esc_html_e( 'Sorry, content not found.', 'TPrestaurant' ); ?></p>
<p><?php echo get_search_form(); ?></p></div></div>

    

  </div>

</article>
