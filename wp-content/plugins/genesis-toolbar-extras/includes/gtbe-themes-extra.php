<?php
/**
 * Display links to extra theme support links.
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

add_action( 'gtbe_spchild_after_title', 'ddw_gtbe_jetpack_cssedit' );		// Official StudioPress
add_action( 'gtbe_spmarket_after_title', 'ddw_gtbe_jetpack_cssedit' );		// Marketplace/Community
add_action( 'gtbe_tpchild_after_title', 'ddw_gtbe_jetpack_cssedit' );		// Third party
add_action( 'gtbe_themedy_after_title', 'ddw_gtbe_jetpack_cssedit' );		// Themedy brand
/**
 * Jetpack [Module: Custom CSS Editor] (free, by Automattic, Inc.)
 *
 * @since 1.5.0
 *
 * @uses hook 'gtbe_tpchild_after_title'
 * @global mixed $wp_admin_bar, $gtbe_child_type_check
 */
function ddw_gtbe_jetpack_cssedit() {

	/** Set globals */
	global $wp_admin_bar, $gtbe_child_type_check;

	/** First, check for active Jetpack plugin plus its activated module "Custom CSS" */
	if ( defined( 'JETPACK__VERSION' ) &&
		current_user_can( 'edit_theme_options' ) &&
		has_action( 'jetpack_modules_loaded', 'custom_css_loaded' )
	) {

		/** Add "Jetpack CSS Edit item" */
		$wp_admin_bar->add_menu( array(
			'parent' => $gtbe_child_type_check,
			'id'     => 'ddw-genesis-child-jetpackcss',
			'title'  => __( 'Jetpack Custom CSS Edit', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=editcss' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Jetpack Custom CSS Edit', 'genesis-toolbar-extras' ) )
		) );

	}  // end-if Jetpack CSS Edit

}  // end of function ddw_gtbe_jetpack_cssedit
