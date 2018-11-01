<?php
/**
 * Display links to active Themedy Genesis Child Themes settings' pages
 * Only Themes by Themedy brand
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

/**
 * Setting default values for some variables
 *
 * @since 1.0.0
 */
$themedy_child_name = 'default';
$themedy_child_forum = 'default';
$gtbe_is_themedy_slide = 'default';
$gtbe_is_themedy_product = 'default';
$gtbe_is_themedy_portfolio = 'default';
$gtbe_is_themedy_photo = 'default';


/**
 * "Theme Settings" String for all Child Themes
 *
 * @since 1.0.0
 *
 * @param $gtbe_themesettings
 */
$gtbe_themesettings = '&nbsp;' . __( 'Theme Settings', 'genesis-toolbar-extras' );


/**
 * Display link to active Themedy Child theme settings page (premium, by Themedy)
 *
 * @since 1.0.0
 *
 * @param $themedy_child_name
 * @param $themedy_child_forum
 * @param $gtbe_is_themedy_slide
 * @param $gtbe_is_themedy_product
 * @param $gtbe_is_themedy_portfolio
 * @param $gtbe_is_themedy_photo
 * @param $gtbe_stylesheet_name
 */
	/** Check for Themedy Child Theme name */
		// Themedy: Cinchpress (premium)
	if ( CHILD_THEME_NAME == 'Cinchpress' || $gtbe_stylesheet_name == 'Cinchpress Child Theme' ) {
		$themedy_child_name = 'Cinchpress' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/cinchpress';

		// Themedy: Blink (premium)
	} elseif ( CHILD_THEME_NAME == 'Blink' || $gtbe_stylesheet_name == 'Blink Child Theme' ) {
		$themedy_child_name = 'Blink' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/blink';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Clip Cart (premium)
	} elseif ( CHILD_THEME_NAME == 'Clip Cart' || $gtbe_stylesheet_name == 'Clip Cart Child Theme' ) {
		$themedy_child_name = 'Clip Cart' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/clip-cart';
		$gtbe_is_themedy_slide = 'themedy_slide_yes';
		$gtbe_is_themedy_product = 'themedy_product_yes';

		// Themedy: Derby (premium)
	} elseif ( CHILD_THEME_NAME == 'Derby' || $gtbe_stylesheet_name == 'Derby Child Theme' ) {
		$themedy_child_name = 'Derby' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/derby';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Feedpop (premium)
	} elseif ( CHILD_THEME_NAME == 'Feedpop' || $gtbe_stylesheet_name == 'Feedpop Child Theme' ) {
		$themedy_child_name = 'Feedpop' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/feedpop';

		// Themedy: Foxy News (premium)
	} elseif ( CHILD_THEME_NAME == 'Foxy News' || $gtbe_stylesheet_name == 'Foxy News Child Theme' ) {
		$themedy_child_name = 'Foxy News' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/foxynews';

		// Themedy: Fremedy (free)
	} elseif ( CHILD_THEME_NAME == 'Fremedy' || $gtbe_stylesheet_name == 'Fremedy Child Theme' ) {
		$themedy_child_name = 'Fremedy' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/fremedy';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Grind (premium)
	} elseif ( CHILD_THEME_NAME == 'Grind' || $gtbe_stylesheet_name == 'FremeGrinddy Child Theme' ) {
		$themedy_child_name = 'Grind' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/grind';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Line It Up (premium)
	} elseif ( CHILD_THEME_NAME == 'Line It Up' || $gtbe_stylesheet_name == 'Line It Up Child Theme' ) {
		$themedy_child_name = 'Line It Up' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/line-it-up';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';
		$gtbe_is_themedy_slide = 'themedy_slide_yes';

		// Themedy: MockFive (premium)
	} elseif ( CHILD_THEME_NAME == 'MockFive' || $gtbe_stylesheet_name == 'MockFive Child Theme' ) {
		$themedy_child_name = 'MockFive' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/mockfive';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Reactiv (premium)
	} elseif ( CHILD_THEME_NAME == 'Reactiv' || $gtbe_stylesheet_name == 'Reactiv Child Theme' ) {
		$themedy_child_name = 'Reactiv' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/reactiv';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Readyfolio (premium)
	} elseif ( CHILD_THEME_NAME == 'Readyfolio' || $gtbe_stylesheet_name == 'Readyfolio Child Theme' ) {
		$themedy_child_name = 'Readyfolio' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/readyfolio';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Rough Print (premium)
	} elseif ( CHILD_THEME_NAME == 'Rough Print' || $gtbe_stylesheet_name == 'Rough Print Child Theme' ) {
		$themedy_child_name = 'Rough Print' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/rough-print';

		// Themedy: Smooth Post (premium)
	} elseif ( CHILD_THEME_NAME == 'Smooth Post' || $gtbe_stylesheet_name == 'Smooth Post Child Theme' ) {
		$themedy_child_name = 'Smooth Post' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/smooth-post';

		// Themedy: Stage (premium)
	} elseif ( CHILD_THEME_NAME == 'Stage' || $gtbe_stylesheet_name == 'Stage Child Theme' ) {
		$themedy_child_name = 'Stage' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/stage';
		$gtbe_is_themedy_photo = 'themedy_photo_yes';

		// Themedy: Tote (free)
	} elseif ( CHILD_THEME_NAME == 'Tote' || $gtbe_stylesheet_name == 'Tote Child Theme' ) {
		$themedy_child_name = 'Tote' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/tote';

	}  // end-if Themedy Child name check


	/** "Theme Group" menu items */
	if ( current_user_can( 'edit_theme_options' ) ) {

		/** Child type check */
		$gtbe_child_type_check = $themedysettings;

		/** "Theme Group" menu items */
		$menu_items['themedysettings'] = array(
			'parent' => $tgroup,
			'title'  => $themedy_child_name,
			'href'   => admin_url( 'themes.php?page=themedy' ),
			'meta'   => array( 'target' => '', 'title' => $themedy_child_name )
		);
	}  // end-if cap check


	/** Hook: themedy_theme_after_title */
	do_action( 'gtbe_themedy_after_title' );


	/** Display Themedy custom theme editor links for proper caps */
	if ( !( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT ) && current_user_can( 'edit_themes' ) ) {

		/** WordPress 3.4+ check */
		if ( function_exists( 'wp_get_theme' ) ) {
			$gtbe_edit_themedy_style = network_admin_url( 'theme-editor.php?file=custom/custom.css&amp;theme=' . get_stylesheet() );
			$gtbe_edit_themedy_functions = network_admin_url( 'theme-editor.php?file=custom/custom_functions.php&amp;theme=' . get_stylesheet() );
		} else {
			$gtbe_edit_themedy_style = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/custom/custom.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
			$gtbe_edit_themedy_functions = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/custom/custom_functions.php&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
		}  // end-if WP 3.4+ check

		/** Edit child theme's custom stylesheet (custom/custom.css) */
		if ( function_exists( 'themedy_get_option' ) && themedy_get_option( 'custom' ) ) {
			$menu_items['themedy-editcustomcss'] = array(
				'parent' => $themedysettings,
				'title'  => __( 'Edit custom.css', 'genesis-toolbar-extras' ),
				'href'   => $gtbe_edit_themedy_style,
				'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme custom stylesheet: custom.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if themedy options check

		/** Edit child theme's custom functions (custom/custom_functions.php) */
		$menu_items['themedy-editcustomfunctions'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Edit custom_functions.php', 'genesis-toolbar-extras' ),
			'href'   => $gtbe_edit_themedy_functions,
			'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme custom functions: custom_functions.php', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if Themedy theme editor check

	/** Display Readme.txt Child Theme Info */
	if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
		$menu_items['themedy-readme'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=genesis-readme' ),
			'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
		);
	}  /** If Genesis class not exists use own class */
	elseif ( class_exists( 'DDW_GTBE_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
		$menu_items['themedy-readme'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=gtbe-readme' ),
			'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
		);
	}  // end-if readme check

	/** Child Theme Support Forum */
	$menu_items['themedy-support'] = array(
		'parent' => $themedysettings,
		'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
		'href'   => $themedy_child_forum,
		'meta'   => array( 'title' => __( 'Support Forum for Child Theme', 'genesis-toolbar-extras' ) )
	);

	/** Check for custom background support */
	if ( current_theme_supports( 'custom-background' ) ) {
		$menu_items['themedy-background'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Background', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=custom-background' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Background', 'genesis-toolbar-extras' ) )
		);
	}  // end-if custom background

	/** Check for custom header support */
	if ( current_theme_supports( 'custom-header' ) ) {
		$menu_items['themedy-header'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Header', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=custom-header' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Header', 'genesis-toolbar-extras' ) )
		);
	}  // end-if custom header


/** Portfolio CPT entries - only if available */
if ( ( $gtbe_is_themedy_portfolio == 'themedy_portfolio_yes' ) && current_user_can( 'edit_posts' ) ) {

	/** Enable display */
	$gtbe_is_mcgroup = 'mcgroup_yes';

	/** Entries at "Child Theme" section */
	$menu_items['themedyportfolio'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyportfolio-add'] = array(
		'parent' => $themedyportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyportfolio-categories'] = array(
		'parent' => $themedyportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio-category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);

	/** Entries at "Manage Content" section */
	$menu_items['mcgthemedyportfolio'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyportfolio-add'] = array(
		'parent' => $mcgthemedyportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyportfolio-categories'] = array(
		'parent' => $mcgthemedyportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio-category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);
}  // end-if portfolio section


/** Slide CPT entries - only if available */
if ( ( $gtbe_is_themedy_slide == 'themedy_slide_yes' ) && current_user_can( 'edit_posts' ) ) {

	/** Enable display */
	$gtbe_is_mcgroup = 'mcgroup_yes';

	/** Entries at "Child Theme" section */
	$menu_items['themedyslide'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyslide-add'] = array(
		'parent' => $themedyslide,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);

	/** Entries at "Manage Content" section */
	$menu_items['mcgthemedyslide'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyslide-add'] = array(
		'parent' => $mcgthemedyslide,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);
}  // end-if slide section


/** Photo CPT entries - only if available */
if ( ( $gtbe_is_themedy_photo == 'themedy_photo_yes' ) && current_user_can( 'edit_posts' ) ) {

	/** Enable display */
	$gtbe_is_mcgroup = 'mcgroup_yes';

	/** Entries at "Child Theme" section */
	$menu_items['themedyphoto'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyphoto-add'] = array(
		'parent' => $themedyphoto,
		'title'  => __( 'Add new Photo', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Photo', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyphoto-galleries'] = array(
		'parent' => $themedyphoto,
		'title'  => __( 'Photo Galleries', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=galleries&post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Photo Galleries', 'genesis-toolbar-extras' ) )
	);

	/** Entries at "Manage Content" section */
	$menu_items['mcgthemedyphoto'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyphoto-add'] = array(
		'parent' => $mcgthemedyphoto,
		'title'  => __( 'Add new Photo', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Photo', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyphoto-galleries'] = array(
		'parent' => $mcgthemedyphoto,
		'title'  => __( 'Photo Galleries', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=galleries&post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Photo Galleries', 'genesis-toolbar-extras' ) )
	);
}  // end-if photo section


/** Product CPT entries - only if available */
if ( ( $gtbe_is_themedy_product == 'themedy_product_yes' ) && current_user_can( 'edit_posts' ) ) {

	/** Enable display */
	$gtbe_is_mcgroup = 'mcgroup_yes';

	/** Entries at "Child Theme" section */
	$menu_items['themedyproduct'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyproduct-add'] = array(
		'parent' => $themedyproduct,
		'title'  => __( 'Add new Product', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Product', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyproduct-categories'] = array(
		'parent' => $themedyproduct,
		'title'  => __( 'Product Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=product-category&post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Product Categories', 'genesis-toolbar-extras' ) )
	);

	/** GCPTA Plugin */
	if ( function_exists( 'gcpta_init' ) ) {
		$menu_items['themedyproduct-gcpta'] = array(
			'parent' => $themedyproduct,
			'title'  => _x( 'Products', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
			'href'   => admin_url( 'edit.php?post_type=products&page=gcpta-products' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Products', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
		);
	}  // end-if GCPTA check

	/** Entries at "Manage Content" section */
	$menu_items['mcgthemedyproduct'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyproduct-add'] = array(
		'parent' => $mcgthemedyproduct,
		'title'  => __( 'Add new Product', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Product', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyproduct-categories'] = array(
		'parent' => $mcgthemedyproduct,
		'title'  => __( 'Product Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=product-category&post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Product Categories', 'genesis-toolbar-extras' ) )
	);

	/** GCPTA Plugin */
	if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['mcgthemedyproduct-gcpta'] = array(
			'parent' => $mcgthemedyproduct,
			'title'  => _x( 'Products', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings,
			'href'   => admin_url( 'edit.php?post_type=products&page=gcpta-products' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Products', 'Translators: For GCPTA Plugin Archives', 'genesis-toolbar-extras' ) . $gtbe_gcpta_archives_settings )
		);
	}  // end-if GCPTA check

}  // end-if product section


/** Entries at "Genesis Support" section */
$menu_items['genesissupport-themedy'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Themedy Support Forum', 'genesis-toolbar-extras' ),
	'href'   => 'http://themedy.com/forum/',
	'meta'   => array( 'title' => __( 'Themedy Support Forum', 'genesis-toolbar-extras' ) )
);
$menu_items['genesissupport-themedyprofile'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Themedy User Profile', 'genesis-toolbar-extras' ),
	'href'   => 'http://themedy.com/forum/profile',
	'meta'   => array( 'title' => __( 'Themedy User Profile', 'genesis-toolbar-extras' ) )
);
