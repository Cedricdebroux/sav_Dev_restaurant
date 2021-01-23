<?php

// About Me - Checkbox
if ( ! function_exists( 'nbeds_about_me_render' ) ) {
  function nbeds_about_me_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_about_me]' id='nbeds_about_me-id' <?php checked( isset($options['nbeds_about_me']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// About Us - Checkbox
if ( ! function_exists( 'nbeds_about_us_render' ) ) {
  function nbeds_about_us_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_about_us]' id='nbeds_about_us-id' <?php checked( isset($options['nbeds_about_us']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Blog - Checkbox
if ( ! function_exists( 'nbeds_blog_render' ) ) {
  function nbeds_blog_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_blog]' id='nbeds_blog-id' <?php checked( isset($options['nbeds_blog']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Restaurant Button - Checkbox
if ( ! function_exists( 'nbeds_restaurant_button_render' ) ) {
  function nbeds_restaurant_button_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_restaurant_button]' id='nbeds_restaurant_button-id' <?php checked( isset($options['nbeds_restaurant_button']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Chart - Checkbox
if ( ! function_exists( 'nbeds_chart_render' ) ) {
  function nbeds_chart_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_chart]' id='nbeds_chart-id' <?php checked( isset($options['nbeds_chart']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Contact - Checkbox
if ( ! function_exists( 'nbeds_contact_render' ) ) {
  function nbeds_contact_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_contact]' id='nbeds_contact-id' <?php checked( isset($options['nbeds_contact']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Gallery - Checkbox
if ( ! function_exists( 'nbeds_gallery_render' ) ) {
  function nbeds_gallery_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_gallery]' id='nbeds_gallery-id' <?php checked( isset($options['nbeds_gallery']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Get Apps - Checkbox
if ( ! function_exists( 'nbeds_get_apps_render' ) ) {
  function nbeds_get_apps_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_get_apps]' id='nbeds_get_apps-id' <?php checked( isset($options['nbeds_get_apps']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// History - Checkbox
if ( ! function_exists( 'nbeds_history_render' ) ) {
  function nbeds_history_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_history]' id='nbeds_history-id' <?php checked( isset($options['nbeds_history']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Image Compare - Checkbox
if ( ! function_exists( 'nbeds_image_compare_render' ) ) {
  function nbeds_image_compare_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_image_compare]' id='nbeds_image_compare-id' <?php checked( isset($options['nbeds_image_compare']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Process - Checkbox
if ( ! function_exists( 'nbeds_process_render' ) ) {
  function nbeds_process_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_process]' id='nbeds_process-id' <?php checked( isset($options['nbeds_process']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Section Title - Checkbox
if ( ! function_exists( 'nbeds_section_title_render' ) ) {
  function nbeds_section_title_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_section_title]' id='nbeds_section_title-id' <?php checked( isset($options['nbeds_section_title']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Separator - Checkbox
if ( ! function_exists( 'nbeds_separator_render' ) ) {
  function nbeds_separator_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_separator]' id='nbeds_separator-id' <?php checked( isset($options['nbeds_separator']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Services - Checkbox
if ( ! function_exists( 'nbeds_services_render' ) ) {
  function nbeds_services_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_services]' id='nbeds_services-id' <?php checked( isset($options['nbeds_services']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Slider - Checkbox
if ( ! function_exists( 'nbeds_slider_render' ) ) {
  function nbeds_slider_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_slider]' id='nbeds_slider-id' <?php checked( isset($options['nbeds_slider']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Subscribe Contact - Checkbox
if ( ! function_exists( 'nbeds_subscribe_contact_render' ) ) {
  function nbeds_subscribe_contact_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_subscribe_contact]' id='nbeds_subscribe_contact-id' <?php checked( isset($options['nbeds_subscribe_contact']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Table - Checkbox
if ( ! function_exists( 'nbeds_table_render' ) ) {
  function nbeds_table_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_table]' id='nbeds_table-id' <?php checked( isset($options['nbeds_table']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Team Single - Checkbox
if ( ! function_exists( 'nbeds_team_single_render' ) ) {
  function nbeds_team_single_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_team_single]' id='nbeds_team_single-id' <?php checked( isset($options['nbeds_team_single']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Team - Checkbox
if ( ! function_exists( 'nbeds_team_render' ) ) {
  function nbeds_team_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_team]' id='nbeds_team-id' <?php checked( isset($options['nbeds_team']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Testimonials - Checkbox
if ( ! function_exists( 'nbeds_testimonials_render' ) ) {
  function nbeds_testimonials_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_testimonials]' id='nbeds_testimonials-id' <?php checked( isset($options['nbeds_testimonials']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Typewriter - Checkbox
if ( ! function_exists( 'nbeds_typewriter_render' ) ) {
  function nbeds_typewriter_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_typewriter]' id='nbeds_typewriter-id' <?php checked( isset($options['nbeds_typewriter']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Video - Checkbox
if ( ! function_exists( 'nbeds_video_render' ) ) {
  function nbeds_video_render() {
    $options = get_option( 'rcafe_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_bw_settings[nbeds_video]' id='nbeds_video-id' <?php checked( isset($options['nbeds_video']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}