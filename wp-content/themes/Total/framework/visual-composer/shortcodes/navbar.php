<?php
/**
 * Visual Composer Navbar
 *
 * @package Total WordPress Theme
 * @subpackage Visual Composer
 * @version 3.3.5
 */

/**
 * Register shortcode with VC Composer
 *
 * @since 2.0.0
 */
class WPBakeryShortCode_vcex_navbar extends WPBakeryShortCode {
	protected function content( $atts, $content = null ) {
		ob_start();
		include( locate_template( 'vcex_templates/vcex_navbar.php' ) );
		return ob_get_clean();
	}
}

/**
 * Adds the shortcode to the Visual Composer
 *
 * @since 1.4.1
 */
function vcex_navbar_vc_map() {
	// Create an array of menu items
	$menus_array = array();
	if ( is_admin() ) {
		$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
		if ( $menus && is_array( $menus ) ) {
			foreach ( $menus as $menu ) {
				$menus_array[$menu->name] = $menu->term_id;
			}
		}
	}
	// Map the shortcode
	return array(
		'name' => esc_html__( 'Navigation Bar', 'total' ),
		'description' => esc_html__( 'Custom menu navigation bar', 'total' ),
		'base' => 'vcex_navbar',
		'icon' => 'vcex-navbar vcex-icon fa fa-navicon',
		'category' => wpex_get_theme_branding(),
		'params' => array(
			// General
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'heading' => esc_html__( 'Unique Id', 'total' ),
				'param_name' => 'unique_id',
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'heading' => esc_html__( 'Classes', 'total' ),
				'param_name' => 'classes',
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'heading' => esc_html__( 'Menu', 'total' ),
				'param_name' => 'menu',
				'value' => $menus_array,
				'save_always' => true,
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Visibility', 'total' ),
				'param_name' => 'visibility',
				'value' => array_flip( wpex_visibility() ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Appear Animation', 'total'),
				'param_name' => 'css_animation',
				'value' => array_flip( wpex_css_animations() ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Local Scroll menu', 'total'),
				'param_name' => 'local_scroll',
				'value' => array(
					__( 'No', 'total' ) => 'false',
					__( 'Yes', 'total' ) => 'true',
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Sticky', 'total'),
				'param_name' => 'sticky',
				'value' => array(
					__( 'No', 'total' ) => 'false',
					__( 'Yes', 'total' ) => 'true',
				),
				'description' => esc_html__( 'Enable sticky support for the menu so it sticks to the top of the site when you scroll down. If enabled the main header will no longer be sticky on this page to prevent conflicts.', 'total' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Full-Screen Center', 'total'),
				'param_name' => 'full_screen_center',
				'value' => array(
					__( 'No', 'total' ) => 'false',
					__( 'Yes', 'total' ) => 'true',
				),
				'description' => esc_html__( 'Center the navigation links when using the full-screen page layout', 'total' ),
			),
			// Design
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Preset', 'total' ),
				'param_name' => 'preset_design',
				'value' => array(
					__( 'None', 'total' ) => 'none',
					__( 'Dark', 'total' ) => 'dark',
				),
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Alignment', 'total' ),
				'param_name' => 'align',
				'value' => array_flip( wpex_alignments() ),
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Hover Animation', 'total'),
				'param_name' => 'hover_animation',
				'value' => array_flip( wpex_hover_css_animations() ),
				'std' => '',
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Button Style', 'total' ),
				'param_name' => 'button_style',
				'value' => array_flip( wpex_button_styles() ),
				'group' => esc_html__( 'Design', 'total' ),
				'std' => 'minimal-border',
				'dependency' => array( 'element' => 'preset_design', 'value' => 'none' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Button Color', 'total' ),
				'param_name' => 'button_color',
				'std' => '',
				'value' => array_flip( wpex_button_colors() ),
				'group' => esc_html__( 'Design', 'total' ),
				'dependency' => array( 'element' => 'preset_design', 'value' => 'none' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Layout', 'total' ),
				'param_name' => 'button_layout',
				'value' => array(
					__( 'Default', 'total' ) => '',
					__( 'Expanded', 'total' ) => 'expanded',
				),
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'vcex_font_family_select',
				'heading' => esc_html__( 'Font Family', 'total' ),
				'param_name' => 'font_family',
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Font Weight', 'total' ),
				'param_name' => 'font_weight',
				'value' => array_flip( wpex_font_weights() ),
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Font Size', 'total' ),
				'param_name' => 'font_size',
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Letter Spacing', 'total' ),
				'param_name' => 'letter_spacing',
				'group' => esc_html__( 'Design', 'total' ),
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Hover: Background', 'total' ),
				'param_name' => 'hover_bg',
				'group' => esc_html__( 'Design', 'total' ),
				'dependency' => array( 'element' => 'preset_design', 'value' => 'none' ),
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Hover: Color', 'total' ),
				'param_name' => 'hover_color',
				'group' => esc_html__( 'Design', 'total' ),
				'dependency' => array( 'element' => 'preset_design', 'value' => 'none' ),
			),
			// Advanced Styling
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Link CSS', 'total' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Link CSS', 'total' ),
				'dependency' => array( 'element' => 'preset_design', 'value' => 'none' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Wrap CSS', 'total' ),
				'param_name' => 'wrap_css',
				'group' => esc_html__( 'Wrap CSS', 'total' ),
			),
			// Deprecated params
			array(
				'type' => 'hidden',
				'param_name' => 'style',
			),
			array(
				'type' => 'hidden',
				'param_name' => 'border_radius',
			),
			array(
				'type' => 'hidden',
				'param_name' => 'link_color',
			),
		)
	);
}
vc_lean_map( 'vcex_navbar', 'vcex_navbar_vc_map' );

// Parse field attributes
function vcex_navbar_vc_edit_form_fields( $atts ) {
	if ( isset( $atts['style'] ) && 'simple' == $atts['style'] ) {
		$atts['button_style'] = 'plain-text';
		unset( $atts['style'] );
	}
	unset( $atts['link_color'] );
	return $atts;
}
add_filter( 'vc_edit_form_fields_attributes_vcex_navbar', 'vcex_navbar_vc_edit_form_fields' );