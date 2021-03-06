<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function acfef_validate_form( $args ) {
		
    // defaults
    // Todo: Allow message and button text to be generated by CPT settings.
    $args = wp_parse_args( $args, array(
        'id'					=> 'acf-form',
        'parent_form'			=> '',
        'post_id'				=> false,
        'new_post'				=> false,
        'field_groups'			=> false,
        'fields'				=> false,
        'post_title'			=> false,
        'post_content'			=> false,
        'form'					=> true,
        'form_attributes'		=> array(),
        'return'				=> add_query_arg( 'updated', 'true', acf_get_current_url() ),
        'html_before_fields'	=> '',
        'hidden_fields'         => [],
        'html_after_fields'		=> '',
        'submit_value'			=> __("Update", 'acf'),
        'update_message'		=> __("Post updated", 'acf'),
        'label_placement'		=> 'top',
        'instruction_placement'	=> 'label',
        'field_el'				=> 'div',
        'uploader'				=> 'wp',
        'honeypot'				=> true,
        'show_update_message'   => true,
        'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>', 
        'html_submit_button'	=> '<div class="acfef-submit-buttons"><input type="submit" class="acfef-submit-button acf-button button button-primary" value="%s" /><span class="acf-spinner"></span></div>',
        'html_submit_spinner'	=> '<span class="acf-spinner"></span>', 
        'kses'					=> true
    ));
    
    $args['form_attributes'] = wp_parse_args( $args['form_attributes'], array(
        'id'					=> $args['id'],
        'class'					=> 'acfef-form',
        'action'				=> '',
        'method'				=> 'post',
        'autocomplete'          => 'disableacf',
        'novalidate'            => 'novalidate',
    ));
        
    // filter post_id
    $args['post_id'] = acf_get_valid_post_id( $args['post_id'] );   
    
    // new post?
    if( $args['post_id'] === 'new_post' ) {
        
        $args['new_post'] = wp_parse_args( $args['new_post'], array(
            'post_type' 	=> 'post',
            'post_status'	=> 'draft',
        ));
        
    }    
    
    // filter
    $args = apply_filters('acf/validate_form', $args);    
    
    // return
    return $args;
    
}

function acfef_render_form( $args = array() ) {
    acf_enqueue_scripts();
    
    $args = acfef_validate_form( $args );

     /* if( isset( $args[ 'step_index' ] ) ){
        $args = array_merge( $args, $args[ 'steps' ][ $args[ 'step_index' ] ] );
    }  */
        
    // Extract vars.
    $post_id = $args['post_id'];

    if( $post_id === 'add_post' || $post_id === 'add_product' ) {
        $post_id = false;
    }
    
    // Set uploader type.
    acf_update_setting( 'uploader', $args['uploader'] );
    
    $fields = array();

    if( $args[ 'fields' ] ){
        foreach( $args['fields'] as $field_data ) {
            if( is_array( $field_data ) ){
                if( isset( $field_data[ 'acf' ] ) ){
                    $field = acf_maybe_get_field( $field_data[ 'acf' ], $post_id, false );
                    if( isset( $field_data[ 'elementor' ] ) ){
                        if( isset( $field[ 'wrapper' ][ 'class' ] ) ){
                            $field[ 'wrapper' ][ 'class' ] .= ' elementor-repeater-item-' . $field_data[ 'elementor' ];
                        }else{
                            $field[ 'wrapper' ][ 'class' ] = 'elementor-repeater-item-' . $field_data[ 'elementor' ];
                        }
                    }
                    $fields[] = $field;
                }else{
                    $fields[] = $field_data;
                }
            }else{
                $fields[] = acf_maybe_get_field( $field_data, $post_id, false );
            }
        }
    }else{
        return;
    }

    acf_add_local_field( array(
        'prefix'	=> 'acf',
        'name'		=> '_validate_email',
        'key'		=> '_validate_email',
        'label'		=> __('Validate Email', 'acf'),
        'type'		=> 'text',
        'value'		=> '',
        'wrapper'	=> array('style' => 'display:none !important;')
    ) );
    $fields[] = acf_get_field('_validate_email');
    
    if( $args['show_update_message'] ){
        if ( isset( $_GET[ 'updated' ] ) && $_GET[ 'updated' ] !== 'true' ){
            $form_id = explode( '_', $_GET[ 'updated' ] );
            $widget_id = $form_id[0];
            $page_id = $widget_page = $form_id[1];
            if( isset( $form_id[2] ) ) $page_id = $form_id[2];

            $update_message = $args['update_message'];
            if( strpos( $update_message, '[$' ) !== 'false' || strpos( $update_message, '[' ) !== 'false' ){
                $update_message = acfef_get_code_value( $update_message, $page_id );
            }  

            printf( $args['html_updated_message'], $update_message );
        }    
    }


    ?>
    <form <?php echo acfef_esc_attrs( $args['form_attributes'] ) ?>> 
    <?php
        acfef_form_render_data( array_merge( array( 
            'screen'	=> 'acf_form',
            'status'    => '',
            'post_id'	=> $args['post_id'],
            'form'		=> acf_encrypt(json_encode( $args ))
        ), $args[ 'hidden_fields' ] ) );
    ?>
    <?php if( isset( $args[ 'template_id' ] ) ){
		echo \Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $args[ 'template_id' ] );
	}else{ ?>
    <div class="acf-fields acf-form-fields -<?php echo esc_attr($args['label_placement'])?>">
        <?php acfef_render_fields( $fields, $post_id, $args['field_el'], $args['instruction_placement'] ); ?>
        <?php echo $args['html_after_fields']; ?>
    </div>
        <div class="acf-form-submit">
            <?php printf( $args['html_submit_button'], $args['submit_value'] ) ?>
        </div>
    <?php } ?> 
    </form>
    <?php
}


/**
 * acf_render_fields
 *
 * Renders an array of fields. Also loads the field's value.
 *
 * @date	8/10/13
 * @since	5.0.0
 * @since	5.6.9 Changed parameter order.
 *
 * @param	array $fields An array of fields.
 * @param	(int|string) $post_id The post ID to load values from.
 * @param	string $element The wrapping element type.
 * @param	string $instruction The instruction render position (label|field).
 * @return	void
 */
function acfef_render_fields( $fields, $post_id = 0, $el = 'div', $instruction = 'label' ) {
	
	// Parameter order changed in ACF 5.6.9.
	if( is_array($post_id) ) {
		$args = func_get_args();
		$fields = $args[1];
		$post_id = $args[0];
	}
	
	/**
	 * Filters the $fields array before they are rendered.
	 *
	 * @date	12/02/2014
	 * @since	5.0.0
	 *
	 * @param	array $fields An array of fields.
	 * @param	(int|string) $post_id The post ID to load values from.
	 */
	$fields = apply_filters( 'acf/pre_render_fields', $fields, $post_id );
	
	// Filter our false results.
	$fields = array_filter( $fields );
	
	// Loop over and render fields.
	if( $fields ) {
        $open_columns = 0;

		foreach( $fields as $field ) {
            if( isset( $field[ 'column' ] ) ){
                if( $field[ 'column' ] == 'endpoint' ){
                    echo '</div>';
                    $open_columns--;
                }else{
                    echo '<div class="acf-column elementor-repeater-item-' .$field[ 'column' ]. '">';
                    $open_columns++;
                }    
            }else{
                // Load value if not already loaded.
                if( $field['value'] === null ) {
                    $field['value'] = acf_get_value( $post_id, $field );
                } 
                
                // Render wrap.
                acfef_render_field_wrap( $field, $el, $instruction );
            }
        }
        if( $open_columns > 0 ){
            while( $open_columns > 0 ){
                echo '</div>';
                $open_columns--;
            }
        }
	}
	
	/**
	*  Fires after fields have been rendered.
	*
	*  @date	12/02/2014
	*  @since	5.0.0
	*
	* @param	array $fields An array of fields.
	* @param	(int|string) $post_id The post ID to load values from.
	*/
	do_action( 'acf/render_fields', $fields, $post_id );
}

/**
 * acf_render_field_wrap
 *
 * Render the wrapping element for a given field.
 *
 * @date	28/09/13
 * @since	5.0.0
 *
 * @param	array $field The field array.
 * @param	string $element The wrapping element type.
 * @param	string $instruction The instruction render position (label|field).
 * @return	void
 */
function acfef_render_field_wrap( $field, $element = 'div', $instruction = 'label' ) {
	
	// Ensure field is complete (adds all settings).
	$field = acf_validate_field( $field );
	
	// Prepare field for input (modifies settings).
	$field = acf_prepare_field( $field );
	
	// Allow filters to cancel render.
	if( !$field ) {
		return;
	}
	
	// Determine wrapping element.
	$elements = array(
		'div'	=> 'div',
		'tr'	=> 'td',
		'td'	=> 'div',
		'ul'	=> 'li',
		'ol'	=> 'li',
		'dl'	=> 'dt',
	);
	
	if( isset($elements[$element]) ) {
		$inner_element = $elements[$element];
	} else {
		$element = $inner_element = 'div';
	}
		
	// Generate wrapper attributes.
	$wrapper = array(
		'id'		=> '',
		'class'		=> 'acf-field',
		'width'		=> '',
		'style'		=> '',
		'data-name'	=> $field['_name'],
		'data-type'	=> $field['type'],
		'data-key'	=> $field['key'],
	);
	
	// Add field type attributes.
	$wrapper['class'] .= " acf-field-{$field['type']}";
	
	// add field key attributes
	if( $field['key'] ) {
		$wrapper['class'] .= " acf-field-{$field['key']}";
	}
	
	// Add required attributes.
	// Todo: Remove data-required
	if( $field['required'] ) {
		$wrapper['class'] .= ' is-required';
		$wrapper['data-required'] = 1;
	}
	
	// Clean up class attribute.
	$wrapper['class'] = str_replace( '_', '-', $wrapper['class'] );
	$wrapper['class'] = str_replace( 'field-field-', 'field-', $wrapper['class'] );
	
	// Merge in field 'wrapper' setting without destroying class and style.
	if( $field['wrapper'] ) {
		$wrapper = acf_merge_attributes( $wrapper, $field['wrapper'] );
	}
	
	// Extract wrapper width and generate style.
	// Todo: Move from $wrapper out into $field.
	$width = acf_extract_var( $wrapper, 'width' );
	if( $width ) {
		$width = acf_numval( $width );
		if( $element !== 'tr' && $element !== 'td' ) {
			$wrapper['data-width'] = $width;
			$wrapper['style'] .= " width:{$width}%;";
		}
	}
	
	// Clean up all attributes.
	$wrapper = array_map( 'trim', $wrapper );
	$wrapper = array_filter( $wrapper );
	
	/**
	 * Filters the $wrapper array before rendering.
	 *
	 * @date	21/1/19
	 * @since	5.7.10
	 *
	 * @param	array $wrapper The wrapper attributes array.
	 * @param	array $field The field array.
	 */
	$wrapper = apply_filters( 'acf/field_wrapper_attributes', $wrapper, $field );
	
	// Append conditional logic attributes.
	if( !empty($field['conditional_logic']) ) {
		$wrapper['data-conditions'] = $field['conditional_logic'];
	}
	if( !empty($field['conditions']) ) {
		$wrapper['data-conditions'] = $field['conditions'];
	}
	
	// Vars for render.
	$attributes_html = acf_esc_attr( $wrapper );
	
	// Render HTML
	echo "<$element $attributes_html>" . "\n";
		if( $element !== 'td' && ( ! isset( $field[ 'field_label_hide' ] ) || ! $field[ 'field_label_hide' ] ) ) {
            echo "<$inner_element class=\"acf-label\">" . "\n";
                acf_render_field_label( $field );
			echo "</$inner_element>" . "\n";
        }

        echo "<$inner_element class=\"acf-input\">" . "\n";
            if( $instruction == 'label' ) {
                acf_render_field_instructions( $field );
            }
			acf_render_field( $field );
			if( $instruction == 'field' ) {
				acf_render_field_instructions( $field );
			}
		echo "</$inner_element>" . "\n";
	echo "</$element>" . "\n";
}




/*
*  set_data
*
*  Sets data.
*
*  @type	function
*  @date	4/03/2016
*  @since	5.3.2
*
*  @param	array $data An array of data.
*  @return	array
*/

function acfef_form_set_data( $data = array() ) {
    
    // defaults
    $data = wp_parse_args($data, array(
        'screen'		=> 'post',	// Current screen loaded (post, user, taxonomy, etc)
        'post_id'		=> 0,		// ID of current post being edited
        'nonce'			=> '',		// nonce used for $_POST validation (defaults to screen)
        'validation'	=> 1,		// enables form validation
        'changed'		=> 0,		// used by revisions and unload to detect change
    ));
    
    // crete nonce
    $data['nonce'] = wp_create_nonce($data['screen']);

    // return 
    return $data;
}

/**
*  render_data
*
*  Renders the <div id="acf-form-data"> element with hidden "form data" inputs
*
*  @date	17/4/18
*  @since	5.6.9
*
*  @param	array $data An array of data.
*  @return	void
*/

function acfef_form_render_data( $data = array() ) {
    
    // set form data
    $data = acfef_form_set_data( $data );
    
    ?>
    <div class="acf-form-data acf-hidden">
        <?php 
        
        // loop
        foreach( $data as $name => $value ) {
            
            // input
            acf_hidden_input(array(
                'name'	=> '_acf_' . $name,
                'value'	=> $value
            ));
        }
        
        // actions
        do_action('acf/form_data', $data);
        do_action('acf/input/form_data', $data);
        
        ?>
    </div>
    <?php
}


add_action( 'wp_ajax_acfef/form_submit', 'acfef_form_submit' );
add_action( 'wp_ajax_nopriv_acfef/form_submit', 'acfef_form_submit' );
add_action( 'admin_post_acfef/form_submit', 'acfef_form_submit' );
add_action( 'admin_post_nopriv_acfef/form_submit', 'acfef_form_submit' );
function acfef_form_submit() {
    acf()->form_front->check_submit_form();
}
