<?php
/*
Plugin Name: Genesis Design Palette Pro - Entry Content
Plugin URI: https://genesisdesignpro.com/
Description: Fine tune the look of the content inside posts and pages in Genesis Design Palette Pro
Author: Reaktiv Studios
Version: 1.0.4
Requires at least: 4.0
Author URI: https://genesisdesignpro.com
*/

/*
	Copyright 2018 Reaktiv Studios, Reaktiv Studios

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; version 2 of the License (GPL v2) only.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Set our plugin base as a constant.
if ( ! defined( 'GPECN_BASE' ) ) {
	define( 'GPECN_BASE', plugin_basename( __FILE__ ) );
}

// Set our plugin directory as a constant.
if ( ! defined( 'GPECN_DIR' ) ) {
	define( 'GPECN_DIR', dirname( __FILE__ ) );
}

// Set our plugin version as a constant.
if ( ! defined( 'GPECN_VER' ) ) {
	define( 'GPECN_VER', '1.0.4' );
}

/**
 * Load our class.
 */
class GP_Pro_Entry_Content
{

	/**
	 * Static property to hold our singleton instance.
	 *
	 * @var instance
	 */
	static $instance = false;

	/**
	 * This is our constructor. There are many like it but this one is mine.
	 *
	 * @return void.
	 */
	private function __construct() {

		// General backend.
		add_action( 'plugins_loaded',                       array( $this, 'textdomain'                      )           );
		add_action( 'admin_notices',                        array( $this, 'gppro_active_check'              ),  10      );
		add_action( 'admin_notices',                        array( $this, 'gppro_version_check'             ),  10      );

		// GP Pro specific.
		add_filter( 'gppro_set_defaults',                   array( $this, 'entry_defaults_base'             ),  40      );
		add_filter( 'gppro_set_defaults',                   array( $this, 'entry_defaults_legacy'           ),  99      );
		add_filter( 'gppro_admin_block_add',                array( $this, 'entry_content_block'             ),  35      );
		add_filter( 'gppro_section_inline_post_content',    array( $this, 'entry_inline_post_content'       ),  25, 2   );
		add_filter( 'gppro_sections',                       array( $this, 'entry_content_sections'          ),  20, 2   );
	}

	/**
	 * If an instance exists, this returns it. If not, it creates one and retuns it.
	 *
	 * @return instance
	 */
	public static function getInstance() {

		// Load the instance if we don't have it.
		if ( ! self::$instance ) {
			self::$instance = new self;
		}

		// Return the instance.
		return self::$instance;
	}

	/**
	 * Load textdomain.
	 */
	public function textdomain() {
		load_plugin_textdomain( 'gppro-entry-content', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Check for GP Pro being active.
	 *
	 * @return HTML message or nothing.
	 */
	public function gppro_active_check() {

		// Make sure the function exists.
		if ( ! function_exists( 'get_current_screen' ) ) {
			return;
		}

		// Get the current screen.
		$screen = get_current_screen();

		// Bail if not on the plugins page.
		if ( ! is_object( $screen ) || empty( $screen->parent_file ) || 'plugins.php' !== esc_attr( $screen->parent_file ) ) {
			return;
		}

		// Run the active check.
		$coreactive = class_exists( 'Genesis_Palette_Pro' ) ? Genesis_Palette_Pro::check_active() : false;

		// Active. bail.
		if ( $coreactive ) {
			return;
		}

		// Not active. Show message.
		echo '<div id="message" class="notice settings-error is-dismissible gppro-admin-warning"><p><strong>' . esc_html__( 'This plugin requires Genesis Design Palette Pro to function and cannot be activated.', 'gppro-entry-content' ).'</strong></p></div>';

		// Hide activation method.
		unset( $_GET['activate'] );

		// Deactivate the plugin.
		deactivate_plugins( plugin_basename( __FILE__ ) );

		// And finish.
		return;
	}

	/**
	 * Check for valid Design Palette Pro Version.
	 *
	 * Requires version 1.3.0+
	 *
	 * @since 1.0.1
	 */
	public function gppro_version_check() {

		// Get the version.
		$dppver = defined( 'GPP_VER' ) ? GPP_VER : 0;

		// Do the message.
		if ( version_compare( $dppver, '1.3.0', '<' ) ) {
			printf(
				'<div class="updated"><p>' . esc_html__( 'Please upgrade %1$sDesign Palette Pro to version 1.3.0 or greater%2$s to continue using the Entry Content extension.', 'gppro' ) . '</p></div>',
				'<a href="' . esc_url( admin_url( 'plugins.php?plugin_status=upgrade' ) ) . '">',
				'</a>'
			);
		}
	}

	/**
	 * Swap default values.
	 *
	 * @param  array $defaults  The original array of default values.
	 *
	 * @return array $defaults  The default values, updated.
	 */
	public function entry_defaults_base( $defaults ) {

		// Fetch the existing defaults.
		$title_base      = ! empty( $defaults['post-title-text'] ) ? $defaults['post-title-text'] : '';
		$title_stack     = ! empty( $defaults['post-title-stack'] ) ? $defaults['post-title-stack'] : '';

		$text_base       = ! empty( $defaults['post-entry-text'] ) ? $defaults['post-entry-text'] : '';
		$text_link       = ! empty( $defaults['post-entry-link'] ) ? $defaults['post-entry-link'] : '';
		$text_link_hov   = ! empty( $defaults['post-entry-link-hov'] ) ? $defaults['post-entry-link-hov'] : '';
		$text_stack      = ! empty( $defaults['post-entry-stack'] ) ? $defaults['post-entry-stack'] : '';
		$text_size       = ! empty( $defaults['post-entry-size'] ) ? $defaults['post-entry-size'] : '';
		$text_weight     = ! empty( $defaults['post-entry-weight'] ) ? $defaults['post-entry-weight'] : '';
		$text_style      = ! empty( $defaults['post-entry-style'] ) ? $defaults['post-entry-style'] : '';

		$link_base       = ! empty( $defaults['post-entry-link'] ) ? $defaults['post-entry-link'] : '';
		$link_hov        = ! empty( $defaults['post-entry-link-hov'] ) ? $defaults['post-entry-link-hov'] : '';
		$link_stack      = ! empty( $defaults['post-entry-stack'] ) ? $defaults['post-entry-stack'] : '';
		$link_size       = ! empty( $defaults['post-entry-size'] ) ? $defaults['post-entry-size'] : '';
		$link_weight     = ! empty( $defaults['post-entry-weight'] ) ? $defaults['post-entry-weight'] : '';
		$link_style      = ! empty( $defaults['post-entry-style'] ) ? $defaults['post-entry-style'] : '';

		$list_ul_style   = ! empty( $defaults['post-entry-list-ul'] ) ? $defaults['post-entry-list-ul'] : '';
		$list_ol_style   = ! empty( $defaults['post-entry-list-ol'] ) ? $defaults['post-entry-list-ol'] : '';

		$cap_base        = ! empty( $defaults['post-entry-caption-text'] ) ? $defaults['post-entry-caption-text'] : '';
		$cap_link        = ! empty( $defaults['post-entry-caption-link'] ) ? $defaults['post-entry-caption-link'] : '';
		$cap_link_hov    = ! empty( $defaults['post-entry-caption-link-hov'] ) ? $defaults['post-entry-caption-link-hov'] : '';

		// General body.
		$changes    = array(
			'entry-content-h1-color-text'       => $title_base,
			'entry-content-h1-color-link'       => $text_link,
			'entry-content-h1-color-link-hov'   => $text_link_hov,
			'entry-content-h1-stack'            => $title_stack,
			'entry-content-h1-size'             => '36',
			'entry-content-h1-weight'           => '700',
			'entry-content-h1-margin-bottom'    => '16',
			'entry-content-h1-padding-bottom'   => '0',
			'entry-content-h1-transform'        => 'none',
			'entry-content-h1-align'            => 'left',
			'entry-content-h1-link-dec'         => 'underline',
			'entry-content-h1-link-dec-hov'     => 'underline',

			'entry-content-h2-color-text'       => $title_base,
			'entry-content-h2-color-link'       => $text_link,
			'entry-content-h2-color-link-hov'   => $text_link_hov,
			'entry-content-h2-stack'            => $title_stack,
			'entry-content-h2-size'             => '30',
			'entry-content-h2-weight'           => '700',
			'entry-content-h2-margin-bottom'    => '16',
			'entry-content-h2-padding-bottom'   => '0',
			'entry-content-h2-transform'        => 'none',
			'entry-content-h2-align'            => 'left',
			'entry-content-h2-link-dec'         => 'underline',
			'entry-content-h2-link-dec-hov'     => 'underline',

			'entry-content-h3-color-text'       => $title_base,
			'entry-content-h3-color-link'       => $text_link,
			'entry-content-h3-color-link-hov'   => $text_link_hov,
			'entry-content-h3-stack'            => $title_stack,
			'entry-content-h3-size'             => '24',
			'entry-content-h3-weight'           => '700',
			'entry-content-h3-margin-bottom'    => '16',
			'entry-content-h3-padding-bottom'   => '0',
			'entry-content-h3-transform'        => 'none',
			'entry-content-h3-align'            => 'left',
			'entry-content-h3-link-dec'         => 'underline',
			'entry-content-h3-link-dec-hov'     => 'underline',

			'entry-content-h4-color-text'       => $title_base,
			'entry-content-h4-color-link'       => $text_link,
			'entry-content-h4-color-link-hov'   => $text_link_hov,
			'entry-content-h4-stack'            => $title_stack,
			'entry-content-h4-size'             => '20',
			'entry-content-h4-weight'           => '700',
			'entry-content-h4-margin-bottom'    => '16',
			'entry-content-h4-padding-bottom'   => '0',
			'entry-content-h4-transform'        => 'none',
			'entry-content-h4-align'            => 'left',
			'entry-content-h4-link-dec'         => 'underline',
			'entry-content-h4-link-dec-hov'     => 'underline',

			'entry-content-h5-color-text'       => $title_base,
			'entry-content-h5-color-link'       => $text_link,
			'entry-content-h5-color-link-hov'   => $text_link_hov,
			'entry-content-h5-stack'            => $title_stack,
			'entry-content-h5-size'             => '18',
			'entry-content-h5-weight'           => '700',
			'entry-content-h5-margin-bottom'    => '16',
			'entry-content-h5-padding-bottom'   => '0',
			'entry-content-h5-transform'        => 'none',
			'entry-content-h5-align'            => 'left',
			'entry-content-h5-link-dec'         => 'underline',
			'entry-content-h5-link-dec-hov'     => 'underline',

			'entry-content-h6-color-text'       => $title_base,
			'entry-content-h6-color-link'       => $text_link,
			'entry-content-h6-color-link-hov'   => $text_link_hov,
			'entry-content-h6-stack'            => $title_stack,
			'entry-content-h6-size'             => '16',
			'entry-content-h6-weight'           => '700',
			'entry-content-h6-margin-bottom'    => '16',
			'entry-content-h6-padding-bottom'   => '0',
			'entry-content-h6-transform'        => 'none',
			'entry-content-h6-align'            => 'left',
			'entry-content-h6-link-dec'         => 'underline',
			'entry-content-h6-link-dec-hov'     => 'underline',

			'entry-content-p-color-text'        => $text_base,
			'entry-content-p-stack'             => $text_stack,
			'entry-content-p-size'              => $text_size,
			'entry-content-p-weight'            => $text_weight,
			'entry-content-p-margin-bottom'     => '26',
			'entry-content-p-padding-bottom'    => '0',
			'entry-content-p-transform'         => 'none',
			'entry-content-p-align'             => 'left',

			'entry-content-a-color'             => $link_base,
			'entry-content-a-color-hov'         => $link_hov,
			'entry-content-a-stack'             => $link_stack,
			'entry-content-a-size'              => $link_size,
			'entry-content-a-weight'            => $link_weight,
			'entry-content-a-transform'         => 'none',
			'entry-content-a-dec'               => 'underline',
			'entry-content-a-dec-hov'           => 'underline',

			'entry-content-ul-color-text'       => $text_base,
			'entry-content-ul-color-link'       => $text_link,
			'entry-content-ul-color-link-hov'   => $text_link_hov,
			'entry-content-ul-stack'            => $text_stack,
			'entry-content-ul-size'             => $text_size,
			'entry-content-ul-weight'           => $text_weight,
			'entry-content-ul-margin-left'      => '40',
			'entry-content-ul-margin-bottom'    => '26',
			'entry-content-ul-padding-left'     => '0',
			'entry-content-ul-padding-bottom'   => '0',
			'entry-content-ul-list-style'       => $list_ul_style,
			'entry-content-ul-transform'        => 'none',
			'entry-content-ul-align'            => 'left',
			'entry-content-ul-link-dec'         => 'underline',
			'entry-content-ul-link-dec-hov'     => 'underline',

			'entry-content-ol-color-text'       => $text_base,
			'entry-content-ol-color-link'       => $text_link,
			'entry-content-ol-color-link-hov'   => $text_link_hov,
			'entry-content-ol-stack'            => $text_stack,
			'entry-content-ol-size'             => $text_size,
			'entry-content-ol-weight'           => $text_weight,
			'entry-content-ol-margin-left'      => '40',
			'entry-content-ol-margin-bottom'    => '26',
			'entry-content-ol-padding-left'     => '0',
			'entry-content-ol-padding-bottom'   => '0',
			'entry-content-ol-list-style'       => $list_ol_style,
			'entry-content-ol-transform'        => 'none',
			'entry-content-ol-align'            => 'left',
			'entry-content-ol-link-dec'         => 'underline',
			'entry-content-ol-link-dec-hov'     => 'underline',

			'entry-content-cap-color-text'      => $cap_base,
			'entry-content-cap-color-link'      => $cap_link,
			'entry-content-cap-color-link-hov'  => $cap_link_hov,
			'entry-content-cap-stack'           => $text_stack,
			'entry-content-cap-size'            => $text_size,
			'entry-content-cap-weight'          => $text_weight,
			'entry-content-cap-transform'       => 'none',
			'entry-content-cap-margin-bottom'   => '26',
			'entry-content-cap-padding-bottom'  => '0',
			'entry-content-cap-transform'       => 'none',
			'entry-content-cap-align'           => 'center',
			'entry-content-cap-link-dec'        => 'underline',
			'entry-content-cap-link-dec-hov'    => 'underline',

			'entry-content-bquotes-padding-top'     => '0',
			'entry-content-bquotes-padding-bottom'  => '0',
			'entry-content-bquotes-padding-left'    => '0',
			'entry-content-bquotes-padding-right'   => '0',
			'entry-content-bquotes-margin-top'      => '40',
			'entry-content-bquotes-margin-bottom'   => '40',
			'entry-content-bquotes-margin-left'     => '40',
			'entry-content-bquotes-margin-right'    => '40',
			'entry-content-bquotes-background'      => '',
			'entry-content-bquotes-color-text'      => $text_base,
			'entry-content-bquotes-color-link'      => $text_link,
			'entry-content-bquotes-color-link-hov'  => $text_link_hov,

			'entry-content-bquotes-stack'    => $text_stack,
			'entry-content-bquotes-size'     => $text_size,
			'entry-content-bquotes-weight'   => $text_weight,

			'entry-content-bquotes-margin-bottom'   => '28',
			'entry-content-bquotes-padding-bottom'  => '0',
			'entry-content-bquotes-transform'       => 'none',
			'entry-content-bquotes-align'           => 'left',
			'entry-content-bquotes-style'           => $text_style,
			'entry-content-bquotes-link-dec'        => 'none',
			'entry-content-bquotes-link-dec-hov'    => 'none',

			'entry-content-code-color-text'     => '#dddddd',
			'entry-content-code-background'     => '#333333',
			'entry-content-code-stack'          => 'monospace',
			'entry-content-code-size'           => '16',
			'entry-content-code-weight'         => '400',
		);

		// Bail if changes are empty (even though they shouldn't be).
		if ( empty( $changes ) ) {
			return $defaults;
		}

		// Put into key value pair.
		foreach ( $changes as $key => $value ) {
			$defaults[ $key ]   = $value;
		}

		// Send them back.
		return $defaults;
	}

	/**
	 * Check for the key names we had before adding new links.
	 *
	 * @param  array $defaults  The original array of default values.
	 *
	 * @return array $defaults  The default values, updated.
	 */
	public function entry_defaults_legacy( $defaults ) {

		// Check for the original entry content link color.
		if ( ! empty( $defaults['entry-content-p-color-link'] ) ) {
			$defaults['entry-content-a-color'] = $defaults['entry-content-p-color-link'];
		}

		// Check for the original entry content link hover color.
		if ( ! empty( $defaults['entry-content-p-color-link-hov'] ) ) {
			$defaults['entry-content-a-color-hov'] = $defaults['entry-content-p-color-link-hov'];
		}

		// Check for the original entry content link decoration type.
		if ( ! empty( $defaults['entry-content-p-link-dec'] ) ) {
			$defaults['entry-content-a-dec'] = $defaults['entry-content-p-link-dec'];
		}

		// Check for the original entry content link decoration hover type.
		if ( ! empty( $defaults['entry-content-p-link-dec-hov'] ) ) {
			$defaults['entry-content-a-dec-hov'] = $defaults['entry-content-p-link-dec-hov'];
		}

		// Send them back.
		return $defaults;
	}

	/**
	 * Add and filter options in the post content area.
	 *
	 * @param  array $sections  The original array of available sections.
	 * @param  array $class     The body class being used.
	 *
	 * @return array $sections
	 */
	public function entry_inline_post_content( $sections, $class ) {

		// Remove the default post content settings in favor of our new ones.
		unset( $sections['post-entry-color-setup']['title'] );
		unset( $sections['post-entry-type-setup'] );

		// Info about new area.
		$sections['post-entry-color-setup']['data'] = array(
			'post-entry-plugin-active'  => array(
				'input' => 'description',
				'desc'  => __( 'You are currently using the Entry Content add on, so all settings are now available there.', 'gppro-entry-content' ),
			),
		);

		// Send it back.
		return $sections;
	}

	/**
	 * Add our new block to the side tab list.
	 *
	 * @param  array $blocks  The current array of side blocks.
	 *
	 * @return array $blocks  The updated array of side blocks.
	 */
	public function entry_content_block( $blocks ) {

		// Check for the block first.
		if ( ! isset( $blocks['entry-content'] ) ) {

			// Add the block.
			$blocks['entry-content'] = array(
				'tab'       => __( 'Entry Content', 'gppro-entry-content' ),
				'title'     => __( 'Entry Content', 'gppro-entry-content' ),
				'intro'     => __( 'Fine tune the look of the content inside posts and pages.<br /><strong>Note:</strong> Post title and meta display settings are still contained in the Content Area tab.', 'gppro-entry-content' ),
				'slug'      => 'entry_content',
			);
		}

		// Return the block.
		return $blocks;
	}

	/**
	 * Add and filter options in the new entry content area.
	 *
	 * @param  array $sections  The original array of available sections.
	 * @param  array $class     The body class being used.
	 *
	 * @return array $sections
	 */
	public function entry_content_sections( $sections, $class ) {

		// Build out the section.
		$sections['entry_content']  = array(

			'section-break-entry-content-h1'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H1 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h1-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h1-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h1-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h1 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h1-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h1 a:hover', '.entry-content h1 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h1-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h1-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h1-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'title',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h1-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h1-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h1-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h1-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h1-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h1-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h1',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h1-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h1 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h1-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h1 a:hover', '.entry-content h1 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-h2'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H2 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h2-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h2-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h2-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h2 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h2-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h2 a:hover', '.entry-content h2 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h2-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h2-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h2-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'title',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h2-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h2-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h2-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h2-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h2-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h2-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h2',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h2-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h2 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h2-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h2 a:hover', '.entry-content h2 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-h3'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H3 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h3-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h3-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h3-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h3 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h3-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h3 a:hover', '.entry-content h3 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h3-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h3-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h3-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'title',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h3-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h3-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h3-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h3-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h3-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h3-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h3',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h3-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h3 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h3-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h3 a:hover', '.entry-content h3 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-h4'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H4 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h4-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h4-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h4-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h4 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h4-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h4 a:hover', '.entry-content h4 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h4-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h4-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h4-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h4-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h4-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h4-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h4-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h4-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h4-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h4',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h4-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h4 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h4-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h4 a:hover', '.entry-content h4 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-h5'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H5 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h5-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h5-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h5-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h5 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h5-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h5 a:hover', '.entry-content h5 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h5-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h5-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h5-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h5-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h5-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h5-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h5-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h5-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h5-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h5',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h5-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h5 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h5-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h5 a:hover', '.entry-content h5 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-h6'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'H6 Headers', 'gppro-entry-content' ),
				),
			),

			'entry-content-h6-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h6-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h6-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content h6 a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-h6-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content h6 a:hover', '.entry-content h6 a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-h6-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h6-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-h6-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-h6-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
						'always_write' => true,
					),
				),
			),

			'entry-content-h6-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-h6-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h6-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-h6-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-h6-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content h6',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-h6-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content h6 a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-h6-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content h6 a:hover', '.entry-content h6 a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-p' => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Paragraphs', 'gppro-entry-content' ),
				),
			),

			'entry-content-p-color-setup'   => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-p-color-text'    => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-p-type-setup'    => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-p-stack' => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-p-size'  => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-p-weight'    => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-p-appearance-setup'  => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-p-margin-bottom' => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-p-padding-bottom'    => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-p-transform' => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-p-align' => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content p',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
				),
			),

			'section-break-entry-content-a'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Links', 'gppro-entry-content' ),
				),
			),

			'entry-content-a-color-setup'   => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-a-color'    => array(
						'label'     => __( 'Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-a-color-hov'    => array(
						'label'     => __( 'Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content p a:hover', '.entry-content p a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-a-type-setup'    => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-a-stack' => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-a-size'  => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-a-weight'    => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-a-appearance-setup'  => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-a-transform' => array(
						'label'     => __( 'Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-a-dec' => array(
						'label'     => __( 'Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content p a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-a-dec-hov' => array(
						'label'     => __( 'Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content p a:hover', '.entry-content p a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
						'always_write' => true,
					),
				),
			),

			'section-break-entry-content-ul'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Unordered Lists (<ul>)', 'gppro-entry-content' ),
				),
			),

			'entry-content-ul-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ul-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-ul-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content ul a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-ul-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content ul a:hover', '.entry-content ul a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-ul-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ul-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-ul-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-ul-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-ul-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ul-margin-left'  => array(
						'label'     => __( 'Margin Left', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-left',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ul-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ul-padding-left' => array(
						'label'     => __( 'Padding Left', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-left',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ul-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ul-list-style'   => array(
						'label'     => __( 'List Style', 'gppro' ),
						'input'     => 'lists',
						'target'    => '.entry-content ul li',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'list-style-type',
					),
					'entry-content-ul-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-ul-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content ul',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-ul-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content ul a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-ul-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content ul a:hover', '.entry-content ul a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-ol'    => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Ordered Lists (<ol>)', 'gppro-entry-content' ),
				),
			),

			'entry-content-ol-color-setup'  => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ol-color-text'   => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-ol-color-link'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content ol a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-ol-color-link-hov'   => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content ol a:hover', '.entry-content ol a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-ol-type-setup'   => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ol-stack'    => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-ol-size' => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-ol-weight'   => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-ol-appearance-setup' => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-ol-margin-left'  => array(
						'label'     => __( 'Margin Left', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-left',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ol-margin-bottom'    => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ol-padding-left' => array(
						'label'     => __( 'Padding Left', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-left',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ol-padding-bottom'   => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-ol-list-style'   => array(
						'label'     => __( 'List Style', 'gppro' ),
						'input'     => 'lists',
						'target'    => '.entry-content ol li',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'list-style-type',
					),
					'entry-content-ol-transform'    => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-ol-align'    => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content ol',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-ol-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content ol a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-ol-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content ol a:hover', '.entry-content ol a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-cap'   => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Image Captions', 'gppro-entry-content' ),
				),
			),

			'entry-content-cap-color-setup' => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-cap-color-text'  => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-cap-color-link'  => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content .wp-caption-text a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-cap-color-link-hov'  => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content .wp-caption-text a:hover', '.entry-content .wp-caption-text a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-cap-type-setup'  => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-cap-stack'   => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-cap-size'    => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-cap-weight'  => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-cap-appearance-setup'    => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-cap-margin-bottom'   => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-cap-padding-bottom'  => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-cap-transform'   => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-cap-align'   => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content .wp-caption-text',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-cap-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content .wp-caption-text a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-cap-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content .wp-caption-text a:hover',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-bquotes'  => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Block Quotes', 'gppro-entry-content' ),
				),
			),

			'entry-content-bquotes-area-padding-setup'    => array(
				'title'     => __( 'Area Padding', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-bquotes-padding-top'	=> array(
						'label'    => __( 'Top', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'padding-top',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-padding-bottom'	=> array(
						'label'    => __( 'Bottom', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'padding-bottom',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-padding-left'	=> array(
						'label'    => __( 'Left', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'padding-left',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-padding-right'	=> array(
						'label'    => __( 'Right', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'padding-right',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
				),
			),

			'entry-content-bquotes-area-margin-setup'    => array(
				'title'     => __( 'Area Margins', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-bquotes-margin-top'	=> array(
						'label'    => __( 'Top', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'margin-top',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-margin-bottom'	=> array(
						'label'    => __( 'Bottom', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'margin-bottom',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-margin-left'	=> array(
						'label'    => __( 'Left', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'margin-left',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
					'entry-content-bquotes-margin-right'	=> array(
						'label'    => __( 'Right', 'gppro' ),
						'input'    => 'spacing',
						'target'   => '.entry-content blockquote',
						'selector' => 'margin-right',
						'builder'  => 'GP_Pro_Builder::px_css',
						'min'      => '0',
						'max'      => '100',
						'step'     => '1',
					),
				),
			),

			'entry-content-bquotes-color-setup'    => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-bquotes-background' => array(
						'label'     => __( 'Background Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'background-color',
					),
					'entry-content-bquotes-color-text' => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-bquotes-color-link'  => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content blockquote p a',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
					'entry-content-bquotes-color-link-hov'  => array(
						'label'     => __( 'Link Color', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => array( '.entry-content blockquote p a:hover', '.entry-content blockquote p a:focus' ),
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-bquotes-type-setup'    => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-bquotes-stack' => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-bquotes-size'  => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-bquotes-weight'    => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

			'entry-content-bquotes-appearance-setup'    => array(
				'title'     => __( 'Text Appearance', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-bquotes-margin-bottom'   => array(
						'label'     => __( 'Margin Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'margin-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-bquotes-padding-bottom'  => array(
						'label'     => __( 'Padding Bottom', 'gppro-entry-content' ),
						'input'     => 'spacing',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'padding-bottom',
						'min'       => '0',
						'max'       => '60',
						'step'      => '1',
					),
					'entry-content-bquotes-transform'   => array(
						'label'     => __( 'Text Appearance', 'gppro-entry-content' ),
						'input'     => 'text-transform',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-transform',
					),
					'entry-content-bquotes-align'   => array(
						'label'     => __( 'Text Alignment', 'gppro-entry-content' ),
						'input'     => 'text-align',
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'text-align',
					),
					'entry-content-bquotes-style'  => array(
						'label'     => __( 'Font Style', 'gppro' ),
						'input'     => 'radio',
						'options'   => array(
							array(
								'label' => __( 'Normal', 'gppro' ),
								'value' => 'normal',
							),
							array(
								'label' => __( 'Italic', 'gppro' ),
								'value' => 'italic',
							),
						),
						'target'    => '.entry-content blockquote p',
						'builder'   => 'GP_Pro_Builder::text_css',
						'selector'  => 'font-style',
					),
					'entry-content-bquotes-link-dec' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Base', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => '.entry-content blockquote p a',
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
					'entry-content-bquotes-link-dec-hov' => array(
						'label'     => __( 'Link Style', 'gppro-entry-content' ),
						'sub'       => __( 'Hover', 'gppro-entry-content' ),
						'input'     => 'text-decoration',
						'target'    => array( '.entry-content blockquote p a:hover', '.entry-content blockquote p a:focus' ),
						'builder'   => 'GP_Pro_Entry_Content::link_decorations',
						'selector'  => 'text-decoration',
					),
				),
			),

			'section-break-entry-content-code'  => array(
				'break' => array(
					'type'  => 'thin',
					'title' => __( 'Code Blocks', 'gppro-entry-content' ),
				),
			),

			'entry-content-code-color-setup'    => array(
				'title'     => __( 'Colors', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-code-background' => array(
						'label'     => __( 'Background Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content code',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'background-color',
					),
					'entry-content-code-color-text' => array(
						'label'     => __( 'Base Color', 'gppro-entry-content' ),
						'input'     => 'color',
						'target'    => '.entry-content code',
						'builder'   => 'GP_Pro_Builder::hexcolor_css',
						'selector'  => 'color',
					),
				),
			),

			'entry-content-code-type-setup' => array(
				'title'     => __( 'Typography', 'gppro-entry-content' ),
				'data'      => array(
					'entry-content-code-stack'  => array(
						'label'     => __( 'Font Stack', 'gppro-entry-content' ),
						'input'     => 'font-stack',
						'target'    => '.entry-content code',
						'builder'   => 'GP_Pro_Builder::stack_css',
						'selector'  => 'font-family',
					),
					'entry-content-code-size'   => array(
						'label'     => __( 'Font Size', 'gppro-entry-content' ),
						'sub'       => __( 'px', 'gppro' ),
						'input'     => 'font-size',
						'scale'     => 'text',
						'target'    => '.entry-content code',
						'builder'   => 'GP_Pro_Builder::px_css',
						'selector'  => 'font-size',
					),
					'entry-content-code-weight' => array(
						'label'     => __( 'Font Weight', 'gppro-entry-content' ),
						'input'     => 'font-weight',
						'target'    => '.entry-content code',
						'builder'   => 'GP_Pro_Builder::number_css',
						'selector'  => 'font-weight',
						'tip'       => __( 'Certain fonts will not display every weight.', 'gppro-entry-content' ),
					),
				),
			),

		); // End section.

		// Check for inline add-ons.
		$sections['entry_content']  = apply_filters( 'gppro_section_inline_entry_content', $sections['entry_content'], $class );

		// Return the section.
		return $sections;
	}

	/**
	 * Custom builder for link decoration styles.
	 *
	 * Remove bottom borders when using text-decoration setting.
	 *
	 * @since 1.0.1
	 *
	 * @param  string $selector  The CSS selector being passed.
	 * @param  mixed  $value     The stored setting value.
	 *
	 * @return string
	 */
	public static function link_decorations( $selector, $value ) {

		// Set the empty.
		$build  = '';

		// Switch our selector.
		switch ( $selector ) {

			case 'text-decoration':

				$build .= GP_Pro_Builder::text_css( 'text-decoration', $value );
				$build .= GP_Pro_Builder::text_css( 'border-bottom-style', 'none' );

				break;
			default:

				$build .= '';
				break;
		}

		// Return the CSS to the builder.
		return $build;
	}

	// End class.
}

// Instantiate our class.
$GP_Pro_Entry_Content = GP_Pro_Entry_Content::getInstance();

