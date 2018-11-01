<?php
/**
 * Display links to active Genesis Child Themes settings' pages: (in)SPYR Theme Specials
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0.0
 */

/** (in)SPYR Theme Specials:
 *
 * @since 1.0.0
 */
/** Theme How To */
$menu_items['spmarket-inspyr-howto'] = array(
	'parent' => $spmarket,
	'title'  => __( 'Theme How To', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'admin.php?page=inspyr_howto' ),
	'meta'   => array( 'target' => '', 'title' => _x( 'Theme How To', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

/** Check for registered 'inspyr-slide' post type */
if ( function_exists( 'inspyr_flexslider_init' ) && post_type_exists( 'inspyr-slide' ) ) {

	/** Slides at Child Theme section: */
	$menu_items['spmarket-inspyr-slides'] = array(
		'parent' => $spmarket,
		'title'  => __( '(in)SPYR Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=inspyr-slide' ),
		'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Slides', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['spmarket-inspyr-slidesadd'] = array(
		'parent' => $spmarket,
		'title'  => __( '(in)SPYR Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=inspyr-slide' ),
		'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Add new Slide', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	/** Slides at "Manage Content" section: */
	$gtbe_is_mcgroup = 'mcgroup_yes';
	$menu_items['mcginspyr'] = array(
		'parent' => $mcgroupstart,
		'title'  => __( '(in)SPYR Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=inspyr-slide' ),
		'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Slides', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcginspyr-add'] = array(
		'parent' => $mcginspyr,
		'title'  => __( '(in)SPYR Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=inspyr-slide' ),
		'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Add new Slide', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if inspyr-slide cpt check
