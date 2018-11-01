<?php
/**
 * Display links to active SEO plugins/extensions settings' pages
 * supported by Genesis SEO Plugin detection
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.1.0
 */

/**
 * "SEO Plugin" String for all supported SEO Plugins
 *
 * @since 1.1.0
 *
 * @param $gtbe_seoplugin
 */
$gtbe_seoplugin = __( 'SEO Plugin', 'genesis-toolbar-extras' ) . ': ';


/**
 * WordPress SEO by Yoast (free, by Joost de Valk)
 *
 * @since 1.1.0
 */
if ( defined( 'WPSEO_VERSION' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseoyoastseo'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'WordPress SEO',
		'href'   => admin_url( 'admin.php?page=wpseo_dashboard' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'WordPress SEO by Yoast - Dashboard', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoyoastseo-titles'] = array(
		'parent' => $extgseoyoastseo,
		'title'  => __( 'Titles &amp; Metas', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wpseo_titles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Titles &amp; Metas', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoyoastseo-permalinks'] = array(
		'parent' => $extgseoyoastseo,
		'title'  => __( 'Permalinks', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wpseo_permalinks' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Permalinks', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoyoastseo-internal'] = array(
		'parent' => $extgseoyoastseo,
		'title'  => __( 'Internal Links', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wpseo_internal-links' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Internal Links', 'genesis-toolbar-extras' ) )
	);

}  // end-if WordPress SEO by Yoast


/**
 * All In One SEO Pack (free, by Michael Torbert)
 *
 * @since 1.1.0
 */
if ( ( defined( 'AIOSEOP_VERSION' ) || ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'all-in-one-seo-pack/all_in_one_seo_pack.php' ) ) ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseo-aiosp'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . __( 'AIO SEO Pack', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=all-in-one-seo-pack/aioseop.class.php' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'All In One SEO Pack', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if All In One SEO Pack


/**
 * All In One SEO Pack Pro (premium, by Michael Torbert)
 *
 * @since 1.1.0
 */
if ( ( class_exists( 'All_in_One_SEO_Pack_p' ) || ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'all-in-one-seo-pack-pro/all_in_one_seo_pack.php' ) ) ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseo-aiosppro'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . __( 'AIO SEO Pack Pro', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=all-in-one-seo-pack-pro/aioseop.class.php' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'All In One SEO Pack Pro', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if All In One SEO Pack Pro


/**
 * wpSEO (premium, by Sergej Müller)
 *
 * @since 1.1.0
 */
if ( class_exists( 'wpSEO' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseowpseo'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . __( 'wpSEO Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=wpseo' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . __( 'wpSEO Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseowpseo-monitor'] = array(
		'parent' => $extgseowpseo,
		'title'  => __( 'SEO Monitor', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'index.php#wpseo_misc_monitor' ),
		'meta'   => array( 'target' => '', 'title' => __( 'SEO Monitor', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseowpseo-helpdesk'] = array(
		'parent' => $extgseowpseo,
		'title'  => __( 'Helpdesk', 'genesis-toolbar-extras' ),
		'href'   => 'http://helpdesk.wpseo.de/',
		'meta'   => array( 'title' => __( 'Helpdesk - Support', 'genesis-toolbar-extras' ) )
	);

}  // end-if wpSEO


/**
 * SEO Ultimate (free, by SEO Design Solutions)
 *
 * @since 1.1.0
 */
if ( defined( 'SU_PLUGIN_NAME' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseoultimate'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'SEO Ultimate',
		'href'   => admin_url( 'admin.php?page=su-titles' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'SEO Ultimate Title Settings', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoultimate-metadesc'] = array(
		'parent' => $extgseoultimate,
		'title'  => __( 'Meta Description Editor', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=su-meta-descriptions' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Meta Description Editor', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoultimate-modules'] = array(
		'parent' => $extgseoultimate,
		'title'  => __( 'More Moduls &amp; Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=seo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'More Moduls &amp; Settings', 'genesis-toolbar-extras' ) )
	);

}  // end-if SEO Ultimate


/**
 * gdHeadSpace4 (free, by Milan Petrovic at Dev4Press)
 *
 * @since 1.1.0
 */
if ( defined( 'GDHEADSPACE4_PATH' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseogdhs'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'gdHeadSpace4',
		'href'   => admin_url( 'options-general.php?page=headspace_meta' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'gdHeadSpace4 - Meta Data', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseogdhs-pagesettings'] = array(
		'parent' => $extgseogdhs,
		'title'  => __( 'Page Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=headspace_options' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Page Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseogdhs-pagemodules'] = array(
		'parent' => $extgseogdhs,
		'title'  => __( 'Page Modules', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=headspace_options&sub=modules' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Page Modules', 'genesis-toolbar-extras' ) )
	);

}  // end-if gdHeadSpace4


/**
 * HeadSpace2 (free, by John Godley)
 *
 * @since 1.1.0
 */
if ( class_exists( 'HeadSpace2_Admin' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseoheadspace'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'HeadSpace2',
		'href'   => admin_url( 'options-general.php?page=headspace.php' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'HeadSpace2', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if HeadSpace2


/**
 * Platinum SEO Pack (free, by Rajesh)
 *
 * @since 1.1.0
 */
if ( class_exists( 'Platinum_SEO_Pack' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseoplatinumseo'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'Platinum SEO Pack',
		'href'   => admin_url( 'admin.php?page=platinum-seo-pack/platinum_seo_pack.php' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'Platinum SEO Pack', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if Platinum SEO Pack


/**
 * Greg's High Performance SEO (free, by Greg Mulhauser)
 *
 * @since 1.1.0
 */
if ( class_exists( 'gregsHighPerformanceSEO' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseoghpseo'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'Greg\'s H.P. SEO',
		'href'   => admin_url( 'options-general.php?page=gregs-high-performance-seo/ghpseo-options.php' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'Greg\'s High Performance SEO', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoghpseo-maintitles'] = array(
		'parent' => $extgseoghpseo,
		'title'  => __( 'Main Titles', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=gregs-high-performance-seo/ghpseo-options.php&submenu=maintitles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Main Titles', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoghpseo-sectitles'] = array(
		'parent' => $extgseoghpseo,
		'title'  => __( 'Secondary Titles', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=gregs-high-performance-seo/ghpseo-options.php&submenu=secondarytitles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Secondary Titles', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoghpseo-secdesc'] = array(
		'parent' => $extgseoghpseo,
		'title'  => __( 'Secondary Descriptions', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=gregs-high-performance-seo/ghpseo-options.php&submenu=secondarytitles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Secondary Descriptions', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseoghpseo-headmeta'] = array(
		'parent' => $extgseoghpseo,
		'title'  => __( 'Head Meta', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'options-general.php?page=gregs-high-performance-seo/ghpseo-options.php&submenu=headmeta' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Head Meta', 'genesis-toolbar-extras' ) )
	);

}  // end-if Greg's High Performance SEO


/**
 * Infinite Seo by WPMU DEV (premium, by WPMU DEV/ Ulrich Sossou (Incsub))
 *
 * @since 1.6.0
 */
if ( ( function_exists( 'wds_get_value' ) || defined( 'WDS_SITEMAP_POST_LIMIT' ) ) && current_user_can( 'manage_options' ) ) {

	$menu_items['extgseowpmudev'] = array(
		'parent' => $genesisbar,
		'title'  => $gtbe_seoplugin . 'Infinite SEO',
		'href'   => admin_url( 'options-general.php?page=wds_wizard' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_seoplugin . _x( 'Infinite SEO by WPMU DEV', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseowpmudev-titlemeta'] = array(
		'parent' => $extgseowpmudev,
		'title'  => __( 'Title &amp; Meta', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wds_wizard&step=3' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Title &amp; Meta', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseowpmudev-automatic'] = array(
		'parent' => $extgseowpmudev,
		'title'  => __( 'Automatic Links', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wds_wizard&step=5' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Automatic Links', 'genesis-toolbar-extras' ) )
	);
	$menu_items['extgseowpmudev-sitemaps'] = array(
		'parent' => $extgseowpmudev,
		'title'  => __( 'Sitemaps', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=wds_wizard&step=2' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Sitemaps', 'genesis-toolbar-extras' ) )
	);

}  // end-if Infinite SEO
