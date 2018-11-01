<?php
/**
 * Display the translations resources links for non-English locales.
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Resources
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0.0
 */

/**
 * Translations resources links collection
 *
 * @since 1.0.0
 */
/** Translate Genesis section */
$genesisgroup_menu_items['translate'] = array(
	'parent' => $genesisgroup,
	'title'  => sprintf( __( 'Help Translate %s', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ),
	'href'   => 'http://translate.studiopress.com/projects',
	'meta'   => array( 'title' => sprintf( _x( '%s Translation Project', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ) )
);
$genesisgroup_menu_items['translate-register'] = array(
	'parent' => $translate,
	'title'  => __( 'Register to Translate', 'genesis-toolbar-extras' ),
	'href'   => 'http://translate.studiopress.com/home/',
	'meta'   => array( 'title' => sprintf( _x( 'Register to Translate %s', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ) )
);

/** Translations Forum */
$genesisgroup_menu_items['translate-forum'] = array(
	'parent' => $translate,
	'title'  => __( 'Translations Forum', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/support/forumdisplay.php?f=168',
	'meta'   => array( 'title' => sprintf( _x( 'Translations Forum (%s Support Forum)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ) )
);

/** Community Translations */
$genesisgroup_menu_items['translate-community'] = array(
	'parent' => $translate,
	'title'  => sprintf( __( '%s Community Translations', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ),
	'href'   => 'http://translate.wpautobahn.com/projects',
	'meta'   => array( 'title' => sprintf( _x( '%s Community Translations Project', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), esc_attr__( $gtbe_genesis_name ) ) )
);
$genesisgroup_menu_items['translate-community-register'] = array(
	'parent' => $translate,
	'title'  => __( 'Register for Community Translations', 'genesis-toolbar-extras' ),
	'href'   => 'http://translate.wpautobahn.com/home/',
	'meta'   => array( 'title' => _x( 'Register for Community Translations', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);
