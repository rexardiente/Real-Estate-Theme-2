<?php
/**
 * Display the language resources links for German locales.
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
 * German language resources links collection
 *
 * @since 1.0.0
 */
/** German Genesis Framework language packs */
$genesisgroup_menu_items['languagesde'] = array(
	'parent' => $genesisgroup,
	'title'  => __( 'German language files', 'genesis-toolbar-extras' ),
	'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-framework/',
	'meta'   => array( 'title' => _x( 'German language files for Genesis Framework, Child Themes and more extensions', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

/** German Genesis Child Themes language packs */
$genesisgroup_menu_items['languagesde-childthemes'] = array(
	'parent' => $languagesde,
	'title'  => __( 'For Child Themes', 'genesis-toolbar-extras' ),
	'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-child-themes/',
	'meta'   => array( 'title' => _x( 'For Child Themes', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

/** German Genesis Plugins language packs */
$genesisgroup_menu_items['languagesde-plugins'] = array(
	'parent' => $languagesde,
	'title'  => __( 'For Plugins', 'genesis-toolbar-extras' ),
	'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-plugins/',
	'meta'   => array( 'title' => _x( 'For Plugins', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);
