<?php
/**
 * Helper functions for the admin - plugin links and help tabs.
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Admin
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0.0
 */

/**
 * Setting internal plugin helper links constants.
 *
 * @since 1.3.0
 */
define( 'GTBE_URL_TRANSLATE',		'http://translate.wpautobahn.com/projects/genesis-plugins-deckerweb/genesis-toolbar-extras' );
define( 'GTBE_URL_WPORG_FAQ',		'http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/' );
define( 'GTBE_URL_WPORG_FORUM',		'http://wordpress.org/support/plugin/genesis-toolbar-extras' );
define( 'GTBE_URL_WPORG_PROFILE',	'http://profiles.wordpress.org/daveshine/' );
define( 'GTBE_URL_SUGGESTIONS',		'http://twitter.com/deckerweb' );
define( 'GTBE_URL_SNIPPETS',		'https://gist.github.com/2198788' );
define( 'GTBE_PLUGIN_LICENSE', 		'GPLv2+' );
if ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) {
	define( 'GTBE_URL_DONATE', 	'http://genesisthemes.de/spenden/' );
	define( 'GTBE_URL_PLUGIN',	'http://genesisthemes.de/plugins/genesis-toolbar-extras/' );
} else {
	define( 'GTBE_URL_DONATE', 	'http://genesisthemes.de/en/donate/' );
	define( 'GTBE_URL_PLUGIN',	'http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/' );
}


add_filter( 'plugin_row_meta', 'ddw_gtbe_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0.0
 *
 * @param  $gtbe_links
 * @param  $gtbe_file
 *
 * @return strings plugin links
 */
function ddw_gtbe_plugin_links( $gtbe_links, $gtbe_file ) {

	/** Capability check */
	if ( ! current_user_can( 'install_plugins' ) ) {

		return $gtbe_links;

	}

	/** List additional links only for this plugin */
	if ( $gtbe_file == GTBE_PLUGIN_BASEDIR . '/genesis-toolbar-extras.php' ) {

		$gtbe_links[] = '<a href="' . esc_url_raw( GTBE_URL_WPORG_FAQ ) . '" target="_new" title="' . __( 'FAQ', 'genesis-toolbar-extras' ) . '">' . __( 'FAQ', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="' . esc_url_raw( GTBE_URL_WPORG_FORUM ) . '" target="_new" title="' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '">' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="' . esc_url_raw( GTBE_URL_TRANSLATE ) . '" target="_new" title="' . __( 'Translations', 'genesis-toolbar-extras' ) . '">' . __( 'Translations', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="' . esc_url_raw( GTBE_URL_DONATE ) . '" target="_new" title="' . __( 'Donate', 'genesis-toolbar-extras' ) . '">' . __( 'Donate', 'genesis-toolbar-extras' ) . '</a>';

	}

	/** Output the links */
	return $gtbe_links;

}  // end of function ddw_gtbe_plugin_links


add_action( 'load-toplevel_page_genesis', 'ddw_gtbe_genesis_help_tab', 15 );			// Genesis Core
add_action( 'load-genesis_page_seo-settings', 'ddw_gtbe_genesis_help_tab', 15 );		// Genesis SEO
add_action( 'load-genesis_page_genesis-import-export', 'ddw_gtbe_genesis_help_tab', 15 );	// Genesis Import/Export
add_action( 'load-genesis_page_design-settings', 'ddw_gtbe_genesis_help_tab', 15 );		// Prose Child Theme
add_action( 'load-genesis_page_prose-custom', 'ddw_gtbe_genesis_help_tab', 15 );		// Prose Custom Section
add_action( 'load-genesis_page_dynamik-settings', 'ddw_gtbe_genesis_help_tab', 15 );		// Dynamik Child Theme
add_action( 'load-genesis_page_dynamik-design', 'ddw_gtbe_genesis_help_tab', 15 );		// Dynamik Child Design
add_action( 'load-genesis_page_dynamik-custom', 'ddw_gtbe_genesis_help_tab', 15 );		// Dynamik Custom Section
/**
 * Create and display plugin help tab.
 *
 * @since 1.3.0
 *
 * @global mixed $gtbe_genesis_screen
 */
function ddw_gtbe_genesis_help_tab() {

	global $gtbe_genesis_screen;

	$gtbe_genesis_screen = get_current_screen();

	/** Display help tabs only for WordPress 3.3 or higher */
	if ( ! class_exists( 'WP_Screen' )
		|| ! $gtbe_genesis_screen
		|| ! GTBE_DISPLAY
	) {
		return;
	}

	/** Add the help tab */
	$gtbe_genesis_screen->add_help_tab( array(
		'id'       => 'gtbe-genesis-help',
		'title'    => __( 'Genesis Toolbar Extras', 'genesis-toolbar-extras' ),
		'callback' => 'ddw_gtbe_genesis_help_tab_content',
	) );

	/** Add help sidebar */
	$gtbe_genesis_screen->set_help_sidebar(
		'<p><strong>' . __( 'More about the plugin author', 'genesis-toolbar-extras' ) . '</strong></p>' .
		'<p>' . __( 'Social:', 'genesis-toolbar-extras' ) . '<br /><a href="http://twitter.com/deckerweb" target="_blank" title="@ Twitter">Twitter</a> | <a href="http://www.facebook.com/deckerweb.service" target="_blank" title="@ Facebook">Facebook</a> | <a href="http://deckerweb.de/gplus" target="_blank" title="@ Google+">Google+</a> | <a href="' . esc_url_raw( ddw_gtbe_plugin_get_data( 'AuthorURI' ) ) . '" target="_blank" title="@ deckerweb.de">deckerweb</a></p>' .
		'<p><a href="' . esc_url_raw( GTBE_URL_WPORG_PROFILE ) . '" target="_blank" title="@ WordPress.org">@ WordPress.org</a></p>'
	);

}  // end of function ddw_gtbe_genesis_help_tab


/**
 * Create and display plugin help tab content
 *
 * @since 1.3.0
 */
function ddw_gtbe_genesis_help_tab_content() {

	echo '<h3>' . __( 'Plugin', 'genesis-toolbar-extras' ) . ': ' . __( 'Genesis Toolbar Extras', 'genesis-toolbar-extras' ) . ' <small>v' . esc_attr( ddw_gtbe_plugin_get_data( 'Version' ) ) . '</small></h3>' .		
		'<ul>' . 
			'<li><a href="' . esc_url_raw( GTBE_URL_SUGGESTIONS ) . '" target="_new" title="' . __( 'Suggest new resource items, child themes or plugins for support', 'genesis-toolbar-extras' ) . '">' . __( 'Suggest new resource items, child themes or plugins for support', 'genesis-toolbar-extras' ) . '</a></li>' .
			'<li><a href="' . esc_url_raw( GTBE_URL_SNIPPETS ) . '" target="_new" title="' . __( 'Code snippets for customizing &amp; branding', 'genesis-toolbar-extras' ) . '">' . __( 'Code snippets for customizing &amp; branding', 'genesis-toolbar-extras' ) . '</a></li>';

		/** Optional: recommended plugins */
		if ( ! defined( 'GLE_PLUGIN_BASEDIR' )
			|| ! defined( 'GPSP_PLUGIN_BASEDIR' )
			|| ! defined( 'GWNF_PLUGIN_BASEDIR' )
			|| ! defined( 'GWAT_PLUGIN_BASEDIR' )
			|| ! defined( 'GDBN_PLUGIN_BASEDIR' )
		) {

			echo '<li><em>' . __( 'Other, recommended Genesis plugins', 'genesis-toolbar-extras' ) . '</em>:';

			if ( ! defined( 'GLE_PLUGIN_BASEDIR' ) ) {

				echo '<br />&raquo; <a href="http://wordpress.org/extend/plugins/genesis-layout-extras/" target="_new" title="Genesis Layout Extras">Genesis Layout Extras</a> &mdash; ' . __( 'allows modifying of default layouts for homepage, various archive, attachment, search, 404 pages via theme options', 'genesis-toolbar-extras' );

			}  // end-if plugin check

			if ( ! defined( 'GPSP_PLUGIN_BASEDIR' ) ) {

				echo '<br />&raquo; <a href="http://wordpress.org/extend/plugins/genesis-printstyle-plus/" target="_new" title="Genesis Printstyle Plus">Genesis Printstyle Plus</a> &mdash; ' . __( 'print your stuff out - and only what\'s needed', 'genesis-toolbar-extras' );

			}  // end-if plugin check

			if ( ! defined( 'GWNF_PLUGIN_BASEDIR' ) ) {

				echo '<br />&raquo; <a href="http://wordpress.org/extend/plugins/genesis-widgetized-notfound/" target="_new" title="Genesis Widgetized Not Found & 404">Genesis Widgetized Not Found & 404</a> &mdash; ' . __( 'be prepared for the edge cases - with easy to handle widget areas', 'genesis-toolbar-extras' );

			}  // end-if plugin check

			if ( ! defined( 'GWAT_PLUGIN_BASEDIR' ) ) {

				echo '<br />&raquo; <a href="http://wordpress.org/extend/plugins/genesis-widgetized-archive/" target="_new" title="Genesis Widgetized Archive">Genesis Widgetized Archive</a> &mdash; ' . __( 'use widgets to maintain &amp; customize your Archive Page Template', 'genesis-toolbar-extras' );

			}  // end-if plugin check

			if ( ! defined( 'GDBN_PLUGIN_BASEDIR' ) ) {

				echo '<br />&raquo; <a href="http://wordpress.org/extend/plugins/genesis-dashboard-news/" target="_new" title="Genesis Dashboard News">Genesis Dashboard News</a> &mdash; ' . __( 'News Planet for Genesis and its ecosystem right there in your WordPress dashboard', 'genesis-toolbar-extras' ) . ' &mdash; ' . __( 'for admins: fully customizeable with own parameters', 'genesis-toolbar-extras' );

			}  // end-if plugin check

			echo '</li>';

		}  // end-if plugins check

	echo '<li><em>' . __( 'Miscellaneous', 'genesis-toolbar-extras' ) . ':</em>' .
		'<br /><a href="http://genesisfinder.com/" target="_new" title="GenesisFinder.com"><strong>GenesisFinder.com</strong> &mdash; ' . __( 'Find then Create. Your Genesis Framework Search Engine.', 'genesis-toolbar-extras' ) . '</a>' .
		'</li>';

	echo '</ul>' .
		'<p><strong>' . __( 'Important plugin links:', 'genesis-toolbar-extras' ) . '</strong>' . 
		'<br /><a href="' . esc_url_raw( GTBE_URL_PLUGIN ) . '" target="_new" title="' . __( 'Plugin website', 'genesis-toolbar-extras' ) . '">' . __( 'Plugin website', 'genesis-toolbar-extras' ) . '</a> | <a href="' . esc_url_raw( GTBE_URL_WPORG_FAQ ) . '" target="_new" title="' . __( 'FAQ', 'genesis-toolbar-extras' ) . '">' . __( 'FAQ', 'genesis-toolbar-extras' ) . '</a> | <a href="' . esc_url_raw( GTBE_URL_WPORG_FORUM ) . '" target="_new" title="' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '">' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '</a> | <a href="' . esc_url_raw( GTBE_URL_TRANSLATE ) . '" target="_new" title="' . __( 'Translations', 'genesis-toolbar-extras' ) . '">' . __( 'Translations', 'genesis-toolbar-extras' ) . '</a> | <a href="' . esc_url_raw( GTBE_URL_DONATE ) . '" target="_new" title="' . __( 'Donate', 'genesis-toolbar-extras' ) . '">' . __( 'Donate', 'genesis-toolbar-extras' ) . '</a></p>';

	echo '<p><a href="http://www.opensource.org/licenses/gpl-license.php" target="_new" title="' . esc_attr( GTBE_PLUGIN_LICENSE ). '">' . esc_attr( GTBE_PLUGIN_LICENSE ). '</a> &copy; ' . date( 'Y' ) . ' <a href="' . esc_url_raw( ddw_gtbe_plugin_get_data( 'AuthorURI' ) ) . '" target="_new" title="' . esc_attr__( ddw_gtbe_plugin_get_data( 'Author' ) ) . '">' . esc_attr__( ddw_gtbe_plugin_get_data( 'Author' ) ) . '</a></p>';

}  // end of function ddw_gtbe_genesis_help_tab_content
