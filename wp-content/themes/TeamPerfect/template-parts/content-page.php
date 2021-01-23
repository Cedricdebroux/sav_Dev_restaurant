<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">
    <div class="themenu">
    <?php the_content(); ?>
    <div class="h2 mt-3 d-flex justify-content-center theMenu_subtitle">
        <?php the_field('subtitle'); ?>
    </div>
    <div class="h1 mt-3 d-flex justify-content-center theMenu_title">
        <?php the_field('title'); ?>
    </div>

    <p class="h2 mt-3 d-flex justify-content-center theMenu_category">
        <?php 
          if(have_rows('category1')) :
            while(have_rows('category1')) : the_row();
              the_sub_field('category_title');
            endwhile;  
          endif;  
        ?>
    </p>
    <div class="menu1">
    <?php 
      if(have_rows('menu1')) :
        while(have_rows('menu1')) : the_row(); 
          $sub_value = get_sub_field('chef_selection');
          if( $sub_value == 1) :?>
            <div class="chefBox">CHEF SELECTION</div>
            <div class="chefSelection">
              <div class="gridMenu">
                <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
                <div><hr class="hr1 mr-2"></div>
                <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
              </div>
              <div class="mealDescription">
                <?php the_sub_field('description_of_the_meal');?>
              </div>
            </div>

       <?php 
          else : ?>
          <div class="gridMenu">
            <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
            <div><hr class="hr1 mr-2 "></div>
            <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
          </div>
          <div class="mealDescription">
            <?php the_sub_field('description_of_the_meal');?>
          </div>
        
       <?php endif;
       endwhile;  
      endif;  
    ?>
    </div>
    <p class="h2 mt-3 d-flex justify-content-center theMenu_category">
    <?php 
      if(have_rows('category2')) :
        while(have_rows('category2')) : the_row();
          the_sub_field('category_title2');
        endwhile;  
      endif;  
    ?>
    </p>
    <div class="menu2">
<?php 
  if(have_rows('menu2')) :
    while(have_rows('menu2')) : the_row(); 
      $sub_value = get_sub_field('chef_selection');
      if( $sub_value == 1) :?>
        <div class="chefBox">CHEF SELECTION</div>
        <div class="chefSelection">
          <div class="gridMenu">
            <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
            <div><hr class="hr1 mr-2"></div>
            <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
          </div>
          <div class="mealDescription">
            <?php the_sub_field('description_of_the_meal');?>
          </div>
        </div>
    <?php 
      else : ?>
      <div class="gridMenu">
        <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
        <div><hr class="hr1 mr-2 "></div>
        <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
      </div>
      <div class="mealDescription">
        <?php the_sub_field('description_of_the_meal');?>
      </div>
    
    <?php endif;
    endwhile; 
  endif;  
    ?>
    </div>
    <p class="h2 mt-3 d-flex justify-content-center theMenu_category">
      <?php 
        if(have_rows('category3')) :
          while(have_rows('category3')) : the_row();
            the_sub_field('category_title3');
          endwhile;  
        endif;  
      ?>
    </p>
    <div class="menu3">
      <?php 
        if(have_rows('menu3')) :
          while(have_rows('menu3')) : the_row(); 
            $sub_value = get_sub_field('chef_selection'); 
            if( $sub_value == 1) :?>
              <div class="chefBox">CHEF SELECTION</div>
              <div class="chefSelection">
                <div class="gridMenu">
                  <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
                  <div><hr class="hr1 mr-2"></div>
                  <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
                </div>
                <div class="mealDescription">
                  <?php the_sub_field('description_of_the_meal');?>
                </div>
              </div>

                <?php 
            else : ?>
            <div class="gridMenu">
              <div><p class="menuTitle"><?php the_sub_field('name_of_the_meal');?></p></div>
              <div><hr class="hr1 mr-2 "></div>
              <div class="menuPrice"><?php the_sub_field('price_of_the_meal');?>€ </div>
            </div>
            <div class="mealDescription">
              <?php the_sub_field('description_of_the_meal');?>
            </div>
              
          <?php endif;
          endwhile;  
        endif;  
      ?>
    </div>
</div>
  </div>
</article>
