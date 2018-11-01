<?php
/**
 * Display the resource links for the "Genesis Group".
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
 * Resource links collection
 *
 * @since 1.0.0
 */
/** List the menu items */

/**
 * 1a) Support/my.SP menu items
 */
if ( ! GTBE_MYSP_DISPLAY ) {

	$genesisgroup_menu_items['genesissupport'] = array(
		'parent' => $genesisgroup,
		'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . _x( 'Community Support', 'Translators: Genesis commnity support', 'genesis-toolbar-extras' ),
		'href'   => 'http://www.studiopress.com/forums',
		'meta'   => array( 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . _x( 'Community Support - official community support (public)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

} else {

	$genesisgroup_menu_items['genesissupport'] = array(
		'parent' => $genesisgroup,
		'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . _x( 'Support my.SP', 'Translators: Genesis personal support HQ', 'genesis-toolbar-extras' ),
		'href'   => 'https://my.studiopress.com/',
		'meta'   => array( 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . _x( 'Support my.SP - official personal StudioPress Support Resources for Members', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if my.SP main item display check


if ( GTBE_MYSP_DISPLAY ) {

	$genesisgroup_menu_items['genesissupportmysprequest'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'Help Request', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/help/',
		'meta'   => array( 'title' => _x( 'Help Request', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesissupportmysptutorials'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'Tutorials', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/tutorials/',
		'meta'   => array( 'title' => _x( 'Tutorials', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesissupportmyspsnippets'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'Code Snippets', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/snippets/',
		'meta'   => array( 'title' => _x( 'Code Snippets', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesissupportmyspdownloads'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'My Downloads', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/',
		'meta'   => array( 'title' => _x( 'My Downloads', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesissupportmysppurchases'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'My Purchases', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/purchases/',
		'meta'   => array( 'title' => _x( 'My Purchases', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesissupportmyspinfo'] = array(
		'parent' => $genesissupport,
		'title'  => __( 'My Account Info', 'genesis-toolbar-extras' ),
		'href'   => 'http://my.studiopress.com/account/',
		'meta'   => array( 'title' => _x( 'My Account Info', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if my.SP display check


/**
 * 1b) Offical common recourses, plus old, read-only support forum:
 */
if ( defined( 'GTBE_MYSP_DISPLAY' ) && GTBE_MYSP_DISPLAY ) {

	$gtbe_community_support_name = esc_attr__( $gtbe_genesis_name ) . ' ' . _x( 'Community Support', 'Translators: Genesis commnity support', 'genesis-toolbar-extras' );
	$gtbe_community_support_tooltip = esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . _x( 'Community Support - official community support (public)', 'Translators: For the tooltip', 'genesis-toolbar-extras' );

} else {

	$gtbe_community_support_name = __( 'Forums', 'genesis-toolbar-extras' );
	$gtbe_community_support_tooltip = __( 'Forums', 'genesis-toolbar-extras' );

}  // end-if my.sp check

$genesisgroup_menu_items['genesiscommunitysupport'] = array(
	'parent' => $supportcommon,
	'title'  => $gtbe_community_support_name,
	'href'   => 'http://www.studiopress.com/forums',
	'meta'   => array( 'title' => $gtbe_community_support_tooltip )
);

/** Display old forum stuff only if allowed */
if ( defined( 'GTBE_OLDFORUMS_DISPLAY' ) && GTBE_OLDFORUMS_DISPLAY ) {

	$genesisgroup_menu_items['genesisoldsupport'] = array(
		'parent' => $supportcommon,
		'title'  => __( 'Old, Read-only Forum', 'genesis-toolbar-extras' ),
		'href'   => 'http://www.studiopress.com/support/',
		'meta'   => array( 'title' => __( 'Old, Read-only Forum', 'genesis-toolbar-extras' ) )
	);

		$genesisgroup_menu_items['genesisoldsupport-search'] = array(
			'parent' => $genesisoldsupport,
			'title'  => __( 'Search Forum', 'genesis-toolbar-extras' ),
			'href'   => 'http://www.studiopress.com/support/search.php',
			'meta'   => array( 'title' => __( 'Search Forum', 'genesis-toolbar-extras' ) )
		);

		$genesisgroup_menu_items['genesisoldsupport-subscribed'] = array(
			'parent' => $genesisoldsupport,
			'title'  => __( 'My Subscribed Topics', 'genesis-toolbar-extras' ),
			'href'   => 'http://www.studiopress.com/support/subscription.php',
			'meta'   => array( 'title' => __( 'My Subscribed Topics', 'genesis-toolbar-extras' ) )
		);

		$genesisgroup_menu_items['genesisoldsupport-user'] = array(
			'parent' => $genesisoldsupport,
			'title'  => __( 'User Account at Support Site', 'genesis-toolbar-extras' ),
			'href'   => 'http://www.studiopress.com/support/usercp.php',
			'meta'   => array( 'title' => __( 'User Account at Support Site', 'genesis-toolbar-extras' ) )
		);

}  // end-if constant check old forum


/**
 * 2) User Guide menu items
 */
$genesisgroup_menu_items['genesisguide'] = array(
	'parent' => $genesisgroup,
	'title'  => __( 'Ultimate User Guide', 'genesis-toolbar-extras' ),
	'href'   => esc_url_raw( GTBE_GBEGINNER_GDOCS ),
	'meta'   => array( 'title' => _x( 'Ultimate User Guide (PDF/ EBook)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-explained'] = array(
	'parent' => $genesisguide,
	'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . __( 'Explained Series', 'genesis-toolbar-extras' ),
	'href'   => 'http://designsbynickthegeek.com/tag/genesis-explained',
	'meta'   => array( 'title' => esc_attr__( $gtbe_genesis_name ) . ' ' . _x( 'Explained Series by Nick Croft (Community Resource)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-hooks'] = array(
	'parent' => $genesisguide,
	'title'  => __( 'Hook Reference', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials/hook-reference',
	'meta'   => array( 'title' => __( 'Hook Reference', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-visualhooks'] = array(
	'parent' => $genesisguide,
	'title'  => __( 'Visual Hook Guide', 'genesis-toolbar-extras' ),
	'href'   => 'http://genesistutorials.com/visual-hook-guide',
	'meta'   => array( 'title' => __( 'Visual Hook Guide', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-filter'] = array(
	'parent' => $genesisguide,
	'title'  => __( 'Filter Reference', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials/filter-reference',
	'meta'   => array( 'title' => __( 'Filter Reference', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-shortcodes'] = array(
	'parent' => $genesisguide,
	'title'  => __( 'Shortcode Reference', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials/shortcode-reference',
	'meta'   => array( 'title' => __( 'Shortcode Reference', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisguide-visualmarkup'] = array(
	'parent' => $genesisguide,
	'title'  => __( 'Visual Markup Guide', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials/visual-markup-guide',
	'meta'   => array( 'title' => __( 'Visual Markup Guide', 'genesis-toolbar-extras' ) )
);


/**
 * 3) Tutorials menu items
 */
$genesisgroup_menu_items['genesistutorials'] = array(
	'parent' => $genesisgroup,
	'title'  => __( 'Tutorials &amp; Snippets', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials',
	'meta'   => array( 'title' => __( 'Tutorials &amp; Snippets', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-community'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tutorials by the Community', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/tutorials/community',
	'meta'   => array( 'title' => _x( 'Tutorials by the Community (official unofficial...)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-studiopresstv'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Video Tutorials', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.tv/',
	'meta'   => array( 'title' => _x( 'Official Video Tutorials - StudioPress.tv', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-bgardner'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tutorials by Brian Gardner', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.briangardner.com/tutorials/',
	'meta'   => array( 'title' => _x( 'Genesis Tutorials by Brian Gardner', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-bgardner-snippets'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Snippets by Brian Gardner', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.briangardner.com/code/',
	'meta'   => array( 'title' => _x( 'Genesis Code Snippets by Brian Gardner', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-berickson'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tutorials by Bill Erickson', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.billerickson.net/contributions/tutorials/',
	'meta'   => array( 'title' => _x( 'Genesis &amp; WordPress Tutorials by Bill Erickson', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-berickson-snippets'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Snippets by Bill Erickson', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.billerickson.net/code-tag/genesis-code/',
	'meta'   => array( 'title' => _x( 'Genesis Code Snippets by Bill Erickson', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-wpsmith'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tutorials by Travis Smith', 'genesis-toolbar-extras' ),
	'href'   => 'http://wpsmith.net/category/genesis/',
	'meta'   => array( 'title' => _x( 'Genesis Tutorials by Travis Smith', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-wpsmith-gloop'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Grid Loop by Travis Smith', 'genesis-toolbar-extras' ),
	'href'   => 'http://wpsmith.net/category/genesis-grid-loop/',
	'meta'   => array( 'title' => _x( 'Genesis Grid Loop Tutorials by Travis Smith', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-garyj'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tuturials by Gary Jones', 'genesis-toolbar-extras' ),
	'href'   => 'http://code.garyjones.co.uk/category/genesis/',
	'meta'   => array( 'title' => _x( 'Genesis Tutorials by Gary Jones', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-nicktg'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Tuturials by Nick Croft', 'genesis-toolbar-extras' ),
	'href'   => 'http://designsbynickthegeek.com/category/tutorials',
	'meta'   => array( 'title' => _x( 'Genesis Tutorials by Nick Croft', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-bpotter-snippets'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Snippets by Brad Potter', 'genesis-toolbar-extras' ),
	'href'   => 'http://bradpotter.com/category/code-snippets/genesis-code-snippets/',
	'meta'   => array( 'title' => _x( 'Genesis Code Snippets by Brad Potter', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesistutorials-videos'] = array(
	'parent' => $genesistutorials,
	'title'  => __( 'Community Video Tutorials', 'genesis-toolbar-extras' ),
	'href'   => esc_url_raw( GTBE_VTUTORIALS_YTBE ),
	'meta'   => array( 'title' => _x( 'Community Video Tutorials (unofficial)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);


/**
 * 4) Genesis HQ menu items
 */
$genesisgroup_menu_items['genesissites'] = array(
	'parent' => $genesisgroup,
	'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . __( 'HQ', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/',
	'meta'   => array( 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . __( 'HQ', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisblog'] = array(
	'parent' => $genesissites,
	'title'  => __( 'Official Blog', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/blog/',
	'meta'   => array( 'title' => __( 'Official Blog (StudioPress.com)', 'genesis-toolbar-extras' ) )
);

	$genesisgroup_menu_items['genesisblog-bgardner'] = array(
		'parent' => $genesisblog,
		'title'  => __( 'Brian Gardner Blog', 'genesis-toolbar-extras' ),
		'href'   => 'http://briangardner.com/',
		'meta'   => array( 'title' => __( 'Brian Gardner Blog (The Genesis Leader - briangardner.com)', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesisblog-copyblogger'] = array(
		'parent' => $genesisblog,
		'title'  => __( 'CopyBlogger Blog', 'genesis-toolbar-extras' ),
		'href'   => 'http://copyblogger.com/blog/',
		'meta'   => array( 'title' => __( 'CopyBlogger Blog (Genesis Backing Company - copyblogger.com)', 'genesis-toolbar-extras' ) )
	);

$genesisgroup_menu_items['genesisshowcase'] = array(
	'parent' => $genesissites,
	'title'  => __( 'Showcase Gallery', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/showcase/',
	'meta'   => array( 'title' => __( 'Showcase Gallery', 'genesis-toolbar-extras' ) )
);

$genesisgroup_menu_items['genesisresources'] = array(
	'parent' => $genesissites,
	'title'  => __( 'Resources', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/resources/',
	'meta'   => array( 'title' => __( 'Resources', 'genesis-toolbar-extras' ) )
);

	$genesisgroup_menu_items['genesisresources-graphics'] = array(
		'parent' => $genesisresources,
		'title'  => __( 'Free Web Graphics', 'genesis-toolbar-extras' ),
		'href'   => 'http://www.studiopress.com/graphics',
		'meta'   => array( 'title' => __( 'Free Web Graphics', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesisresources-palettes'] = array(
		'parent' => $genesisresources,
		'title'  => __( 'Color Palettes', 'genesis-toolbar-extras' ),
		'href'   => 'http://www.studiopress.com/palettes',
		'meta'   => array( 'title' => __( 'Color Palettes', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesisresources-responsivetest'] = array(
		'parent' => $genesisresources,
		'title'  => __( 'Mobile Responsive Testing', 'genesis-toolbar-extras' ),
		'href'   => 'http://www.studiopress.com/responsive/?' . esc_url_raw( get_home_url() ),
		'meta'   => array( 'title' => __( 'Mobile Responsive Design Testing', 'genesis-toolbar-extras' ) )
	);

	$genesisgroup_menu_items['genesisresources-mediaqueries'] = array(
		'parent' => $genesisresources,
		'title'  => __( 'Media Queries Tester', 'genesis-toolbar-extras' ),
		'href'   => 'http://bueltge.de/test/media-query-tester.php?testurl=' . esc_url_raw( get_home_url() ),
		'meta'   => array( 'title' => __( 'Media Queries Tester', 'genesis-toolbar-extras' ) )
	);

$genesisgroup_menu_items['genesisaffiliates'] = array(
	'parent' => $genesissites,
	'title'  => __( 'Affiliate Program', 'genesis-toolbar-extras' ),
	'href'   => 'http://www.studiopress.com/affiliates/',
	'meta'   => array( 'title' => __( 'Affiliate Program', 'genesis-toolbar-extras' ) )
);

	$genesisgroup_menu_items['genesisaffiliateslogin'] = array(
		'parent' => $genesisaffiliates,
		'title'  => __( 'Affiliate Login', 'genesis-toolbar-extras' ),
		'href'   => 'https://shareasale.com/a-login.cfm',
		'meta'   => array( 'title' => __( 'Affiliate Login', 'genesis-toolbar-extras' ) )
	);

$genesisgroup_menu_items['genesispluginswporg'] = array(
	'parent' => $genesissites,
	'title'  => __( 'More free plugins/extensions at WP.org', 'genesis-toolbar-extras' ),
	'href'   => 'http://wordpress.org/extend/plugins/tags/genesis',
	'meta'   => array( 'title' => __( 'More free plugins/extensions at WP.org', 'genesis-toolbar-extras' ) )
);

/** 4.1) Genesis Finder menu item */
$genesisgroup_menu_items['genesisfinder'] = array(
	'parent' => $genesissites,
	'title'  => __( 'GenesisFinder (Search)', 'genesis-toolbar-extras' ),
	'href'   => 'http://genesisfinder.com/',
	'meta'   => array( 'title' => _x( 'GenesisFinder.com - Genesis Search Engine', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);

/** 4.2) Genesis News Planet menu item*/
$genesisgroup_menu_items['genesisffnews'] = array(
	'parent' => $genesissites,
	'title'  => esc_attr__( $gtbe_genesis_name ) . ' ' . __( 'News Planet', 'genesis-toolbar-extras' ),
	'href'   => 'http://friendfeed.com/genesisnews',
	'meta'   => array( 'title' => esc_attr__( $gtbe_genesis_name_tooltip ) . ' ' . __( 'News Planet (official and community news via FriendFeed service)', 'genesis-toolbar-extras' ) )
);


/**
 * 5) GenesisFinder.com search form
 */
$genesisgroup_menu_items['gfindersearchform'] = array(
	'parent' => $genesisgroup,
	'title' => '<form method="get" action="http://genesisfinder.com/search/" class=" " target="_blank">
	<input type="text" placeholder="' . $gtbe_search_gfinder . '" onblur="this.value=(this.value==\'\') ? \'' . $gtbe_search_gfinder . '\' : this.value;" onfocus="this.value=(this.value==\'' . $gtbe_search_gfinder . '\') ? \'\' : this.value;" value="' . $gtbe_search_gfinder . '" name="q" value="' . esc_attr( 'GenesisFinder Search', 'genesis-toolbar-extras' ) . '" class="text gtbe-search-input" />' . $gtbe_go_button,
	'href'   => false,
	'meta'   => array( 'target' => '', 'title' => _x( 'GenesisFinder Search', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
);
