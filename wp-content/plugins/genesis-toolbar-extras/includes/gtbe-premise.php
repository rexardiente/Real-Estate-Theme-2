<?php
/**
 * Display links to active "Premise" settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0.0
 */

/**
 * Premise (premium, by Copyblogger Media LLC)
 *
 * @since 1.0.0
 */
/** Premise Landing Pages Module */
$menu_items['premise'] = array(
	'parent' => $mcgroup,
	'title'  => __( 'Premise', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'admin.php?page=premise-main' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Premise Landing Pages &amp; Membership Content', 'genesis-toolbar-extras' ) )
);
$menu_items['premiselanding'] = array(
	'parent' => $premise,
	'title'  => __( 'Landing Pages', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'edit.php?post_type=landing_page' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Landing Pages', 'genesis-toolbar-extras' ) )
);
$menu_items['premiselanding-add'] = array(
	'parent' => $premiselanding,
	'title'  => __( 'Add new Landing Page', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'post-new.php?post_type=landing_page' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Add new Landing Page', 'genesis-toolbar-extras' ) )
);


/** Display only for WordPress capability 'manage_options' */
if ( current_user_can( 'manage_options' ) ) {

	$menu_items['premisesettings'] = array(
		'parent' => $premise,
		'title'  => __( 'Main Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-main' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Main Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-styles'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Style Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-styles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Style Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-addstyle'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Add new Style', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-style-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Style', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-buttons'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Button Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-buttons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Button Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-addbutton'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Add new Button', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'media-upload.php?post_id=0&type=premise-button-create&TB_iframe=1&height=700' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Button', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-custom'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Custom Code &amp; CSS', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-custom' ),
		'meta'   => array( 'title' => __( 'Custom Code &amp; CSS', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-help'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Premise Help', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-help' ),
		'meta'   => array( 'title' => __( 'Premise Help', 'genesis-toolbar-extras' ) )
	);

}  // end-if cap check


/**
 * Premise Membership Module
 *
 * NOTE: Requires Premise 2.2+ in order to support all links!
 */
if ( function_exists( 'memberaccess_init' ) &&		// Member module activated in Premise settings
	defined( 'PREMISE_MEMBER_DIR' ) &&		// Correct path
	current_user_can( 'manage_options' )		// Proper capability for admins
) {

	$menu_items['premisemember'] = array(
		'parent' => $mcgroup,
		'title'  => __( 'Premise Member Access', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-member' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Premise Member Access', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember_products'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Products', 'genesis-toolbar-extras' ) )
	);
		$menu_items['premisemember_products-add'] = array(
			'parent' => $premisemember_products,
			'title'  => __( 'Add new Product', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=acp-products' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Product', 'genesis-toolbar-extras' ) )
		);
	$menu_items['premisemember_coupons'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Coupons', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-coupons' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Coupons', 'genesis-toolbar-extras' ) )
	);
		$menu_items['premisemember_coupons-add'] = array(
			'parent' => $premisemember_coupons,
			'title'  => __( 'Add new Coupon', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=acp-coupons' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Coupon', 'genesis-toolbar-extras' ) )
		);
	$menu_items['premisemember-orders'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Orders', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-orders' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Orders', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-accesslevels'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Access Levels', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=acp-access-level&post_type=acp-products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Access Levels', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember_links'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Link Manager', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-links' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Link Manager', 'genesis-toolbar-extras' ) )
	);
		$menu_items['premisemember_links-add'] = array(
			'parent' => $premisemember_links,
			'title'  => __( 'Add new Link', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'post-new.php?post_type=acp-links' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Link', 'genesis-toolbar-extras' ) )
		);
	$menu_items['premisemember-reports'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Reports', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-reports' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Reports', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember_members'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Premise Members', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'users.php?role=premise_member' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Premise Members', 'genesis-toolbar-extras' ) )
	);
		$menu_items['premisemember_members-add'] = array(
			'parent' => $premisemember_members,
			'title'  => __( 'Add new Member', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'user-new.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Add new Member', 'genesis-toolbar-extras' ) )
		);
	$menu_items['premisemember-settings'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-member' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings', 'genesis-toolbar-extras' ) )
	);

}  // end-if premise member module
