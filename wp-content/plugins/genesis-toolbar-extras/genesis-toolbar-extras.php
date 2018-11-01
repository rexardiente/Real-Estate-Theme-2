<?php 
/**
 * Main plugin file.
 * This plugin adds useful admin settings links and massive resources
 * for Genesis Framework and its ecosystem to the WordPress Toolbar / Admin Bar.
 *
 * @package   Genesis Toolbar Extras
 * @author    David Decker
 * @link      http://twitter.com/deckerweb
 * @copyright Copyright 2012, David Decker - DECKERWEB
 *
 * @credits   Inspired and based on the plugin "WooThemes Admin Bar Addition" by Remkus de Vries @defries.
 * @link      http://remkusdevries.com/
 * @link      http://twitter.com/defries
 *
 * Plugin Name: Genesis Toolbar Extras
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * Description: This plugin adds useful admin settings links and massive resources for Genesis Framework and its ecosystem to the WordPress Toolbar / Admin Bar.
 * Version: 1.6.0
 * Author: David Decker - DECKERWEB
 * Author URI: http://deckerweb.de/
 * License: GPLv2 or later
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 * Text Domain: genesis-toolbar-extras
 * Domain Path: /languages/
 *
 * Copyright 2012 David Decker - DECKERWEB
 *
 *     This file is part of Genesis Toolbar Extras,
 *     a plugin for WordPress.
 *
 *     Genesis Toolbar Extras is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 2 of the License, or (at your option)
 *     any later version.
 *
 *     Genesis Toolbar Extras is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Setting constants
 *
 * @since 1.0.0
 */
/** Plugin directory */
define( 'GTBE_PLUGIN_DIR', dirname( __FILE__ ) );

/** Plugin base directory */
define( 'GTBE_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );

/** Various link/content related helper constants */
define( 'GTBE_GBEGINNER_GDOCS', apply_filters( 'gtbe_filter_user_guide', 'http://docs.google.com/viewer?url=http%3A%2F%2Fwww.studiopress.com%2Fdownload%2Fgenesis-for-beginners.pdf' ) );
define( 'GTBE_VTUTORIALS_YTBE', apply_filters( 'gtbe_filter_video_tutorials', 'http://www.youtube.com/results?search_query=genesis+framework' ) );


add_action( 'init', 'ddw_gtbe_init' );
/**
 * Load the text domain for translation of the plugin.
 * Load admin helper functions - only within 'wp-admin'.
 * 
 * @since 1.0.0
 *
 * @param string $gtbe_wp_lang_dir
 * @param string $gtbe_lang_dir
 */
function ddw_gtbe_init() {

	/** Set filter for WordPress languages directory */
	$gtbe_wp_lang_dir = GTBE_PLUGIN_BASEDIR . '/../../languages/genesis-toolbar-extras/';
	$gtbe_wp_lang_dir = apply_filters( 'gtbe_filter_wp_lang_dir', $gtbe_wp_lang_dir );

	/** Set filter for plugin's languages directory */
	$gtbe_lang_dir = GTBE_PLUGIN_BASEDIR . '/languages/';
	$gtbe_lang_dir = apply_filters( 'gtbe_filter_lang_dir', $gtbe_lang_dir );

	/** First look in WordPress' "languages" folder = custom & update-secure! */
	load_plugin_textdomain( 'genesis-toolbar-extras', false, $gtbe_wp_lang_dir );

	/** Then look in plugin's "languages" folder = default */
	load_plugin_textdomain( 'genesis-toolbar-extras', false, $gtbe_lang_dir );

	/** Include admin helper functions */
	if ( is_admin() ) {

		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-admin.php' );

		if ( basename( get_template_directory() ) == 'genesis' ) {

			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-file-menus.php' );

			if ( ! class_exists( 'Genesis_Admin_Readme' ) ) {
				global $gtbe_admin_readme;
				$gtbe_admin_readme = new DDW_GTBE_Admin_Readme;
			}

			if ( file_exists( ddw_gtbe_filter_url_child_changelog() ) ) {
				global $gtbe_admin_changelog;
				$gtbe_admin_changelog = new DDW_GTBE_Admin_Changelog;
			}

		}  // end-if Genesis check

	}  // end-if is_admin check

	/** Define constants and set defaults for removing all or certain sections */
	if ( ! defined( 'GTBE_DISPLAY' ) ) {
		define( 'GTBE_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_RESOURCES_DISPLAY' ) ) {
		define( 'GTBE_RESOURCES_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_CHILD_THEME_DISPLAY' ) ) {
		define( 'GTBE_CHILD_THEME_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_EXTENSIONS_DISPLAY' ) ) {
		define( 'GTBE_EXTENSIONS_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_MANAGE_CONTENT_DISPLAY' ) ) {
		define( 'GTBE_MANAGE_CONTENT_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_DE_DISPLAY' ) ) {
		define( 'GTBE_DE_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_TRANSLATIONS_DISPLAY' ) ) {
		define( 'GTBE_TRANSLATIONS_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_MYSP_DISPLAY' ) ) {
		define( 'GTBE_MYSP_DISPLAY', TRUE );
	}

	if ( ! defined( 'GTBE_OLDFORUMS_DISPLAY' ) ) {
		define( 'GTBE_OLDFORUMS_DISPLAY', TRUE );
	}

}  // end of function ddw_gtbe_init


/**
 * Prepare for SEO plugin detection add to Genesis detection filter
 * 
 * @since 1.1.0
 *
 * @uses filter 'genesis_detect_seo_plugins'
 *
 * @param $gtbe_seo_plugins
 */
if ( class_exists( 'All_in_One_SEO_Pack_p' )
	|| defined( 'GDHEADSPACE4_PATH' )
	|| defined( 'SU_VERSION' )
	|| ( in_array( 'wpmu-dev-seo/wpmu-dev-seo.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
	|| ( in_array( 'gregs-high-performance-seo/ghpseo.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) )
) {

	add_filter( 'genesis_detect_seo_plugins', 'ddw_gtbe_add_seo_plugins' );
	/**
	 * Extend Genesis SEO detection filter with new values
	 */
	function ddw_gtbe_add_seo_plugins( $gtbe_seo_plugins ) {

		$gtbe_seo_plugins = array(
					/** Classes to detect */
					'classes' => array(
						'All_in_One_SEO_Pack_p',	// All In One SEO Pack Pro
						'gregsHighPerformanceSEO',	// Greg's High Performance SEO
					),
					/** Constants to detect */
					'constants' => array(
						'GDHEADSPACE4_PATH',		// gdHeadSpace4
						'SU_VERSION',			// SEO Ultimate
						'WDS_SITEMAP_POST_LIMIT',	// Infinite SEO (WPMU DEV)
					),
					/** Functions to detect */
					'functions' => array(
						'wds_get_value',		// Infinite SEO (WPMU DEV)
					),
		);  // end of array

		return $gtbe_seo_plugins;

	}  // end of function ddw_gtbe_add_seo_plugins

}  // end-if seo plugins prepare additions


add_action( 'admin_bar_menu', 'ddw_gtbe_admin_bar_menu', 98 );
/**
 * Add new menu items to the WordPress Toolbar / Admin Bar.
 * 
 * @since 1.0.0
 *
 * @global mixed $wp_admin_bar, $locale, $gtbe_child_type_check, $spchild, $spmarket, $tpchild, $gtbe_is_mcgroup, $theme, $stylesheet
 *
 * @param $gtbe_user
 */
function ddw_gtbe_admin_bar_menu() {

	global $wp_admin_bar, $locale, $gtbe_child_type_check, $gtbe_is_mcgroup, $theme, $stylesheet;

	/** Get current user - we need this for checking Genesis admin menu display options */
	$gtbe_user = wp_get_current_user();

	/**
	 * Allows for filtering the general user capability to see main & sub-level items
	 *
	 * Default capability: 'edit_posts' (needed for the "manage content" stuff...)
	 *
	 * @since 1.0.0
	 */
	$gtbe_filter_capability = apply_filters( 'gtbe_filter_capability_all', 'edit_posts' );

	/**
	 * Required WordPress cabability to display new admin bar entry
	 * Only showing items if toolbar / admin bar is activated and user is logged in!
	 *
	 * @since 1.0.0
	 */
	if ( ! is_user_logged_in()
		|| ! is_admin_bar_showing()
		|| ! current_user_can( $gtbe_filter_capability )	// allows for custom filtering the required capability
		|| ! get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID )  // users who can't see left G icon won't see toolbar items!
		|| ! GTBE_DISPLAY	// allows for custom disabling
	) {
		return;
	}


	/**
	 * Get current stylesheet name logic - compatible up to WordPress 3.4+!
	 *
	 * @since 1.1.0
	 *
	 * @param $gtbe_stylesheet_name
	 */
	if ( function_exists( 'wp_get_theme' ) ) {			// First, check for WP 3.4+ function wp_get_theme()
		$gtbe_stylesheet_name = wp_get_theme( $stylesheet );
	} elseif ( function_exists( 'get_current_theme' ) ) {		// Otherwise fall back to prior WP 3.4 default get_current_theme()
		$gtbe_stylesheet_name = get_current_theme();
	} // end-if stylesheet check


	/** Set unique prefix for toolbar ID */
	$prefix = 'ddw-genesis-';
	
	/** Create parent menu item references */
	$genesisbar = $prefix . 'admin-bar';				// root level
		$genesissupport = $prefix . 'genesissupport';			// sub level: genesis support
			$supportcommon = $prefix . 'supportcommon';			// third level: genesis support helper group
				$genesisoldsupport = $prefix . 'genesisoldsupport';		// fourth level: genesis old support forum
		$genesisguide = $prefix . 'genesisguide';			// sub level: genesis user guide
		$genesistutorials = $prefix . 'genesistutorials';			// third level: genesis tutorials
		$genesissites = $prefix . 'genesissites';			// sub level: genesis sites
			$genesisblog = $prefix . 'genesisblog';				// third level: genesis blog
			$genesisresources = $prefix . 'genesisresources';		// third level: genesis resources
			$genesisaffiliates = $prefix . 'genesisaffiliates';		// third level: genesis affiliates
		$gfindersearchform = $prefix . 'gfindersearchform';		// sub level: genesisfinder
		$genesissettings = $prefix . 'genesissettings';			// sub level: genesis settings
			$genesiscustom = $prefix . 'genesiscustom';			// third level: genesis custom file editor
			$genesisimportexport = $prefix . 'genesisimportexport';		// third level: genesis export/import
			$extgseoyoastseo = $prefix . 'extgseoyoastseo';			// third level: genesis seo plugins: yoast seo
			$extgseowpseo = $prefix . 'extgseowpseo';			// third level: genesis seo plugins: wpseo
			$extgseoultimate = $prefix . 'extgseoultimate';			// third level: genesis seo plugins: seo ultimate
			$extgseogdhs = $prefix . 'extgseogdhs';				// third level: genesis seo plugins: gdheadspace4
			$extgseoghpseo = $prefix . 'extgseoghpseo';			// third level: genesis seo plugins: g.h.p.seo
			$extgseowpmudev = $prefix . 'extgseowpmudev';			// third level: genesis seo plugins: infinite seo
		$extgroup = $prefix . 'extgroup';				// sub level: extend group ("hook" place)
			$tgroup = $prefix . 'tgroup';				// sub level: theme group ("hook" place)
				$spgenesischild = $prefix . 'spgenesischild';		// third level theme: sp genesis child themes
					$spgminimum2x = $prefix . 'spgminimum2x';	// third level theme: minimum 2.x portfolio
					$spgexecutive2x = $prefix . 'spgexecutive2x';	// third level theme: executive 2.x portfolio
				$spmarket = $prefix . 'spmarket';			// third level theme: sp marketplace child themes
				$themedysettings = $prefix . 'themedysettings';		// third level theme: themedy child themes
					$themedyportfolio = $prefix . 'themedyportfolio';	// third level theme: themedy portfolio cpt
					$themedyslide = $prefix . 'themedyslide';	// third level theme: themedy slide cpt
					$themedyphoto = $prefix . 'themedyphoto';	// third level theme: themedy photo cpt
					$themedyproduct = $prefix . 'themedyproduct';	// third level theme: themedy product cpt
				$tpchild = $prefix . 'tpchild';				// third level theme: third-party child themes
				$tpplugin_extender = $prefix . 'tpplugin_extender';	// third level theme: genesis extender (plugin)
				$gextendersettings = $prefix . 'gextendersettings';		// fourth level theme: g.extender settings
				$gextendercustom = $prefix . 'gextendercustom';			// fourth level theme: g.extender custom
				$tpchild_dynamik = $prefix . 'tpchild_dynamik';		// third level theme: dynamik genesis
				$dynamikdesign = $prefix . 'dynamikdesign';		// third level theme: dynamik genesis design
				$dynamikdesignstructure = $prefix . 'dynamikdesignstructure';	// third level theme: dynamik genesis design
				$dynamikdesigncontent = $prefix . 'dynamikdesigncontent';	// third level theme: dynamik genesis design
				$dynamikdesignextras = $prefix . 'dynamikdesignextras';	// third level theme: dynamik genesis design
				$dynamikcustom = $prefix . 'dynamikcustom';		// third level theme: dynamik genesis custom
				$dizain01portfolio = $prefix . 'dizain01portfolio';	// third level theme: dizain 01 portfolio
				$zzpportfolio = $prefix . 'zzpportfolio';		// third level theme: zigzagpress portfolio
				$zzpslides = $prefix . 'zzpslides';			// third level theme: zigzagpress slides
			$pgroup = $prefix . 'pgroup';				// sub level: plugins group ("hook" place)
				$extensions = $prefix . 'extensions';		// sub level: extensions
			$mcgroup = $prefix . 'mcgroup';				// sub level: manage content group ("hook" place)
				$mcgroupstart = $prefix . 'mcgroupstart';		// third level: mc group start
					$mcgthemedyportfolio = $prefix . 'mcgthemedyportfolio';	// third level theme: themedy portfolio cpt
					$mcgthemedyslide = $prefix . 'mcgthemedyslide';	// third level theme: themedy slide cpt
					$mcgthemedyphoto = $prefix . 'mcgthemedyphoto';	// third level theme: themedy photo cpt
					$mcgthemedyproduct = $prefix . 'mcgthemedyproduct';	// third level theme: themedy product cpt
					$mcginspyr = $prefix . 'mcginspyr';		// third level theme: (in)spyr
					$mcgdizain01 = $prefix . 'mcgdizain01';		// third level theme: dizain 01 portfolio
					$mcgzzpportfolio = $prefix . 'mcgzzpportfolio';	// third level theme: zigzagpress portfolio
					$mcgzzpslides = $prefix . 'mcgzzpslides';	// third level theme: zigzagpress slides
					$mcgspgminimum2x = $prefix . 'mcgspgminimum2x';	// third level theme: minimum 2.x portfolio
					$mcgspgexecutive2x = $prefix . 'mcgspgexecutive2x';	// third level theme: executive 2.x portfolio
					$mcgspapl = $prefix . 'mcgspapl';		// third level plugin: agentpress listings
					$mcggportfolio = $prefix . 'mcggportfolio';	// third level plugin: genesis portfolio
					$mcggmp = $prefix . 'mcggmp';			// third level plugin: genesis media project
					$mcggppt = $prefix . 'mcggppt';			// third level plugin: genesis press post type
					$mcggpbox = $prefix . 'mcggpbox';		// third level plugin: genesis promotion box
					$mcgspsurls = $prefix . 'mcgspsurls';		// third level plugin: simple urls
					$mcgsoliloquy = $prefix . 'mcgsoliloquy';	// third level plugin: soliloquy
					$mcgroyalslider = $prefix . 'mcgroyalslider';	// third level plugin: royal slider
					$mcgtouchcarousel = $prefix . 'mcgtouchcarousel';	// third level plugin: touch carousel
				$premise = $prefix . 'premise';				// third level: premise
					$premiselanding = $prefix . 'premiselanding';	// third level: premise landing pages
					$premisesettings = $prefix . 'premisesettings';	// third level: premise settings
				$premisemember = $prefix . 'premisemember';		// third level: premise member access
				$premisemember_products = $prefix . 'premisemember_products';	// fourth level: premise products
				$premisemember_coupons = $prefix . 'premisemember_coupons';	// fourth level: premise coupons
				$premisemember_links = $prefix . 'premisemember_links';		// fourth level: premise links
				$premisemember_members = $prefix . 'premisemember_members';	// fourth level: premise members
		$genesisgroup = $prefix . 'genesisgroup';			// sub level: genesis group (resources)
			$tpsgroup = $prefix . 'tpsgroup';				// third level: tps group (third-party support)
			$languagesde = $prefix . 'languagesde';				// third level: german language packs
			$translate = $prefix . 'translate';				// third level: genesis translations


	/** Make the "Genesis" name filterable within menu items */
	$gtbe_genesis_name = apply_filters( 'gtbe_filter_genesis_name', __( 'Genesis', 'genesis-toolbar-extras' ) );

	/** Make the "Genesis" name's tooltip filterable within menu items */
	$gtbe_genesis_name_tooltip = apply_filters( 'gtbe_filter_genesis_name_tooltip', _x( 'Genesis', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) );


	/** For the GenesisFinder.com search */
	$gtbe_search_gfinder = __( 'GenesisFinder Search', 'genesis-toolbar-extras' );
	$gtbe_go_button = '<input type="submit" value="' . __( 'GO', 'genesis-toolbar-extras' ) . '" class="gtbe-search-go"  /></form>';


	/** Display these items also when Genesis Framework is not installed */
	if ( GTBE_RESOURCES_DISPLAY ) {

		/** Include plugin file with resources links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-resources.php' );

	}  // end-if constant check for displaying resources


	/** Display language specific links only for these locales: de_DE, de_AT, de_CH, de_LU */
	if ( GTBE_DE_DISPLAY && ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) ) {

		/** Include plugin file with German language resources links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-translations-german.php' );

	}  // end-if German locales


	/** Translate Genesis section - only display for non-English locales */
	if ( GTBE_TRANSLATIONS_DISPLAY && ( empty( $locale ) || !( get_locale() == 'en_US' || get_locale() == 'en_GB' || get_locale() == 'en_NZ' || get_locale() == 'en' ) ) ) {

		/** Include plugin file with translations resources links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-translations.php' );

	}  // end-if translate genesis


	/** Show these items only if Genesis Framework is actually installed */
	if ( defined( 'GENESIS_SETTINGS_FIELD' ) && current_user_can( 'edit_theme_options' ) ) {

		/** Main settings link */
		$gtbe_aurl_genesis_main = admin_url( 'admin.php?page=genesis' );

		/** Genesis Theme Settings section */
		if ( current_theme_supports( 'genesis-admin-menu' ) && get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID ) ) {
			$menu_items['genesissettings'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'Theme Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Theme Settings', 'genesis-toolbar-extras' ) )
			);
			$menu_items['genesiswidgets'] = array(
				'parent' => $genesissettings,
				'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . __( 'Widgets', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'widgets.php' ),
				'meta'   => array( 'target' => '', 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . __( 'Widgets', 'genesis-toolbar-extras' ) )
			);
			$menu_items['genesismenus'] = array(
				'parent' => $genesissettings,
				'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . __( 'Menus', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'nav-menus.php' ),
				'meta'   => array( 'target' => '', 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . __( 'Menus', 'genesis-toolbar-extras' ) )
			);

			/** Check for custom background support */
			if ( current_theme_supports( 'custom-background' ) ) {
				$menu_items['theme-background'] = array(
					'parent' => $genesissettings,
					'title'  => __( 'Custom Background', 'genesis-toolbar-extras' ),
					'href'   => admin_url( 'themes.php?page=custom-background' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Custom Background', 'genesis-toolbar-extras' ) )
				);
			}  // end-if custom background

			/** Header Image section - Check for custom header support */
			if ( current_theme_supports( 'custom-header' ) ) {
				$menu_items['theme-header'] = array(
					'parent' => $genesissettings,
					'title'  => __( 'Custom Header', 'genesis-toolbar-extras' ),
					'href'   => admin_url( 'themes.php?page=custom-header' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Custom Header', 'genesis-toolbar-extras' ) )
				);
			}  // end-if custom header

		}  // end-if admin/theme menu check

		/** Genesis SEO Options section */
		if ( ! genesis_detect_seo_plugins() && current_theme_supports( 'genesis-seo-settings-menu' ) && get_the_author_meta( 'genesis_seo_settings_menu', $gtbe_user->ID ) ) {
			$menu_items['genesisseo'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'SEO Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=seo-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'SEO Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if seo menu check

		/** Import & Export section */
		if ( current_theme_supports( 'genesis-import-export-menu' ) && get_the_author_meta( 'genesis_import_export_menu', $gtbe_user->ID ) ) {
			$menu_items['genesisimportexport'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'Import &amp; Export', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-import-export' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Import &amp; Export', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if import/export menu check

		/** Conditionally support SEO plugins with Genesis SEO plugin detection */
		if ( ( function_exists( 'genesis_detect_seo_plugins' ) && genesis_detect_seo_plugins() ) && get_the_author_meta( 'genesis_seo_settings_menu', $gtbe_user->ID ) ) {

			/** Include plugin file with seo plugin support links */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-seoplugins.php' );

		}  // end-if seo plugins check

		/**
		 * Display last main item in the menu for active extensions/plugins
		 * ATTENTION: This is where plugins/extensions hook in on the sub-level hierarchy
		 *
		 * @since 1.0.0
		 */
		if ( GTBE_EXTENSIONS_DISPLAY
			&& (
				current_theme_supports( 'genesis-admin-menu' )
				&& get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID )
			) 
		) {
			$menu_items['extensions'] = array(
				'parent' => $pgroup,
				'title'  => __( 'Active Extensions', 'genesis-toolbar-extras' ),
				'href'   => is_network_admin() ? network_admin_url( 'plugins.php' ) : admin_url( 'plugins.php' ),
				'meta'   => array( 'target' => '', 'title' => sprintf( _x( 'Active %s Extensions Plugins', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ) )
			);
		}  // end-if constant check for displaying extensions

	} else {

		/** If Genesis is not active, to avoid PHP notices */
		$menu_items = $genesisgroup_menu_items;

		/** If Genesis is not active "void" main settings link */
		$gtbe_aurl_genesis_main = false;

	}  // end-if Genesis conditional


	/**
	 * "Archives Settings" String for all 'GCPTA Plugin Archive Settings'
	 *
	 * @since 1.1.0
	 *
	 * @param $gtbe_gcpta_archives_settings
	 */
	$gtbe_gcpta_archives_settings = '&nbsp;' . __( 'Archives Settings', 'genesis-toolbar-extras' );


	/**
	 * Display links to active StudioPress Genesis Child Themes settings' pages
	 *
	 * @since 1.0.0
	 */
		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-studiopress.php' );


	/**
	 * Display links to active Themedy Genesis Child Themes settings' pages
	 *
	 * @since 1.0.0
	 */
	if ( function_exists( 'themedy_load_styles' ) ) {

		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themedy.php' );

	}  // end-if Themedy Genesis child theme check


	/**
	 * Display links to active (non-StudioPress/Themedy) Genesis Child Themes settings' pages
	 *
	 * @since 1.0.0
	 */
		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes.php' );

	/**
	 * Display links to active Genesis plugins/extensions settings' pages
	 *
	 * @since 1.0.0
	 */
		/** Include plugin file with plugin support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-plugins.php' );


	/** Allow menu items to be filtered, but pass in parent menu item IDs */
	$menu_items = (array) apply_filters( 'ddw_gtbe_menu_items', $menu_items,
									$genesisgroup_menu_items,
									$prefix,
									$genesisbar,
									$genesissupport,
										$supportcommon,
											$genesisoldsupport,
									$genesisguide,
									$genesistutorials,
									$genesissites,
									$genesisaffiliates,
									$gfindersearchform,
									$genesisblog,
									$genesisresources,
									$genesissettings,
									$genesiscustom,
									$genesisimportexport,
										$extgseoyoastseo,
										$extgseowpseo,
										$extgseoultimate,
										$extgseogdhs,
										$extgseoghpseo,
										$extgseowpmudev,
										$extensions,
										$extgroup,
									$spgenesischild,
										$spgminimum2x,
									$spmarket,
										$themedysettings,
										$themedyportfolio,
										$themedyslide,
										$themedyphoto,
										$themedyproduct,
									$tpchild,
									$tpplugin_extender,
									$gextendersettings,
									$gextendercustom,
									$tpchild_dynamik,
									$dynamikdesign,
									$dynamikcustom,
									$dynamikdesignstructure,
									$dynamikdesigncontent,
									$dynamikdesignextras,
									$dizain01portfolio,
									$zzpportfolio,
									$zzpslides,
										$mcgroup,
										$mcgroupstart,
										$mcgthemedyportfolio,
										$mcgthemedyslide,
										$mcgthemedyphoto,
										$mcgthemedyproduct,
										$mcginspyr,
										$mcgdizain01,
										$mcgzzpportfolio,
										$mcgzzpslides,
										$mcgspgminimum2x,
										$mcgspapl,
										$mcggportfolio,
										$mcggmp,
										$mcggppt,
										$mcggpbox,
										$mcgspsurls,
										$mcgsoliloquy,
										$mcgroyalslider,
										$mcgtouchcarousel,
									$premise,
									$premiselanding,
									$premisesettings,
									$premisemember,
									$premisemember_products,
									$premisemember_coupons,
									$premisemember_links,
									$premisemember_members,
										$tgroup,
										$pgroup,
									$genesisgroup,
									$tpsgroup,
									$languagesde
	);  // end of array


	/**
	 * Add the Genesis top-level menu item
	 *
	 * @since 1.0.0
	 *
	 * @param $gtbe_main_item_title
	 * @param $gtbe_main_item_title_tooltip
	 */
		/** Filter the main item name */
		$gtbe_main_item_title = apply_filters( 'gtbe_filter_main_item', __( 'Genesis', 'genesis-toolbar-extras' ) );

		/** Filter the main item name's tooltip */
		$gtbe_main_item_title_tooltip = apply_filters( 'gtbe_filter_main_item_tooltip', _x( 'Genesis Framework', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) );

		/** Filter the main item icon's class/display */
		$gtbe_main_item_icon_display = apply_filters( 'gtbe_filter_main_item_icon_display', 'icon-genesistbe' );

		/** Add the main item */
		$wp_admin_bar->add_menu( array(
			'id'    => $genesisbar,
			'title' => esc_attr__( $gtbe_main_item_title ),
			'href'  => $gtbe_aurl_genesis_main,
			'meta'  => array( 'class' => esc_attr( $gtbe_main_item_icon_display ), 'title' => esc_attr__( $gtbe_main_item_title_tooltip ) )
		) );


	/** Loop through the menu items */
	foreach ( $menu_items as $id => $menu_item ) {
		
		/** Add in the item ID */
		$menu_item['id'] = $prefix . $id;

		/** Add meta target to each item where it's not already set, so links open in new window/tab */
		if ( ! isset( $menu_item['meta']['target'] ) ) {
			$menu_item['meta']['target'] = '_blank';
		}

		/** Add class to links that open up in a new window/tab */
		if ( '_blank' === $menu_item['meta']['target'] ) {

			if ( ! isset( $menu_item['meta']['class'] ) ) {
				$menu_item['meta']['class'] = '';
			}

			$menu_item['meta']['class'] .= $prefix . 'gtbe-new-tab';

		}  // end-if menu values check

		/** Add menu items */
		$wp_admin_bar->add_menu( $menu_item );

	}  // end foreach menu items


	/**
	 * Action Hook 'gtbe_custom_main_items'
	 *   allows for hooking other main items in.
	 *
	 * @since 1.1.0
	 */
	do_action( 'gtbe_custom_main_items' );


	/** Extend Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $genesisbar,
		'id'     => $extgroup,
	) );

		/** Theme Group: Main Entry */
		if ( GTBE_CHILD_THEME_DISPLAY ) {
			$wp_admin_bar->add_group( array(
				'parent' => $extgroup,
				'id'     => $tgroup,
			) );
		}  // end-if constant check for displaying theme group


			/** Add extra group for 'Genesis Extender' plugin */
			if ( CHILD_THEME_NAME != 'Dynamik Website Builder'	// do not activate for Dynamik Genesis version!
				&& current_user_can( 'manage_options' )
				&& defined( 'GENEXT_VERSION' )
			) {

				/** Add special group for the items within child theme area */
				$wp_admin_bar->add_group( array(
					'parent' => $tgroup,
					'id'     => $tpplugin_extender,
				) );

			}  // end-if Genesis Extender check

		/**
		 * Action Hook 'gtbe_custom_theme_items'
		 *   allows for hooking other theme-related items in.
		 *
		 * @since 1.1.0
		 */
		do_action( 'gtbe_custom_theme_items' );

		/** Plugin Group: Main Entry */
		$wp_admin_bar->add_group( array(
			'parent' => $extgroup,
			'id'     => $pgroup,
		) );

		/** Manage Content Group: Main Entry */
		if ( GTBE_MANAGE_CONTENT_DISPLAY && current_user_can( 'edit_posts' ) ) {
			$wp_admin_bar->add_group( array(
				'parent' => $extgroup,
				'id'     => $mcgroup,
			) );
		}  // end-if constant check for displaying manage content group

		/**
		 * Action Hook 'gtbe_custom_extend_items'
		 *   allows for hooking other extend items in.
		 *
		 * @since 1.1.0
		 */
		do_action( 'gtbe_custom_extend_items' );


	/** Genesis Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $genesisbar,
		'id'     => $genesisgroup,
		'meta'   => array( 'class' => 'ab-sub-secondary' )
	) );


	/** Genesis Group: Loop through the group menu items */
	foreach ( $genesisgroup_menu_items as $id => $genesisgroup_menu_item ) {
		
		/** Genesis Group: Add in the item ID */
		$genesisgroup_menu_item['id'] = $prefix . $id;

		/** Genesis Group: Add meta target to each item where it's not already set, so links open in new window/tab */
		if ( ! isset( $genesisgroup_menu_item['meta']['target'] ) ) {
			$genesisgroup_menu_item['meta']['target'] = '_blank';
		}

		/** Genesis Group: Add class to links that open up in a new window/tab */
		if ( '_blank' === $genesisgroup_menu_item['meta']['target'] ) {

			if ( ! isset( $genesisgroup_menu_item['meta']['class'] ) ) {
				$genesisgroup_menu_item['meta']['class'] = '';
			}

			$genesisgroup_menu_item['meta']['class'] .= $prefix . 'gtbe-new-tab';

		}  // end-if menu values check

		/** Genesis Group: Add menu items */
		$wp_admin_bar->add_menu( $genesisgroup_menu_item );

	}  // end foreach Genesis Group


	/** Common Support Resources: Group Helper Item */
	$wp_admin_bar->add_group( array(
		'parent' => $genesissupport,
		'id'     => $supportcommon,
	) );


	/** TPS (Third-Party-Support) Group: Sub-Level Entry (under "Genesis Support") */
	$wp_admin_bar->add_group( array(
		'parent' => $genesissupport,
		'id'     => $tpsgroup,
	) );


	/**
	 * Action Hook 'gtbe_custom_group_items'
	 *   allows for hooking other Genesis Group items in.
	 *
	 * @since 1.1.0
	 */
	do_action( 'gtbe_custom_group_items' );

}  // end of main function ddw_gtbe_admin_bar_menu


add_action( 'wp_head', 'ddw_gtbe_admin_style' );
add_action( 'admin_head', 'ddw_gtbe_admin_style' );
/**
 * Add the styles for new WordPress Toolbar / Admin Bar entry
 * 
 * @since 1.0.0
 *
 * @param $gtbe_main_icon
 */
function ddw_gtbe_admin_style() {

	/** No styles if admin bar is disabled or user is not logged in or items are disabled via constant */
	if ( ! is_admin_bar_showing()
		|| ! is_user_logged_in()
		|| ! GTBE_DISPLAY
	) {
		return;
	}

	/** Add CSS styles to wp_head/admin_head */
	$gtbe_main_icon = apply_filters( 'gtbe_filter_main_icon', plugins_url( 'genesis-toolbar-extras/images/icon-genesistbe.png', dirname( __FILE__ ) ) );

	?>
	<style type="text/css">
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-genesistbe:hover > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-genesistbe.hover > .ab-item,
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-genesistbe > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-genesistbe > .ab-item {
      			background-image: url(<?php echo esc_url_raw( $gtbe_main_icon ); ?>);
			background-repeat: no-repeat;
			background-position: 0.85em 50%;
			padding-left: 30px;
		}
		#wp-admin-bar-ddw-genesis-languagesde > .ab-item:before,
		#wp-admin-bar-ddw-genesis-translate > .ab-item:before {
			color: #ff9900;
			content: '• ';
		}
		#wp-admin-bar-ddw-genesis-dynamikdesignstructure .ab-item,
		#wp-admin-bar-ddw-genesis-dynamikdesigncontent .ab-item,
		#wp-admin-bar-ddw-genesis-dynamikdesignextras .ab-item,
		#wp-admin-bar-ddw-genesis-mcgroupstart .ab-item {
			color: #21759b !important;
		}
		#wpadminbar li:hover ul ul {
			left: 0;
		}
		#wpadminbar .gtbe-search-input,
		#wpadminbar .gtbe-search-go {
			color: #21759b !important;
			text-shadow: none;
		}
		#wpadminbar .gtbe-search-input,
		#wpadminbar .gtbe-search-go {
			background-color: #fff;
			height: 18px;
			line-height: 18px;
			padding: 1px 4px;
		}
		#wpadminbar .gtbe-search-go {
			-webkit-border-radius: 11px;
			   -moz-border-radius: 11px;
			        border-radius: 11px;
			font-size: 0.67em;
			margin: 0 0 0 2px;
		}
		#wpadminbar #wp-admin-bar-ddw-genesis-tpplugin_extender.ab-submenu {
			border-top: 0 none !important;
			margin-top: -10px !important;
		}
	</style>
	<?php

}  // end of function ddw_gtbe_admin_style


/**
 * Helper functions with special theme support stuff.
 *
 * @since 1.5.0
 */
	/** Include plugin file with extra theme support links */
	require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-extra.php' );


/**
 * Helper functions for custom branding of the plugin.
 *
 * @since 1.0.0
 */
	/** Include plugin file with special custom stuff */
	require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-branding.php' );


/**
 * Returns current plugin's header data in a flexible way.
 *
 * @since 1.5.0
 *
 * @uses get_plugins()
 *
 * @param $gtbe_plugin_value
 * @param $gtbe_plugin_folder
 * @param $gtbe_plugin_file
 *
 * @return string Plugin data.
 */
function ddw_gtbe_plugin_get_data( $gtbe_plugin_value ) {

	if ( ! function_exists( 'get_plugins' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}

	$gtbe_plugin_folder = get_plugins( '/' . plugin_basename( dirname( __FILE__ ) ) );
	$gtbe_plugin_file = basename( ( __FILE__ ) );

	return $gtbe_plugin_folder[ $gtbe_plugin_file ][ $gtbe_plugin_value ];

}  // end of function ddw_gtbe_plugin_get_data
