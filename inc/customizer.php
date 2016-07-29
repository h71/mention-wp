<?php
/**
 * Mention Theme Customizer.
 *
 * @package Mention
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mention_wp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->add_section( 'mention_wp_header', 
	        array(
	           'title' => __( 'Header Options', 'mention-wp' ),
	           'priority' => 35,
	           'capability' => 'edit_theme_options'
	        )
        );

	$wp_customize->add_setting('mention_header_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'transport' => 'postMessage',
	));

	$wp_customize->add_setting('mention_header_btn_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'mention_header_text_control',
		array(
			'label' => __('Header Text', 'mention-wp'),
			'section' => 'mention_wp_header',
			'settings' => 'mention_header_text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'mention_header_btn_text_control',
		array(
			'label' => __('Header Button Text', 'mention-wp'),
			'section' => 'mention_wp_header',
			'settings' => 'mention_header_btn_text',
		)
	));
}
add_action( 'customize_register', 'mention_wp_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mention_wp_customize_preview_js() {
	wp_enqueue_script( 'mention_wp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'mention_wp_customize_preview_js' );


function header_output() {
  ?>
  <!--Customizer CSS--> 
  <style type="text/css">
       <?php generate_css('h1.site-title', 'color', 'header_textcolor', '#'); ?> 
  </style> 
  <!--/Customizer CSS-->
  <?php
}


/**
 * This will generate a line of CSS for use in header output. If the setting
 * ($mod_name) has no defined value, the CSS will not be output.
 */
function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
  $return = '';
  $mod = get_theme_mod($mod_name);
  if ( ! empty( $mod ) ) {
     $return = sprintf('%s { %s:%s; }',
        $selector,
        $style,
        $prefix.$mod.$postfix
     );
     if ( $echo ) {
        echo $return;
     }
  }
  return $return;
}



// Output custom CSS to live site
add_action( 'wp_head' , 'header_output' );