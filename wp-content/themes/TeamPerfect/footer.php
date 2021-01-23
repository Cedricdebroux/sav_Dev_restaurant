
  </div><!-- #content -->

<!-- CALL TO ACTION -->
  <div class="callToAction">
    <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div>
    <div class="row p-5">
      <div class="col-md-4 p-5">
        <h3 class="h1 p-2">Join Our Newsletter</h3>
      </div>
      <div class="col-md-8 d-flex justify-content-center align-items-center">
        <div class="row w-100 ml-5 justify-content-center">
          <input class="w-50" type="text" placeholder="Your Email Adress" class="">
          <button type="button" class="btn btn-lg btn-1 p-2">SUBSCRIBE</button>
        </div>
      </div>
    </div>
  </div>
<!-- END CALL TO ACTION -->
  <footer id="colophon" class="site-footer mt-5" role="contentinfo">
    <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div>
    <?php
      $args = [
        // Location pickable in Customizer
        'theme_location'  =>  'footer-menu',
        // Main wrapper around the ul of posts
        'container'       =>  'nav',
        'container_id'    =>  'footer-menu',
        // Add text before link text (outside a tag)
        'before'          =>  '<',
        'after'           =>  '>',
        // Depth of child nav items to show
        'depth'           =>  1,
        // Callback function if menu is not available
        'fallback_cb'     =>  false,
      ];
      wp_nav_menu( $args );
    ?>
    <!---- AREA ONE ----->
    <div class="mt-5">
      <div class="footer row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="h2"><?php the_field('footer_title_description', 'options');?></div>
        <p><?php the_field('footer_description', 'options');?></p>
          <div class="d-flex flex-row bd-highlight socialNetwork">
            <a href="<?php the_field('twitter_link', 'options');?>" target="_blank"> 
              <div class="mr-2 network" id="twitter">
                <img  src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/twitter.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('linkedin_link', 'options');?>" target="_blank">
              <div class="mr-2 network" id="linkedin" >
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/linkedin.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('facebook_link', 'options');?>" target="_blank">
              <div class="mr-2 network" id="facebook">
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/facebook.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('instagram_link', 'options');?>" target="_blank">
              <div class="mr-2 network" id="instagram" >
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/instagram.svg" alt="">
              </div>
            </a>
          </div>
        </div>

        <!---- AREA TWO ----->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
          <div class="h5">Opening Hours</div>
          <div class="row openingHours">
            <div class="gridHr">
              <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
              <div class="dayOpen">Mondays</div> 
              <div class="middle"><hr></div>
              <div class="rightSide"><?php the_field('monday', 'options');?></div>
          </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Tue - Fri</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('tue-fri', 'options');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Sat - Sun</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('sat-sun', 'options');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Public Holidays</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('public_holidays', 'options');?></div>
              </div>
            </div>
        </div>

        <!---- AREA THREE ----->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
          <div class="d-flex align-items-center">
            <div class="infoUser">
              <div class="h5 pb-2">Contact Us</div>
              <div class="contactUs mt-20px">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/call-10-1.svg" alt=""></div>
                <div><p class="infoItem"><?php the_field('phone_number', 'options');?></p></div>
              </div>
              <div class="contactUs">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/place-14-1.svg" alt=""></div>
                <div><p class="infoItem"><?php the_field('adress_street', 'options' ) . ", " . the_field('adress_number', 'options');?></p></div>
              </div>
              <div class="contactUs">
                <div></div>
                <div><p class="infoItem"><?php the_field('adress_city', 'options');?></p></div>
              </div>
              <div class="contactUs">
                <div></div>              
                <div><p class="infoItem"><?php the_field('adress_country', 'options');?></p></div>
              </div>
              <div class="contactUs">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/mail-2-1.svg" alt=""></div>
                <div><p class="infoItem email"><a href="mailto:example@gmail.com"><?php the_field('email', 'options');?></a> </p></div>  
              </div>
            </div>
          </div>
        </div>
      <!---- AREA FOUR ----->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
          <a href="<?php the_field('instagram_link', 'options');?>" alt=""><div class="h5 pb-2">Instagram</div></a>
          <div class="instaPictures">
            <img class="insta" src="<?php the_field('image_1', 'options');?>" alt="">
            <img class="insta" src="<?php the_field('image_2', 'options');?>" alt="">
            <img class="insta" src="<?php the_field('image_3', 'options');?>" alt="">
            <img class="insta" src="<?php the_field('image_4', 'options');?>" alt="">
            <img class="insta" src="<?php the_field('image_5', 'options');?>" alt="">
            <img class="insta" src="<?php the_field('image_6', 'options');?>" alt="">
          </div>
        </div>


      </div>
    </div>
    <hr class="hrFooter" style="background-color:white; border-top:1px solid grey">

    <div class="d-flex justify-content-center">
      <div class="text-center p-3">
        <p class="text-muted">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
        <a href="<?php echo esc_url( __( '#', 'TPrestaurant' ) ); ?>">
        <?php printf( esc_html__( 'Proudly powered by %s', 'TPrestaurant' ), 'Team Perfect' ); ?>
        </a>
        </p>
      </div>
    </div>
        

    
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


