<?php
if ( ! function_exists( 'rcafe_bw_settings_init' ) ) {
  function rcafe_bw_settings_init() {

    register_setting( 'narepBasicWidgets', 'rcafe_bw_settings' );

    // Card Title - Basic Widgets
    add_settings_section(
      'rcafe_narepBasicWidgets_section',
      __( 'Basic Widgets', 'restaurant-cafe-addon-for-elementor' ),
      '',
      'narepBasicWidgets'
    );

    $narep_basic_widgets['about_me'] = __( 'About Me', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['about_us'] = __( 'About Us', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['blog'] = __( 'Blog', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['restaurant_button'] = __( 'Restaurant Button', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['chart'] = __( 'Chart', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['contact'] = __( 'Contact', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['gallery'] = __( 'Gallery', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['get_apps'] = __( 'Get Apps', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['history'] = __( 'History', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['image_compare'] = __( 'Image Compare', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['process'] = __( 'Process', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['section_title'] = __( 'Section Title', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['separator'] = __( 'Separator', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['services'] = __( 'Services', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['slider'] = __( 'Slider', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['subscribe_contact'] = __( 'Subscribe / Contact', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['table'] = __( 'Table', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['team_single'] = __( 'Team Single', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['team'] = __( 'Team', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['testimonials'] = __( 'Testimonials', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['typewriter'] = __( 'Typewriter', 'restaurant-cafe-addon-for-elementor' );
    $narep_basic_widgets['video'] = __( 'Video', 'restaurant-cafe-addon-for-elementor' );
    foreach ($narep_basic_widgets as $key => $value) {
      // Label
      add_settings_field(
        'nbeds_'. $key,
        $value,
        'nbeds_'. $key .'_render',
        'narepBasicWidgets',
        'rcafe_narepBasicWidgets_section',
        array( 'label_for' => 'nbeds_'. $key .'-id' )
      );
    }

  }
}

if ( ! function_exists( 'rcafe_uw_settings_init' ) ) {
  function rcafe_uw_settings_init() {

    register_setting( 'narepUniqueWidgets', 'rcafe_uw_settings' );

    // Card Title - Unique Widgets
    add_settings_section(
      'rcafe_narepUniqueWidgets_section',
      __( 'Unique Widgets', 'restaurant-cafe-addon-for-elementor' ),
      '',
      'narepUniqueWidgets'
    );

    $narep_unique_widgets['addon_menu'] = __( 'Addon Menu (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['benefits'] = __( 'Benefits (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['branches'] = __( 'Branches', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['branch_slider'] = __( 'Branch Slider (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['chefs_recipe'] = __( 'Chefs Recipe', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['food_menu'] = __( 'Food Menu', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['food_tab'] = __( 'Food Tab', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['food_item'] = __( 'Food Item (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['gift_card'] = __( 'Gift Card (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['ingredients'] = __( 'Ingredients', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['image_parallax'] = __( 'Image Parallax (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['layered_image'] = __( 'Layered Image (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['offers'] = __( 'Offers', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['open_table'] = __( 'Open Table (*Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['particular_recipe'] = __( 'Particular Recipe (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['pricing'] = __( 'Pricing', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['pricing_content'] = __( 'Pricing Content (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['pricing_tab'] = __( 'Pricing Tab (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['restaurants'] = __( 'Restaurants', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['rooms'] = __( 'Rooms (*Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['specialties'] = __( 'Specialties', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['stats'] = __( 'Stats', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['tab'] = __( 'Tab (Pro)', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['valuable_box'] = __( 'Valuable Box', 'restaurant-cafe-addon-for-elementor' );
    $narep_unique_widgets['working_hours'] = __( 'Working Hours', 'restaurant-cafe-addon-for-elementor' );
    foreach ($narep_unique_widgets as $key => $value) {
      // Label
      add_settings_field(
        'nbeds_'. $key,
        $value,
        'nbeds_'. $key .'_render',
        'narepUniqueWidgets',
        'rcafe_narepUniqueWidgets_section',
        array( 'label_for' => 'nbeds_'. $key .'-id' )
      );
    }

  }
}

// Output on Admin Page
if ( ! function_exists( 'narep_admin_sub_page' ) ) {
  function narep_admin_sub_page() { ?>
    <h2 class="title">Enable & Disable - Restaurant Elementor Widgets</h2>
    <div class="card narep-fields-card narep-fields-basic">
      <form action='options.php' method='post'>
        <?php
        settings_fields( 'narepBasicWidgets' );
        do_settings_sections( 'narepBasicWidgets' );
        submit_button(__( 'Save Basic Widgets Settings', 'restaurant-cafe-addon-for-elementor' ), 'basic-submit-class');
        ?>
      </form>
    </div><div class="card narep-fields-card narep-fields-unique">
      <form action='options.php' method='post'>
        <?php
        settings_fields( 'narepUniqueWidgets' );
        do_settings_sections( 'narepUniqueWidgets' );
        submit_button(__( 'Save Unique Widgets Settings', 'restaurant-cafe-addon-for-elementor' ), 'unique-submit-class');
        ?>
      </form>
    </div>
    <?php
  }
}