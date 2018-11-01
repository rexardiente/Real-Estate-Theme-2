<?php
/**
 * Display links to active Genesis Child Themes settings' pages: Executive 2.x Theme Specials
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.5.0
 */

/** Executive 2.x Theme Specials:
 *
 * @since 1.5.0
 */
/** Portfolio at Child Theme section: */
$menu_items['spgexecutive2x'] = array(
	'parent' => $spgenesischild,
	'title'  => 'Executive ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'edit.php?post_type=portfolio' ),
	'meta'   => array( 'target' => '', 'title' => 'Executive ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
);
$menu_items['spgexecutive2x-add'] = array(
	'parent' => $spgexecutive2x,
	'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
);

/** GCPTA Plugin */
if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['spgexecutive2x-gcpta'] = array(
		'parent' => $spgexecutive2x,
		'title'  => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
		'href'   => admin_url( 'edit.php?post_type=portfolio&page=gcpta-portfolio' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
	);
}  // end-if GCPTA check

/** Portfolio at "Manage Content" section: */
$gtbe_is_mcgroup = 'mcgroup_yes';
$menu_items['mcgspgexecutive2x'] = array(
	'parent' => $mcgroupstart,
	'title'  => 'Executive ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'edit.php?post_type=portfolio' ),
	'meta'   => array( 'target' => '', 'title' => 'Executive ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
);
$menu_items['mcgspgexecutive2x-add'] = array(
	'parent' => $mcgspgexecutive2x,
	'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
);

/** GCPTA Plugin */
if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
	$menu_items['mcgspgexecutive2x-gcpta'] = array(
		'parent' => $mcgspgexecutive2x,
		'title'  => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
		'href'   => admin_url( 'edit.php?post_type=portfolio&page=gcpta-portfolio' ),
		'meta'   => array( 'target' => '', 'title' => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
	);
}  // end-if GCPTA check
