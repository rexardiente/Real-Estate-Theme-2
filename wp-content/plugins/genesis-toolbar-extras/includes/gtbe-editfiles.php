<?php
/**
 * Display links to theme editor for style.css & functions.php
 * Only if theme support enable and proper capabilities are set
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.1.0
 */

/**
 * Display theme edit links if theme support is enabled
 * For these child types: Official StudioPress, Community/Marketplace, Third-Party
 * Except: Themedy Brand! (see gtbe-themedy.php)
 *
 * @since 1.1.0
 *
 * @param $gtbe_edit_themes_style
 * @param $gtbe_edit_themes_functions
 * @param $gtbe_edit_themes_gpsp_print
 * @param $gtbe_edit_themes_print_additions
 * @param $gtbe_edit_themes_gspn_styles
 * @param $gtbe_edit_themes_gspn_additions
 * @param $gtbe_stylesheet_name
 */

/** WordPress 3.4+ check */
	// Is WordPress 3.4 or higher
if ( function_exists( 'wp_get_theme' ) ) {

	// Default files
	$gtbe_edit_themes_style = network_admin_url( 'theme-editor.php?file=style.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_functions = network_admin_url( 'theme-editor.php?file=functions.php&amp;theme=' . get_stylesheet() );

	// For extended plugin support
	$gtbe_edit_themes_gpsp_print = network_admin_url( 'theme-editor.php?file=gpsp-print.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_print_additions = network_admin_url( 'theme-editor.php?file=print-additions.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_gspn_styles = network_admin_url( 'theme-editor.php?file=gspn-styles.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_gspn_additions = network_admin_url( 'theme-editor.php?file=gspn-additions.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_gspm_styles = network_admin_url( 'theme-editor.php?file=gspm-styles.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_gspm_additions = network_admin_url( 'theme-editor.php?file=gspm-additions.css&amp;theme=' . get_stylesheet() );
}
	// Is WordPress prior 3.4
else {

	// Default files
	$gtbe_edit_themes_style = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/style.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
	$gtbe_edit_themes_functions = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/functions.php&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );

	// Extended plugin support
	$gtbe_edit_themes_gpsp_print = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/gpsp-print.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
	$gtbe_edit_themes_print_additions = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/print-additions.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
	$gtbe_edit_themes_gspn_styles = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/gspn-styles.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
	$gtbe_edit_themes_gspn_additions = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/gspn-additions.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );

}  // end-if WP 3.4+ check


/** Display Theme Editor links, depending on Prose child theme check */
if ( ! defined( 'PROSE_DOMAIN' ) ) {

	/** Edit child theme stylesheet (style.css) */
	$menu_items['child-editstyle'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit style.css', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_style,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme stylesheet: style.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	/** Edit child theme functions (functions.php) */
	$menu_items['child-editfunctions'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit functions.php', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_functions,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme functions: functions.php', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

} elseif ( defined( 'PROSE_DOMAIN' ) && current_theme_supports( 'gtbe-theme-editor-prose' ) ) {

	/** Edit Prose 1.0/1.5.x child theme functions (functions.php) */
	$menu_items['child-editfunctions'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit functions.php', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_functions,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme functions: functions.php', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if theme editor & prose check


/**
 * Enhanced plugin support for some of my own Genesis plugins :).
 *
 * @since 1.5.0
 */
	/** Enhanced plugin support for "Genesis Printstyle Plus" */
	if ( defined( 'GPSP_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/gpsp-print.css' ) ) {

		/** Edit child theme CSS additions (gpsp-print.css) */
		$menu_items['child-editgpspprint'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit gpsp-print.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_gpsp_print,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: gpsp-print.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if

	if ( defined( 'GPSP_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/print-additions.css' ) ) {

		/** Edit child theme CSS additions (print-additions.css) */
		$menu_items['child-editprintadditions'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit print-additions.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_print_additions,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: print-additions.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if


	/** Enhanced plugin support for "Genesis Single Post Navigation" */
	if ( defined( 'GSPN_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/gspn-styles.css' ) ) {

		/** Edit child theme CSS additions (gspn-styles.css) */
		$menu_items['child-editgspnstyles'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit gspn-styles.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_gspn_styles,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: gspn-styles.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if

	if ( defined( 'GSPN_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/gspn-additions.css' ) ) {

		/** Edit child theme CSS additions (gspn-additions.css) */
		$menu_items['child-editgspnadditions'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit gspn-additions.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_gspn_additions,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: gspn-additions.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if


	/** Enhanced plugin support for "Genesis Social Profiles Menu" */
	if ( defined( 'GSPM_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/gspm-styles.css' ) ) {

		/** Edit child theme CSS additions (gspm-styles.css) */
		$menu_items['child-editgspmstyles'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit gspm-styles.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_gspm_styles,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: gspm-styles.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if

	if ( defined( 'GSPM_PLUGIN_BASEDIR' ) && is_readable( get_stylesheet_directory() . '/gspm-additions.css' ) ) {

		/** Edit child theme CSS additions (gspm-additions.css) */
		$menu_items['child-editgspmadditions'] = array(
			'parent' => $gtbe_child_type_check,
			'title'  => __( 'Edit gspm-additions.css', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themes_gspm_additions,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme CSS file: gspm-additions.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if
