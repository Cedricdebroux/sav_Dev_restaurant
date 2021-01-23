<?php get_header('splash'); ?>
  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
          <header class="entry-header recipeSinglePageBigHeader">
            <div class="recipeSinglePageHeader"> <!-- Back, date, taxonomy V -->
              <div class="recipeSinglePageHeaderList pt-3">
                <a class="singleRecipeA" href="https://teamperfect.bout-de-creations.com/recipes-post/"><img class="recipeSinglePageHeaderArrow" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/left-arrow.svg" alt=""> <p>Retour</p></a> 
                <p class="recipeSingleDate"><?php echo get_the_date( 'j F, Y' ); ?></p>
              
                      <!--  taxonomy -->
                      <p class="termsRecipe d-flex justify-content-end"><?php the_terms( $post->ID, 'recipe_types', ' ' , ' ' ); ?> </p>           
              </div>
              <p class="recipeSinglePageTitleSpace"><?php the_title( '<h1>', '</h1>' ); ?></p>

              <!-- Description V-->
              <p class="recipeSinglePageSubTitleSpace"><?php the_field('description') ; ?></p>
              <div class="recipeSinglePageThumbnail d-flex justify-content-center"><?php the_post_thumbnail( 'medium-large' ); ?></div>  <!-- Image of the recipe V -->
            </div>
            <div class="recipeSinglePAgeHeaderCut"><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/hachures-blanches.png" alt=""></div>
          </header>
          <div class="entry-content">
            <div class="recipeSinglePageContent">
              <?php the_content(); ?> <!-- Content of the page "Recipe" V -->
              <div class="recipeSingleIngredients">
                <h2>Ingredients</h2>
                <!-- ingredients -->
                <?php the_field('ingretients') ; ?>
                <ul>
                <?php if(have_rows('ingredients')) :
                        while(have_rows('ingredients')) : the_row(); ?>
                          <li><?php the_sub_field('ingredient')?> : <?php the_sub_field('quantity')?> <?php the_sub_field('unit_of_measure')?></li>
                <?php   endwhile;
                      endif;
                ?>
                </ul>
              </div>
              <!-- serve and preparation time -->
              <p>For <?php the_field('serve') ; ?> people - Preparation <?php the_field('preparation_time') ; ?> min</p>
              <!-- intructions (steps) --> <!-- Aside social network -->
              <div class="recipeSingleInstructions">
                <h2>Instructions</h2>
                <ol>
                <?php if(have_rows('instructions')) :
                        while(have_rows('instructions')) : the_row(); ?>
                          <li><?php the_sub_field('steps') ; ?></li>
                <?php   endwhile;
                      endif;
                ?>
                </ol>
              </div>

          
              <!-- Latest blog -->
            
              <!-- FIN Content of the page "Recipe" -->
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>
  </div>
<?php get_footer(); ?>
