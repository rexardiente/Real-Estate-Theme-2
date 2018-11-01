<?php
/**
 * Display links to active 'Dynamik Genesis' Child Theme settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.3.0
 */

/**
 * Special child theme stuff
 * Third-party child theme: Dynamik Genesis (aka Dynamik Website Builder)
 *
 * @since 1.3.0
 */
/** Child Theme settings section - only if "Dynamik Genesis" 1.0+ is active */
if ( ( function_exists( 'dynamik_theme_settings' )
	&& ! get_the_author_meta( 'disable_dynamik_gen_settings_menu', $gtbe_user->ID ) )
	&& current_user_can( 'manage_options' )
) {

	$menu_items['tpchild-generalsettings'] = array(
		'parent' => $tpchild_dynamik,
		'title'  => __( 'General Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=dynamik-settings&activetab=dynamik-theme-settings-nav-general' ),
		'meta'   => array( 'target' => '', 'title' => __( 'General Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['tpchild-importexport'] = array(
		'parent' => $tpchild_dynamik,
		'title'  => __( 'Import/ Export', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=dynamik-settings&activetab=dynamik-theme-settings-nav-import-export' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Import/ Export', 'genesis-toolbar-extras' ) )
	);
	$menu_items['tpchild-info'] = array(
		'parent' => $tpchild_dynamik,
		'title'  => __( 'Child Theme Info', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=dynamik-settings&activetab=dynamik-theme-settings-nav-info' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Child Theme Info', 'genesis-toolbar-extras' ) )
	);

}  // end-if Dynamik settings check


/** Design settings section - only if "Dynamik Genesis" 1.0+ is active */
if ( ( function_exists( 'dynamik_design_options' )
	&& ! get_the_author_meta( 'disable_dynamik_gen_design_menu', $gtbe_user->ID ) )
	&& current_user_can( 'manage_options' )
) {

	$menu_items['dynamikdesign'] = array(
		'parent' => $tgroup,
		'title'  => __( 'Design Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=dynamik-design' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Design Settings', 'genesis-toolbar-extras' ) )
	);

	/** Sub area: Structure */
	$menu_items['dynamikdesignstructure'] = array(
		'parent' => $dynamikdesign,
		'title'  => __( 'Structure Settings:', 'genesis-toolbar-extras' ),
		'href'   => false,
		'meta'   => array( 'target' => '', 'title' => __( 'Structure Settings:', 'genesis-toolbar-extras' ) )
	);
		$menu_items['dynamikdesignstructure-body'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Body', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-body' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Body', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-wrap'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Wrap', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-wrap' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Wrap', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-widths'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Layout Widths', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-nav3' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Layout Widths', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-nav'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Primary Navigation', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-nav1' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Primary Navigation', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-subnav'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Secondary Navigation', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-nav2' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Secondary Navigation', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-headernav'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Header Navigation', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-nav3' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Header Navigation', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignstructure-breadcrumbs'] = array(
			'parent' => $dynamikdesignstructure,
			'title'  => __( 'Breadcrumbs', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-breadcrumbs' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Breadcrumbs', 'genesis-toolbar-extras' ) )
		);

	/** Sub area: Content */
	$menu_items['dynamikdesigncontent'] = array(
		'parent' => $dynamikdesign,
		'title'  => __( 'Content Settings:', 'genesis-toolbar-extras' ),
		'href'   => false,
		'meta'   => array( 'target' => '', 'title' => __( 'Content Settings:', 'genesis-toolbar-extras' ) )
	);
		$menu_items['dynamikdesigncontent-header'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Header', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-header' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Header', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-footer'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Footer', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-footer' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Footer', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-content'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Content', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-content' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Content', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-content'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Comments', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-comments' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Comments', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-sidebars'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Sidebars', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-sidebars' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Sidebars', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-ez'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'EZ Widget Areas', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-ez' ),
			'meta'   => array( 'target' => '', 'title' => __( 'EZ Widget Areas', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-widgets'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Widgets', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-widgets' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Widgets', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-search'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Search', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-search' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Search', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-taxonomyboxes'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Taxonomy/ Title Boxes', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-taxonomy' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Taxonomy/ Title Boxes', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-authorboxes'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Author Boxes', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-author' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Author Boxes', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesigncontent-postnav'] = array(
			'parent' => $dynamikdesigncontent,
			'title'  => __( 'Post Navigation', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-post-nav' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Post Navigation', 'genesis-toolbar-extras' ) )
		);

	/** Sub area: Extras */
	$menu_items['dynamikdesignextras'] = array(
		'parent' => $dynamikdesign,
		'title'  => __( 'Extra Settings:', 'genesis-toolbar-extras' ),
		'href'   => false,
		'meta'   => array( 'target' => '', 'title' => __( 'Extra Settings:', 'genesis-toolbar-extras' ) )
	);
		$menu_items['dynamikdesignextras-images'] = array(
			'parent' => $dynamikdesignextras,
			'title'  => __( 'Image Uploader', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-image-uploader' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Image Uploader', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikdesignextras-importexport'] = array(
			'parent' => $dynamikdesignextras,
			'title'  => __( 'Import/ Export Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-design&activetab=dynamik-design-options-nav-import-export' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Import/ Export Settings', 'genesis-toolbar-extras' ) )
		);

}  // end-if Dynamik Design Settings check


/** Dynamik Custom section - only for "Dynamik Genesis" 1.0+ */
if ( ( function_exists( 'dynamik_custom_options' )
	&& ! get_the_author_meta( 'disable_dynamik_gen_custom_menu', $gtbe_user->ID ) )
	&& current_user_can( 'manage_options' )
) {

	$menu_items['dynamikcustom'] = array(
		'parent' => $tgroup,
		'title'  => __( 'Custom CSS &amp; Code', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=dynamik-custom' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Custom CSS &amp; Code for Dynamik Genesis', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
		$menu_items['dynamikcustom-css'] = array(
			'parent' => $dynamikcustom,
			'title'  => __( 'Custom CSS', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-custom&activetab=dynamik-custom-options-nav-css' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom CSS', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikcustom-functions'] = array(
			'parent' => $dynamikcustom,
			'title'  => __( 'Custom Functions', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-custom&activetab=dynamik-custom-options-nav-functions' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Functions', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikcustom-conditionals'] = array(
			'parent' => $dynamikcustom,
			'title'  => __( 'Custom Conditionals', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-custom&activetab=dynamik-custom-options-nav-conditionals' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Conditionals', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikcustom-widgetareas'] = array(
			'parent' => $dynamikcustom,
			'title'  => __( 'Custom Widget Areas', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-custom&activetab=dynamik-custom-options-nav-widget-areas' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Widget Areas', 'genesis-toolbar-extras' ) )
		);
		$menu_items['dynamikcustom-hookboxes'] = array(
			'parent' => $dynamikcustom,
			'title'  => __( 'Custom Hook Boxes', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=dynamik-custom&activetab=dynamik-custom-options-nav-hook-boxes' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Hook Boxes', 'genesis-toolbar-extras' ) )
		);

}  // end-if Dynamik Custom check


/** Add 'Genesis Dynamik' support link to general support section */
$menu_items['genesisdynamik-suppurtforum'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Genesis Dynamik Support', 'genesis-toolbar-extras' ),
	'href'   => 'http://ddwb.me/84',
	'meta'   => array( 'title' => __( 'Genesis Dynamik Support', 'genesis-toolbar-extras' ) )
);
