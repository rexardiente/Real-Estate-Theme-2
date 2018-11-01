<?php
/**
 * Display links to active 'Genesis Extender' plugin settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Plugin Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.5.0
 */

/**
 * Special plugin stuff
 * Third-party plugin: Genesis Extender
 *
 * @since 1.5.0
 */
/** Genesis Extender settings section - only if "Genesis Extender" 1.0+ is active */
if ( CHILD_THEME_NAME != 'Dynamik Website Builder'		// do not activate for Dynamik Genesis version!
	&& ( function_exists( 'genesis_extender_settings' )
		&& ! get_the_author_meta( 'disable_genesis_extender_settings_menu', $gtbe_user->ID ) )
	&& current_user_can( 'manage_options' )
) {

	$menu_items['gextendersettings'] = array(
		'parent' => $tpplugin_extender,
		'title'  => __( 'Extender Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis-extender-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Extender Settings', 'genesis-toolbar-extras' ) )
	);

		$menu_items['gextendersettings-general'] = array(
			'parent' => $gextendersettings,
			'title'  => __( 'General Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-settings&activetab=genesis-extender-settings-nav-general' ),
			'meta'   => array( 'target' => '', 'title' => __( 'General Settings', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendersettings-importexport'] = array(
			'parent' => $gextendersettings,
			'title'  => __( 'Import/ Export', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-settings&activetab=genesis-extender-settings-nav-import-export' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Import/ Export', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendersettings-info'] = array(
			'parent' => $gextendersettings,
			'title'  => __( 'Plugin Info', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-settings&activetab=genesis-extender-settings-nav-info' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Plugin Info', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendersettings-suppurt'] = array(
			'parent' => $gextendersettings,
			'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
			'href'   => 'http://ddwb.me/83',
			'meta'   => array( 'title' => __( 'Support Forum', 'genesis-toolbar-extras' ) )
		);

}  // end-if Genesis Extender settings check


/** Genesis Extender Custom section - only for "Genesis Extender" 1.0+ */
if ( CHILD_THEME_NAME != 'Dynamik Website Builder'		// do not activate for Dynamik Genesis version!
	&& ( function_exists( 'genesis_extender_custom_options' )
		&& ! get_the_author_meta( 'disable_genesis_extender_custom_menu', $gtbe_user->ID ) )
	&& current_user_can( 'manage_options' )
) {

	$menu_items['gextendercustom'] = array(
		'parent' => $tpplugin_extender,
		'title'  => __( 'Extender Custom', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis-extender-custom' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Extender Custom', 'genesis-toolbar-extras' ) )
	);

		$menu_items['gextendercustom-css'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Custom CSS', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-css' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom CSS', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendercustom-functions'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Custom Functions', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-functions' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Functions', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendercustom-conditionals'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Custom Conditionals', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-conditionals' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Conditionals', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendercustom-widgetareas'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Custom Widget Areas', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-widget-areas' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Widget Areas', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendercustom-hookboxes'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Custom Hook Boxes', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-hook-boxes' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Hook Boxes', 'genesis-toolbar-extras' ) )
		);
		$menu_items['gextendercustom-imageuploader'] = array(
			'parent' => $gextendercustom,
			'title'  => __( 'Image Uploader', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-extender-custom&activetab=genesis-extender-custom-options-nav-image-uploader' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Image Uploader', 'genesis-toolbar-extras' ) )
		);

}  // end-if Genesis Extender custom check


/** Add 'Genesis Extender' support link to general support section */
$menu_items['gextendersettings-suppurtforum'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Genesis Extender Support', 'genesis-toolbar-extras' ),
	'href'   => 'http://ddwb.me/83',
	'meta'   => array( 'title' => __( 'Genesis Extender Support', 'genesis-toolbar-extras' ) )
);
