<?php
/**
 * Display links to active Genesis Child Themes settings' pages: Dizain 01 Theme Specials
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.4.0
 */

/** Dizain 01 Theme Specials:
 *
 * @since 1.4.0
 */
/** Check for registered 'portfolio' post type */
if ( function_exists( 'dizain_post_types' ) && post_type_exists( 'portfolio' ) ) {

	/** Portfolio at Child Theme section: */
	$menu_items['dizain01portfolio'] = array(
		'parent' => $tpchild,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['dizain01portfolio-add'] = array(
		'parent' => $dizain01portfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['dizain01portfolio-categories'] = array(
		'parent' => $dizain01portfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio_category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);

	/** Portfolio at "Manage Content" section: */
	$gtbe_is_mcgroup = 'mcgroup_yes';
	$menu_items['mcgdizain01'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgdizain01-add'] = array(
		'parent' => $mcgdizain01,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgdizain01-categories'] = array(
		'parent' => $mcgdizain01,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio_category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);

}  // end-if portfolio cpt check
