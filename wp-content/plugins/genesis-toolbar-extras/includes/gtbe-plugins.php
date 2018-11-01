<?php
/**
 * Display links to active Genesis plugins/extensions settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0.0
 */

/**
 * Genesis Palette (free, by Andrew Norcross)
 *
 * @since 1.2.0
 */
if ( ( ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'genesis-palette/plugin.php' ) ) || defined( 'GS_SETTINGS_FIELD' ) ) && current_user_can( 'manage_options' ) ) {

	/** Entry at "Extensions" section */
	$menu_items['ext-gdesignpalette'] = array(
		'parent' => $extensions,
		'title'  => __( 'Design Palette', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gsd_design' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Design Palette', 'genesis-toolbar-extras' ) )
	);

	/** Entry at "Child Theme"/Theme Group section */
	if ( basename( get_template_directory() ) == 'genesis' ) {
		$menu_items['child-gdesignpalette'] = array(
			'parent' => $tgroup,
			'title'  => __( 'Design Palette', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=gsd_design' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Design Palette - Plugin Extension', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Genesis check

}  // end-if Palette


/**
 * Genesis Extender (premium, by Cobalt Apps, Inc./ CatalystTheme.com)
 *
 * @since 1.5.0
 */
if ( ( defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME != 'Dynamik Website Builder' )	// do not activate for Dynamik Genesis version!
	&& current_user_can( 'manage_options' )
	&& defined( 'GENEXT_VERSION' )
) {

	/** Include plugin file with neccessary code parts */
	require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-plugins-genesisextender.php' );

}  // end-if Extender check


/**
 * Genesis Simple Edits (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( class_exists( 'Genesis_Simple_Edits' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-simpleedits'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Edits', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis-simple-edits' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Edits', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Edits


/**
 * Genesis Simple Sidebars (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( function_exists( 'ss_genesis_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-simplesidebars'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Sidebars', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=simple-sidebars' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Sidebars', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Sidebars


/**
 * Genesis Simple Hooks (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( defined( 'SIMPLEHOOKS_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-simplehooks'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Hooks', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=simplehooks' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Hooks', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Hooks


/**
 * Genesis Slider (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( defined( 'GENESIS_SLIDER_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-gslider'] = array(
		'parent' => $extensions,
		'title'  => __( 'Slider Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis_slider' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Slider Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Slider


/**
 * Genesis Responsive Slider (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( defined( 'GENESIS_RESPONSIVE_SLIDER_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-gresponsiveslider'] = array(
		'parent' => $extensions,
		'title'  => __( 'Responsive Slider Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis_responsive_slider' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Responsive Slider Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Responsive Slider


/**
 * Genesis Bootstrap Carousel (free, by Justin Tallant)
 *
 * @since 1.5.0
 */
if ( defined( 'GENESIS_BOOTSTRAP_CAROUSEL_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-gbootstrapcarousel'] = array(
		'parent' => $extensions,
		'title'  => __( 'Bootstrap Carousel Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis_bootstrap_carousel' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Bootstrap Carousel Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Bootstrap Carousel


/**
 * Genesis Layout Extras (free, by David Decker - DECKERWEB)
 *
 * @since 1.0.0
 */
if ( function_exists( 'ddw_genesis_layout_extras_theme_settings_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-glayoutextras'] = array(
		'parent' => $extensions,
		'title'  => __( 'Layout Extras', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gle-layout-extras' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Layout Extras', 'genesis-toolbar-extras' ) )
	);
}  // end-if Layout Extras


/**
 * Genesis Widgetized Archive Pro (premium, by David Decker - DECKERWEB)
 *
 * @since 1.6.0
 */
if ( defined( 'GWATPRO_VERSION' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gwatpro'] = array(
		'parent' => $extensions,
		'title'  => __( 'Widgetized Archive Pro', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gwatpro-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Widgetized Archive Pro', 'genesis-toolbar-extras' ) )
	);
}  // end-if Widgetized Archive Pro


/**
 * Genesis Grid (Loop) (free, by Bill Erickson)
 *
 * @since 1.5.0
 */
if ( class_exists( 'BE_Genesis_Grid' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-ggridloopbe'] = array(
		'parent' => $extensions,
		'title'  => __( 'Grid Loop Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis-grid' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Grid Loop Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Genesis Grid (Loop)


/**
 * Genesis Responsive Header (free, by Nick Croft)
 *
 * @since 1.5.1
 */
if ( defined( 'GRH_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gresponsiveheader'] = array(
		'parent' => $extensions,
		'title'  => __( 'Responsive Header', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=grh-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Responsive Header', 'genesis-toolbar-extras' ) )
	);
}  // end-if Responsive Header


/**
 * Genesis Simple Headers (free, by 9seeds, LLC)
 *
 * @since 1.5.1
 */
if ( function_exists( 'gsh_custom_header_options' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gsimpleheaders'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Headers', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'themes.php?page=custom-header#footer' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Headers', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Headers


/**
 * Genesis Custom Backgrounds (free, by Travis Smith)
 *
 * @since 1.0.0
 */
if ( current_theme_supports( 'custom-background' ) && defined( 'GCB_SETTINGS_FIELD' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gcustombg'] = array(
		'parent' => $extensions,
		'title'  => __( 'Custom Backgrounds', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gcb-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Custom Backgrounds', 'genesis-toolbar-extras' ) )
	);
}  // end-if Custom Backgrounds


/**
 * Genesis Favicon Uploader (free, by Christopher Cochran)
 *
 * @since 1.0.0
 */
if ( function_exists( 'favicon_up_settings_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gfaviconup'] = array(
		'parent' => $extensions,
		'title'  => __( 'Favicon Uploader', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=upload-favicon' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Favicon Uploader', 'genesis-toolbar-extras' ) )
	);
}  // end-if Favicon Uploader


/**
 * Genesis Simple Breadcrumbs (free, by Nick Croft)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gsb_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gsimplebreadcrumbs'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Breadcrumbs', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gsb-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Breadcrumbs', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Breadcrumbs


/**
 * Genesis Simple Comments (free, by Nick Croft)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gsc_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gsimplecomments'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Comments', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gsc-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Comments', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Comments


/**
 * Genesis 404 Page (free, by Bill Erickson)
 *
 * @since 1.1.0
 */
if ( class_exists( 'BE_Genesis_404' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gsimplecomments'] = array(
		'parent' => $extensions,
		'title'  => __( '404 Page Content', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis-404' ),
		'meta'   => array( 'target' => '', 'title' => __( '404 Error Page Content', 'genesis-toolbar-extras' ) )
	);
}  // end-if 404 Page


/**
 * Genesis Grid (free, by Travis Smith)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gg_init' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-ggrid'] = array(
		'parent' => $extensions,
		'title'  => __( 'Grid Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#gg-settings-box' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Grid Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Genesis Grid


/**
 * Genesis Post Teasers (free, by Christopher Cochran)
 *
 * @since 1.0.0
 */
if ( function_exists( 'genesis_post_info_teaser_logic' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gpostteasers'] = array(
		'parent' => $extensions,
		'title'  => __( 'Teaser Boxes Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#gPostTeaz-settings-box' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Teaser Boxes Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Post Teasers


/**
 * Genesis Post Navigation (free, by Iniyan)
 *
 * @since 1.6.0
 */
if ( function_exists( 'gpn_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gpostnavigation'] = array(
		'parent' => $extensions,
		'title'  => __( 'Post Navigation Design', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gpn_design' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Post Navigation Design', 'genesis-toolbar-extras' ) )
	);
}  // end-if Post Navigation


/**
 * Genesis Style Select (free, by Nick Croft)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gsselect_init' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gstyleselect'] = array(
		'parent' => $extensions,
		'title'  => __( 'Style Select', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-select' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Style Select', 'genesis-toolbar-extras' ) )
	);
}  // end-if Style Select


/**
 * Genesis Title Toggle (free, by Bill Erickson)
 *
 * @since 1.0.0
 */
if ( class_exists( 'BE_Title_Toggle' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gtitletoggle'] = array(
		'parent' => $extensions,
		'title'  => __( 'Title Toggle', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#be-title-toggle' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Title Toggle', 'genesis-toolbar-extras' ) )
	);
}  // end-if Title Toggle


/**
 * Genesis Featured Images (free, by Travis Smith)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gfi_init' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gfeaturedimages'] = array(
		'parent' => $extensions,
		'title'  => __( 'Featured Images', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#genesis-theme-settings-featimg' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Featured Images', 'genesis-toolbar-extras' ) )
	);
}  // end-if Featured Images


/**
 * Genesis Footer Widgets (free, by Ramoonus)
 *
 * @since 1.0.0
 */
if ( function_exists( 'gfw_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gfooterwidgets'] = array(
		'parent' => $extensions,
		'title'  => __( 'Footer Widgets', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=gfw-options' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Footer Widgets', 'genesis-toolbar-extras' ) )
	);
}  // end-if Footer Widgets


/**
 * Genesis Simple Defaults (free, by Hit Reach)
 *
 * @since 1.0.0
 */
if ( function_exists( 'SD_HR_Activate' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['ext-gsimpledefaults'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Defaults', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=simple-defaults' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Defaults', 'genesis-toolbar-extras' ) )
	);
}  // end-if Simple Defaults


/**
 * Genesis Comment Title (free, by Hit Reach)
 *
 * @since 1.0.0
 */
if ( function_exists( 'CT_HR_Activate' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gcommenttitle'] = array(
		'parent' => $extensions,
		'title'  => __( 'Comment Title', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'index.php#Genesis - Comment Title' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Comment Title', 'genesis-toolbar-extras' ) )
	);
}  // end-if Comment Title


/**
 * Generate Box (free, by Hesham Zebida)
 *
 * @since 1.0.0
 */
if ( function_exists( 'generatebox_admin_init' ) && current_user_can( 'edit_theme_options' ) 
) {
	/** Entry at "Extensions" section */
	$menu_items['ext-generatebox'] = array(
		'parent' => $extensions,
		'title'  => __( 'Generate Box', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=ct-settings' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Generate Box (for Generate Child Theme)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	/** Entry at "Child Theme" section */
	$menu_items['spgenesischild-generatebox'] = array(
		'parent' => $spgenesischild,
		'title'  => __( 'Generate Box', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=ct-settings' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Generate Box (for Email/Lead Management)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
}  // end-if Generate Box


/**
 * bbPress Genesis Extend (free, by Jared Atchison)
 *
 * @since 1.0.0
 */
if ( class_exists( 'bbpge_settings' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['ext-gbbpextend'] = array(
		'parent' => $extensions,
		'title'  => __( 'bbPress Genesis Options', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#bbpress-genesis-options' ),
		'meta'   => array( 'target' => '', 'title' => __( 'bbPress Genesis Options', 'genesis-toolbar-extras' ) )
	);
}  // end-if bbPress Genesis Extend


/**
 * Genesis Connect for BuddyPress (free since v1.2, by StudioPress) (formerly premium plugin!)
 *
 * @since 1.0.0
 */
$gtbe_gconnect_cap = ( is_multisite() ? 'manage_network_options' : 'manage_options' );
if ( class_exists( 'GConnect_Theme' ) && ( class_exists( 'BuddyPress' ) || class_exists( 'BP_Core_User' ) ) && $gtbe_gconnect_cap ) {
	$menu_items['extsp-gconnectbp'] = array(
		'parent' => $extensions,
		'title'  => __( 'Genesis Connect', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=connect-settings' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Genesis Connect (for BuddyPress)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
}  // end-if Genesis Connect


/**
 * Scribe SEO (free, by Copbyblogger Media LLC)
 *
 * @since 1.0.0
 */
if ( class_exists( 'Ecordia' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extcb-scribeseo'] = array(
		'parent' => $extensions,
		'title'  => __( 'Scribe SEO', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=scribe' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Scribe SEO', 'genesis-toolbar-extras' ) )
	);
}  // end-if Scribe


/**
 * Genesis Accordion (beta/free, by Pat Ramsey - slash25.com)
 *
 * @link http://slash25.com/genesis-accordion-plugin/
 *
 * @since 1.0.0
 */
if ( ( defined( 'GENESIS_ACCORDION_SETTINGS_FIELD' ) || function_exists( 'GenesisAccordionInit' ) ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-gaccordion'] = array(
		'parent' => $extensions,
		'title'  => __( 'Accordion Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis_accordion' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Accordion Settings', 'genesis-toolbar-extras' ) )
	);
}  // end-if Accordion


/**
 * Genesis Hooks (free, by Travis Smith)
 *
 * @since 1.0.0
 */
if ( function_exists( 'genesis_hooks_setup' ) && current_user_can( 'edit_theme_options' ) ) {
	$menu_items['extsp-ghooks'] = array(
		'parent' => $extensions,
		'title'  => __( 'Genesis Hooks', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=genesis#genesis-theme-settings-hooks' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Genesis Hooks', 'genesis-toolbar-extras' ) )
	);
}  // end-if Hooks


/**
 * SEO Data Transporter (free, by StudioPress)
 *
 * @since 1.0.0
 */
if ( function_exists( 'seodt_settings_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['extsp-seodatatransporter'] = array(
		'parent' => $extensions,
		'title'  => __( 'SEO Data Transporter', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'tools.php?page=seodt' ),
		'meta'   => array( 'target' => '', 'title' => __( 'SEO Data Transporter', 'genesis-toolbar-extras' ) )
	);
}  // end-if SEO Data Transporter


/**
 * (SPYR) Network Bar (free, by Spyr Media)
 *
 * @since 1.4.0
 */
if ( class_exists( 'spyr_bar' ) && current_user_can( 'manage_options' ) ) {

	/** Entries at "Extensions" section */
	$menu_items['ext-spyrnetworkbar'] = array(
		'parent' => $extensions,
		'title'  => __( 'Network Bar', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=spyr_options' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Network Bar', 'genesis-toolbar-extras' ) )
	);

	/** Entries at "(in)SPYR" child theme section */
	if ( class_exists( 'inspyr_theme' ) ) {
		$menu_items['spmarket-inspyr-networkbar'] = array(
			'parent' => $spmarket,
			'title'  => '(SPYR) ' . __( 'Network Bar', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=spyr_options' ),
			'meta'   => array( 'target' => '', 'title' => '(SPYR) ' . __( 'Network Bar', 'genesis-toolbar-extras' ) )
		);
	}  // end-if (in)SPYR child theme check

}  // end-if (SPYR) Network Bar


/**
 * Widget Settings Importer/Exporter (free, by Kevin Langley & smccafferty)
 *
 * @since 1.4.0
 */
if ( class_exists( 'Widget_Data' ) && ( current_user_can( 'manage_options' ) || current_user_can( 'administrator' ) ) ) {

	/** Entries at "Import/ Export" section */
	$menu_items['genesisimportexport-wsettingsexport'] = array(
		'parent' => $genesisimportexport,
		'title'  => __( 'Widget Settings Export', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'tools.php?page=widget-settings-export' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Widget Settings Export (Plugin Tool)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['genesisimportexport-wsettingsimport'] = array(
		'parent' => $genesisimportexport,
		'title'  => __( 'Widget Settings Import', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'tools.php?page=widget-settings-import' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Widget Settings Import (Plugin Tool)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	/** Entries at "Extensions" section */
	$menu_items['ext-wsettingsexport'] = array(
		'parent' => $extensions,
		'title'  => __( 'Widget Settings Export', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'tools.php?page=widget-settings-export' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Widget Settings Export (Plugin Tool)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['ext-wsettingsimport'] = array(
		'parent' => $extensions,
		'title'  => __( 'Widget Settings Import', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'tools.php?page=widget-settings-import' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Widget Settings Import (Plugin Tool)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
}  // end-if Widget Settings Importer/Exporter


/**
 * Manage Content Group
 * For displaying more extensions in a more relevant and accessable way
 *
 * @since 1.0.0
 */

	/**
	 * AgentPress Listings (free, by StudioPress)
	 *
	 * @since 1.0.0
	 */
	if ( function_exists( 'agentpress_listings_init' ) && current_user_can( 'edit_posts' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcgspapl'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'AgentPress Listings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=listing' ),
			'meta'   => array( 'target' => '', 'title' => __( 'AgentPress Listings', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgspapl-add'] = array(
			'parent' => $mcgspapl,
			'title'  => __( 'Add new Listing', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=listing' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Listing', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgspapl-features'] = array(
			'parent' => $mcgspapl,
			'title'  => __( 'Add/Edit Features', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=features&post_type=listing' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add/Edit Features', 'genesis-toolbar-extras' ) )
		);

		/** Display only for WordPress capability 'manage_options' */
		if ( current_user_can( 'manage_options' ) ) {
			$menu_items['mcgspapl-register'] = array(
				'parent' => $mcgspapl,
				'title'  => __( 'Register new Taxonomy', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=listing&page=register-taxonomies' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Register new Taxonomy', 'genesis-toolbar-extras' ) )
			);
		}  // end-if cap check

		/**
		 * AgentPress Listings Taxonomy Reorder (free, by Robert Iseley)
		 * Add plugin support only here where it makes sense.
		 *
		 * @since 1.3.0
		 */
		if ( function_exists( 'ap_tax_reorder_init' ) && current_user_can( 'manage_options' ) ) {
			$menu_items['mcgspapl-taxreorder'] = array(
				'parent' => $mcgspapl,
				'title'  => __( 'Reorder Taxonomies', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=listing&page=ap-tax-reorder' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Reorder Taxonomies', 'genesis-toolbar-extras' ) )
			);
		}  // end-if plugin & cap check

		/**
		 * AgentPress Broker Listings (Agents) (free, by iZone Technology)
		 * Add plugin support only here where it makes sense.
		 *
		 * @since 1.5.0
		 */
		if ( function_exists( 'create_real_estate_agents' ) && ( current_user_can( 'manage_options' ) || current_user_can( 'administrator' ) ) ) {
			$menu_items['mcgspapl-agents'] = array(
				'parent' => $mcgspapl,
				'title'  => __( 'Agents/ Broker Listings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=agent_display_details&sub=agents_list' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Agents/ Broker Listings', 'genesis-toolbar-extras' ) )
			);
			$menu_items['mcgspapl-agents-addedit'] = array(
				'parent' => $mcgspapl,
				'title'  => __( 'Add/ Create Agent', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=agent_display_details&sub=create_agent' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Add/ Create Agent', 'genesis-toolbar-extras' ) )
			);
		}  // end-if plugin & cap check

		/** GCPTA Plugin */
		if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
			$menu_items['mcgspapl-gcpta'] = array(
				'parent' => $mcgspapl,
				'title'  => _x( 'Listings', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
				'href'   => admin_url( 'edit.php?post_type=listing&page=gcpta-listing' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Listings', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
			);
		}  // end-if GCPTA check

	}  // end-if AgentPress Listings


	/**
	 * Genesis Portfolio (free, by Travis Smith)
	 *
	 * @since 1.1.0
	 */
	if ( defined( 'MFP_VERSION' ) && current_user_can( 'edit_posts' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcggportfolio'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Genesis Portfolio', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=minfolio_portfolio' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Genesis Portfolio', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggportfolio-addportfolio'] = array(
			'parent' => $mcggportfolio,
			'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=minfolio_portfolio' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggportfolio-features'] = array(
			'parent' => $mcggportfolio,
			'title'  => _x( 'Features', 'Translators: Genesis Portfolio Taxonomy', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=minfolio_features&post_type=minfolio_portfolio' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Features', 'Translators: Genesis Portfolio Taxonomy', 'genesis-toolbar-extras' ) )
		);

		/** Display only for WordPress capability 'manage_options' */
		if ( current_user_can( 'manage_options' ) ) {
			$menu_items['mcggportfolio-register'] = array(
				'parent' => $mcggportfolio,
				'title'  => __( 'Register new Taxonomies', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=minfolio_portfolio&page=minfolio-taxonomies' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Register new Taxonomies', 'genesis-toolbar-extras' ) )
			);
			$menu_items['mcggportfolio-settings'] = array(
				'parent' => $mcggportfolio,
				'title'  => __( 'Portfolio Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=minfolio_portfolio&page=minfolio-portfolio-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if cap check

		/** GCPTA Plugin */
		if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
			$menu_items['mcggportfolio-gcpta'] = array(
				'parent' => $mcggportfolio,
				'title'  => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
				'href'   => admin_url( 'edit.php?post_type=minfolio_portfolio&page=gcpta-minfolio_portfolio' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
			);
		}  // end-if GCPTA check

		/** Entries at "Extensions" section - display only for WordPress capability 'manage_options' */
		if ( current_user_can( 'manage_options' ) ) {
			$menu_items['ext-gportfolio'] = array(
				'parent' => $extensions,
				'title'  => __( 'Genesis Portfolio: Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=minfolio_portfolio&page=minfolio-portfolio-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Genesis Portfolio: Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if cap check

	}  // end-if Genesis Portfolio


	/**
	 * Genesis Media Project (free, by Nick Croft)
	 *
	 * @since 1.0.0
	 */
	if ( defined( 'GMP_SETTINGS_FIELD' ) && current_user_can( 'edit_posts' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcggmp'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Genesis Media Project', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=ntg_module_loader' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Genesis Media Project', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggmp-videos'] = array(
			'parent' => $mcggmp,
			'title'  => __( 'Videos', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=video' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Videos', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggmp-addvideo'] = array(
			'parent' => $mcggmp,
			'title'  => __( 'Add new Video', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=video' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Video', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggmp-slideshows'] = array(
			'parent' => $mcggmp,
			'title'  => __( 'SlideShows', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=slideshow&post_type=video' ),
			'meta'   => array( 'target' => '', 'title' => __( 'SlideShows', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggmp-videocats'] = array(
			'parent' => $mcggmp,
			'title'  => __( 'Video Categories', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=video-category&post_type=video' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Video Categories', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggmp-videotags'] = array(
			'parent' => $mcggmp,
			'title'  => __( 'Video Tags', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=video-tag&post_type=video' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Video Tags', 'genesis-toolbar-extras' ) )
		);

		/** Display only for WordPress capability 'manage_options' */
		if ( current_user_can( 'manage_options' ) ) {
			$menu_items['mcggmp-tabslider'] = array(
				'parent' => $mcggmp,
				'title'  => __( 'Tab Slider Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=video&page=gmp-tab-slider-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Tab Slider Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if cap check

		/** GCPTA Plugin */
		if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
			$menu_items['mcggmp-gcpta'] = array(
				'parent' => $mcggmp,
				'title'  => _x( 'Videos', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
				'href'   => admin_url( 'edit.php?post_type=video&page=gcpta-video' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Videos', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
			);
		}  // end-if GCPTA check

		/** Entries at "Extensions" section - display only for WordPress capability 'manage_options' */
		if ( current_user_can( 'manage_options' ) ) {
			$menu_items['ext-gmp'] = array(
				'parent' => $extensions,
				'title'  => __( 'Media Project Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=ntg_module_loader' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Media Project Settings', 'genesis-toolbar-extras' ) )
			);
			$menu_items['ext-gmp-tabslider'] = array(
				'parent' => $extensions,
				'title'  => __( 'Media Project: Tab Slider Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=video&page=gmp-tab-slider-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Media Project: Tab Slider Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if cap check

	}  // end-if Genesis Media Project


	/**
	 * Genesis Press Post Type (free, by Will Anderson, Derick Schaefer, Matt Lawrence)
	 *
	 * @since 1.0.0
	 */
	if ( function_exists( 'gpp_activation_check' ) && current_user_can( 'edit_posts' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcggppt'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Press Post Type', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=news' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Press Post Type', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggppt-add'] = array(
			'parent' => $mcggppt,
			'title'  => __( 'Add new Press/News', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=news' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Press/News', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggppt-categories'] = array(
			'parent' => $mcggppt,
			'title'  => __( 'Press/News Categories', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=category&post_type=news' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Press/News Categories', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggppt-tags'] = array(
			'parent' => $mcggppt,
			'title'  => __( 'Press/News Tags', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit-tags.php?taxonomy=post_tag&post_type=news' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Press/News Tags', 'genesis-toolbar-extras' ) )
		);

		/** GCPTA Plugin */
		if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
			$menu_items['mcggppt-gcpta'] = array(
				'parent' => $mcggppt,
				'title'  => _x( 'Press', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
				'href'   => admin_url( 'edit.php?post_type=news&page=gcpta-news' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Press', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
			);
		}  // end-if GCPTA check

	}  // end-if Press Post Type


	/**
	 * Genesis Promotion Box (free, by Ron Rennick)
	 *
	 * @since 1.0.0
	 */
	if ( class_exists( 'Genesis_Promo_Box_Post_Type' ) && current_user_can( 'edit_posts' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcggpbox'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Promotions', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=promotion_post' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Genesis Promotion Box', 'Translators: For the tooltip - Genesis Promotion Box Post Type', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcggpbox-add'] = array(
			'parent' => $mcggpbox,
			'title'  => __( 'Add new Promotion', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=promotion_post' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Promotion', 'genesis-toolbar-extras' ) )
		);

	}  // end-if Promotion Box


	/**
	 * Simple URLs (free, by StudioPress)
	 *
	 * @since 1.0.0
	 */
	if ( class_exists( 'SimpleURLs' ) && current_user_can( 'manage_links' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcgspsurls'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Simple URLs', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=surl' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Simple URLs', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgspsurls-add'] = array(
			'parent' => $mcgspsurls,
			'title'  => __( 'Add new URL', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=surl' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new URL', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Simple URLs


	/**
	 * WP-Cycle (free, by Nathan Rice)
	 *
	 * @since 1.0.0
	 */
	if ( function_exists( 'add_wp_cycle_menu' ) && current_user_can( 'upload_files' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcg-wpcycle'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'WP-Cycle', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'upload.php?page=wp-cycle' ),
			'meta'   => array( 'target' => '', 'title' => __( 'WP-Cycle', 'genesis-toolbar-extras' ) )
		);

		/** Entries at "Extensions" section */
		$menu_items['ext-wpcycle'] = array(
			'parent' => $extensions,
			'title'  => __( 'WP-Cycle', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'upload.php?page=wp-cycle' ),
			'meta'   => array( 'target' => '', 'title' => __( 'WP-Cycle', 'genesis-toolbar-extras' ) )
		);
	}  // end-if WP-Cycle


	/**
	 * Dynamic Content Gallery - DCG (free, by Ade Walker - Studiograsshopper)
	 *
	 * @since 1.0.0
	 */
	if ( ( function_exists( 'dfcg_init' ) || function_exists( 'dfcg_options_init' ) ) && current_user_can( 'manage_options' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcg-dcg'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Dynamic Content Gallery', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'options-general.php?page=dynamic_content_gallery' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Dynamic Content Gallery', 'genesis-toolbar-extras' ) )
		);

		/** Entries at "Extensions" section */
		$menu_items['ext-dcg'] = array(
			'parent' => $extensions,
			'title'  => __( 'Dynamic Content Gallery', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'options-general.php?page=dynamic_content_gallery' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Dynamic Content Gallery', 'genesis-toolbar-extras' ) )
		);
	}  // end-if DCG


	/**
	 * Soliloquy for WordPress (premium, by Thomas Griffin Media)
	 *    plus: Soliloquy Lite (free, by Thomas Griffin Media)
	 *
	 * @since 1.3.0
	 */
	if ( class_exists( 'Tgmsp' ) || class_exists( 'Tgmsp_Lite' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcgsoliloquy'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Soliloquy Sliders', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=soliloquy' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Soliloquy Sliders', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgsoliloquy-add'] = array(
			'parent' => $mcgsoliloquy,
			'title'  => __( 'Add new Slider', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=soliloquy' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Slider', 'genesis-toolbar-extras' ) )
		);

		/** Premium version only features */
		if ( class_exists( 'Tgmsp' ) ) {
			$menu_items['mcgsoliloquy-settings'] = array(
				'parent' => $mcgsoliloquy,
				'title'  => __( 'Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=soliloquy&page=soliloquy-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Settings', 'genesis-toolbar-extras' ) )
			);
			$menu_items['mcgsoliloquy-addons'] = array(
				'parent' => $mcgsoliloquy,
				'title'  => __( 'Add Ons', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=soliloquy&page=soliloquy-addons' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Add Ons', 'genesis-toolbar-extras' ) )
			);

			if ( class_exists( 'Tgmsp_Updates' ) ) {
				$menu_items['mcgsoliloquy-updates'] = array(
					'parent' => $mcgsoliloquy,
					'title'  => __( 'Updates', 'genesis-toolbar-extras' ),
					'href'   => admin_url( 'edit.php?post_type=soliloquy&page=soliloquy-updates' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Updates', 'genesis-toolbar-extras' ) )
				);
			}  // end-if class check

		}  // end-if Soliloquy premium features

	}  // end-if Soliloquy

	/**
	 * RoyalSlider (premium, by Semenov)
	 *
	 * @since 1.4.0
	 */
	if ( class_exists( 'RoyalSliderAdmin' ) && current_user_can( 'manage_options' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcgroyalslider'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Royal Slider', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=royalslider' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Royal Slider', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgroyalslider-add'] = array(
			'parent' => $mcgroyalslider,
			'title'  => __( 'Add new Slider', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=royalslider&action=add_new' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Slider', 'genesis-toolbar-extras' ) )
		);

	}  // end-if RoyalSlider

	/**
	 * TouchCarousel (premium, by Semenov)
	 *
	 * @since 1.4.0
	 */
	if ( class_exists( 'TouchCarouselAdmin' ) && current_user_can( 'manage_options' ) ) {

		/** Enable display */
		$gtbe_is_mcgroup = 'mcgroup_yes';

		/** Entries at "Manage Content" section */
		$menu_items['mcgtouchcarousel'] = array(
			'parent' => $mcgroupstart,
			'title'  => __( 'Touch Carousel', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=touchcarousel' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Touch Carousel', 'genesis-toolbar-extras' ) )
		);
		$menu_items['mcgtouchcarousel-add'] = array(
			'parent' => $mcgtouchcarousel,
			'title'  => __( 'Add new Carousel', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=touchcarousel&action=add_new' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Carousel', 'genesis-toolbar-extras' ) )
		);

	}  // end-if TouchCarousel

	/** Manage Content Group - Display items */
	if ( $gtbe_is_mcgroup == 'mcgroup_yes' ) {
		$menu_items['mcgroupstart'] = array(
			'parent' => $mcgroup,
			'title'  => __( 'Manage Content', 'genesis-toolbar-extras' ),
			'href'   => false,
			'meta'   => array( 'target' => '', 'title' => __( 'Manage Content', 'genesis-toolbar-extras' ) . ' &raquo;' )
		);
	}  // end-if manage content display


	/**
	 * Premise (premium, by Copyblogger Media LLC)
	 *
	 * @since 1.0.0
	 */
	if ( class_exists( 'Premise_Base' ) ) {

		/** Include plugin file with neccessary code parts */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-premise.php' );

	}  // end-if premise check

/** End of Manage Content Group */
