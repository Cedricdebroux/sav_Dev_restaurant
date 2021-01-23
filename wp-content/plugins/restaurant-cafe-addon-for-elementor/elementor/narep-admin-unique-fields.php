<?php

// Addon Menu (Pro) - Checkbox
if ( ! function_exists( 'nbeds_addon_menu_render' ) ) {
  function nbeds_addon_menu_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_addon_menu]' id='nbeds_addon_menu-id' <?php checked( isset($options['nbeds_addon_menu']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Benefits (Pro) - Checkbox
if ( ! function_exists( 'nbeds_benefits_render' ) ) {
  function nbeds_benefits_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_benefits]' id='nbeds_benefits-id' <?php checked( isset($options['nbeds_benefits']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Branches - Checkbox
if ( ! function_exists( 'nbeds_branches_render' ) ) {
  function nbeds_branches_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_branches]' id='nbeds_branches-id' <?php checked( isset($options['nbeds_branches']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Branch Slider (Pro) - Checkbox
if ( ! function_exists( 'nbeds_branch_slider_render' ) ) {
  function nbeds_branch_slider_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_branch_slider]' id='nbeds_branch_slider-id' <?php checked( isset($options['nbeds_branch_slider']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Chefs Recipe - Checkbox
if ( ! function_exists( 'nbeds_chefs_recipe_render' ) ) {
  function nbeds_chefs_recipe_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_chefs_recipe]' id='nbeds_chefs_recipe-id' <?php checked( isset($options['nbeds_chefs_recipe']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Food Menu - Checkbox
if ( ! function_exists( 'nbeds_food_menu_render' ) ) {
  function nbeds_food_menu_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_food_menu]' id='nbeds_food_menu-id' <?php checked( isset($options['nbeds_food_menu']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Food Tab - Checkbox
if ( ! function_exists( 'nbeds_food_tab_render' ) ) {
  function nbeds_food_tab_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_food_tab]' id='nbeds_food_tab-id' <?php checked( isset($options['nbeds_food_tab']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Food Item (Pro) - Checkbox
if ( ! function_exists( 'nbeds_food_item_render' ) ) {
  function nbeds_food_item_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_food_item]' id='nbeds_food_item-id' <?php checked( isset($options['nbeds_food_item']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Gift Card (Pro) - Checkbox
if ( ! function_exists( 'nbeds_gift_card_render' ) ) {
  function nbeds_gift_card_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_gift_card]' id='nbeds_gift_card-id' <?php checked( isset($options['nbeds_gift_card']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Ingredients - Checkbox
if ( ! function_exists( 'nbeds_ingredients_render' ) ) {
  function nbeds_ingredients_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_ingredients]' id='nbeds_ingredients-id' <?php checked( isset($options['nbeds_ingredients']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Image Parallax (Pro) - Checkbox
if ( ! function_exists( 'nbeds_image_parallax_render' ) ) {
  function nbeds_image_parallax_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_image_parallax]' id='nbeds_image_parallax-id' <?php checked( isset($options['nbeds_image_parallax']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Layered Image (Pro) - Checkbox
if ( ! function_exists( 'nbeds_layered_image_render' ) ) {
  function nbeds_layered_image_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_layered_image]' id='nbeds_layered_image-id' <?php checked( isset($options['nbeds_layered_image']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Offers - Checkbox
if ( ! function_exists( 'nbeds_offers_render' ) ) {
  function nbeds_offers_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_offers]' id='nbeds_offers-id' <?php checked( isset($options['nbeds_offers']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Open Table (*Pro) - Checkbox
if ( ! function_exists( 'nbeds_open_table_render' ) ) {
  function nbeds_open_table_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_open_table]' id='nbeds_open_table-id' <?php checked( isset($options['nbeds_open_table']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Particular Recipe (Pro) - Checkbox
if ( ! function_exists( 'nbeds_particular_recipe_render' ) ) {
  function nbeds_particular_recipe_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_particular_recipe]' id='nbeds_particular_recipe-id' <?php checked( isset($options['nbeds_particular_recipe']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Pricing - Checkbox
if ( ! function_exists( 'nbeds_pricing_render' ) ) {
  function nbeds_pricing_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_pricing]' id='nbeds_pricing-id' <?php checked( isset($options['nbeds_pricing']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Pricing Content (Pro) - Checkbox
if ( ! function_exists( 'nbeds_pricing_content_render' ) ) {
  function nbeds_pricing_content_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_pricing_content]' id='nbeds_pricing_content-id' <?php checked( isset($options['nbeds_pricing_content']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Pricing Tab (Pro) - Checkbox
if ( ! function_exists( 'nbeds_pricing_tab_render' ) ) {
  function nbeds_pricing_tab_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_pricing_tab]' id='nbeds_pricing_tab-id' <?php checked( isset($options['nbeds_pricing_tab']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Restaurants - Checkbox
if ( ! function_exists( 'nbeds_restaurants_render' ) ) {
  function nbeds_restaurants_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_restaurants]' id='nbeds_restaurants-id' <?php checked( isset($options['nbeds_restaurants']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Rooms (*Pro) - Checkbox
if ( ! function_exists( 'nbeds_rooms_render' ) ) {
  function nbeds_rooms_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_rooms]' id='nbeds_rooms-id' <?php checked( isset($options['nbeds_rooms']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Specialties - Checkbox
if ( ! function_exists( 'nbeds_specialties_render' ) ) {
  function nbeds_specialties_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_specialties]' id='nbeds_specialties-id' <?php checked( isset($options['nbeds_specialties']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Stats - Checkbox
if ( ! function_exists( 'nbeds_stats_render' ) ) {
  function nbeds_stats_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_stats]' id='nbeds_stats-id' <?php checked( isset($options['nbeds_stats']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Tab (Pro) - Checkbox
if ( ! function_exists( 'nbeds_tab_render' ) ) {
  function nbeds_tab_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_tab]' id='nbeds_tab-id' <?php checked( isset($options['nbeds_tab']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Valuable Box - Checkbox
if ( ! function_exists( 'nbeds_valuable_box_render' ) ) {
  function nbeds_valuable_box_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_valuable_box]' id='nbeds_valuable_box-id' <?php checked( isset($options['nbeds_valuable_box']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Working Hours - Checkbox
if ( ! function_exists( 'nbeds_working_hours_render' ) ) {
  function nbeds_working_hours_render() {
    $options = get_option( 'rcafe_uw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='rcafe_uw_settings[nbeds_working_hours]' id='nbeds_working_hours-id' <?php checked( isset($options['nbeds_working_hours']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}
