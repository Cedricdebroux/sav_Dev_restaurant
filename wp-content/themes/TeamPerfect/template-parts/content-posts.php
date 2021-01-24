
 <div> <!-- Fin dans le footer -->
   <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
      <div class="entry-content container">
         <div class="card mb-12 text-center">
             <div class="row no-gutters">
                <div class="col-md-12">
                   <div class="card-body m-0">
                    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
                    <h5 class="card-title m-0"> <?php the_title( '<h2><a class="text-dark" href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?></h5>
                    <p class="card-text m-0">  <?php the_excerpt(); ?></p>
                    <button type="button" class="recipeButton btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">READ MORE</a></button> 
                   </div>
               </div>
             </div>
        </div>
     </div>
  </article>
