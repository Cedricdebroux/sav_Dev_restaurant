<div> <!-- Fin dans le footer -->
 <?php global $wp_query; ?>

  <article class="recipeContent mb-5" id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <div class="entry-content container">
      <!-- NOTRE SUPER BOUCLE ICI -->
      <?php if ( $wp_query->$current_post %2==0 ){ ?> 
        <div class="card mb-12 text-center">
          <div class="row no-gutters">
            <div class="col-md-7">
              <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
            </div>
            <div class="col-md-5">
              <div class="card-body m-0">
                <p class="card-text m-0"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
                <p class="recipeTaxonomyArchive text-center text-black-50 m-0"><?php the_terms( $post->ID, 'recipe_types', ' ' , ' ' ); ?> </p>
                <h5 class="card-title m-0"> <?php the_title( '<h2><a class="text-dark m-0" href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
                <p class="card-text m-0"> <?php the_field('description');?></p>
                <button type="button" class="recipeButton btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">READ MORE</a></button> 
              </div>
            </div>
          </div>
        </div>
      <?php $wp_query->$current_post++; ?>

      <?php } else { ?>
        <div class="card mb-12 text-center">
          <div class="row no-gutters">
          <div class="col-md-5">
              <div class="card-body m-0">
                <p class="card-text m-0"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
                <p class="recipeTaxonomyArchive text-center text-black-50 m-0"><?php the_terms( $post->ID, 'recipe_types', ' ' , ' ' ); ?> </p>
                <h5 class="card-title m-0"> <?php the_title( '<h2><a class="text-dark m-0" href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
                <p class="card-text m-0"> <?php the_field('description');?></p>
                <button type="button" class="recipeButton btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">READ MORE</a></button> 
              </div>
            </div>
            <div class="col-md-7">
              <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
            </div>
          </div>
        </div>
      <?php $wp_query->$current_post++;

      }/*FIN DE IF*/ ?>

      <!-- FIN DE NOTRE SUPER BOUCLE ICI -->
    </div>
  </article>


