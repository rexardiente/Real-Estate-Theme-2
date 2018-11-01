<?php
/**
 * Display links to active Genesis Child Themes settings' pages: ZIGZAGPRESS Theme Specials
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

/** ZIGZAGPRESS Theme Specials:
 *
 * @since 1.5.0
 */
/** Check for registered 'portfolio' post type */
if ( function_exists( 'register_portfolio_post_type' ) && post_type_exists( 'portfolio' ) ) {

	/** Portfolio at Child Theme section: */
	$menu_items['zzpportfolio'] = array(
		'parent' => $tpchild,
		'title'  => $gtbe_stylesheet_name . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_stylesheet_name . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['zzpportfolio-add'] = array(
		'parent' => $zzpportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['zzpportfolio-categories'] = array(
		'parent' => $zzpportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio_category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);

	/** GCPTA Plugin */
	if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['zzpportfolio-gcpta'] = array(
			'parent' => $zzpportfolio,
			'title'  => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
			'href'   => admin_url( 'edit.php?post_type=portfolio&page=gcpta-portfolio' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
		);
	}  // end-if GCPTA check

	/** Portfolio at "Manage Content" section: */
	$gtbe_is_mcgroup = 'mcgroup_yes';
	$menu_items['mcgzzpportfolio'] = array(
		'parent' => $mcgroupstart,
		'title'  => $gtbe_stylesheet_name . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_stylesheet_name . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgzzpportfolio-add'] = array(
		'parent' => $mcgzzpportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgzzpportfolio-categories'] = array(
		'parent' => $mcgzzpportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio_category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);

	/** GCPTA Plugin */
	if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['mcgzzpportfolio-gcpta'] = array(
			'parent' => $mcgzzpportfolio,
			'title'  => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
			'href'   => admin_url( 'edit.php?post_type=portfolio&page=gcpta-portfolio' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Portfolio', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
		);
	}  // end-if GCPTA check

}  // end-if portfolio cpt check


/** Check for registered 'slide' post type */
if ( class_exists( 'Slide' ) && post_type_exists( 'slide' ) ) {

	/** Slides at Child Theme section: */
	$menu_items['zzpslides'] = array(
		'parent' => $tpchild,
		'title'  => $gtbe_stylesheet_name . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_stylesheet_name . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['zzpslides-add'] = array(
		'parent' => $zzpslides,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);
	$menu_items['zzpslides-categories'] = array(
		'parent' => $zzpslides,
		'title'  => __( 'Slideshows', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=slideshow&post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Slideshows', 'genesis-toolbar-extras' ) )
	);

	/** Slides at "Manage Content" section: */
	$gtbe_is_mcgroup = 'mcgroup_yes';
	$menu_items['mcgzzpslides'] = array(
		'parent' => $mcgroupstart,
		'title'  => $gtbe_stylesheet_name . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => $gtbe_stylesheet_name . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgzzpslides-add'] = array(
		'parent' => $mcgzzpslides,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgzzpslides-categories'] = array(
		'parent' => $mcgzzpslides,
		'title'  => __( 'Slideshows', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=slideshow&post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Slideshows', 'genesis-toolbar-extras' ) )
	);

}  // end-if slide cpt check
