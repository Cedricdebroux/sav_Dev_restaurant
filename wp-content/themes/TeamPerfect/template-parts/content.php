<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    <?php if( has_post_thumbnail() ): ?>

<?php

  $attr = [
    'class' => 'featured',
    'title' => get_the_title()
  ];
  the_post_thumbnail( 'full', $attr );

?>

<?php endif; ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <div class="byline">
      <?php esc_html_e( 'Author:' ); ?> <?php the_author(); ?>
    </div>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>

  <?php if( comments_open() ) : ?>

    <?php comments_template(); ?>

  <?php endif; ?>




</article>
