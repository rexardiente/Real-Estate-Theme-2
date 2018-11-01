<?php
/**
 * Display links to active StudioPress Genesis Child Themes settings' pages.
 * Only official StudioPress Themes.
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
 * Setting default values for some variables & constants
 *
 * @since 1.0.0
 */
$gtbe_is_spchild = 'default';
$spgenesis_child_name = 'default';
$spgenesis_child_setup = 'default';
$spgenesis_child_forum = 'default';
$spgenesis_file = 'default';
/** Only in case... to avoid ugly PHP notices */
if ( ! defined( 'CHILD_THEME_NAME' ) ) {
	define( 'CHILD_THEME_NAME', 'default' );
}


/**
 * "Theme" String for all Child Themes
 *
 * @since 1.0.0
 *
 * @param $gtbe_theme
 */
$gtbe_theme = '&nbsp;' . __( 'Theme', 'genesis-toolbar-extras' );


/**
 * Default Admin URL for StudioPress Child Theme Settings
 *
 * @since 1.0.0
 *
 * @param $spgenesis_child_aurl
 */
$spgenesis_child_aurl = current_theme_supports( 'genesis-style-selector' ) ? admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' ) : admin_url( 'admin.php?page=genesis' );


/**
 * Official StudioPress Genesis Child Themes
 *
 * @since 1.0.0
 *
 * @param $gtbe_is_spchild
 * @param $spgenesis_child_name
 * @param $spgenesis_child_aurl
 * @param $spgenesis_child_forum
 * @param $gtbe_stylesheet_name
 */
	/** Check for official child themes */
		// AgentPress 2.x
	if ( CHILD_THEME_NAME == 'AgentPress Theme' || function_exists( 'agentpress_disclaimer' ) ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'AgentPress' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/agentpress-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=188';

		// Agency 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Agency Theme' || $gtbe_stylesheet_name == 'Agency Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Agency' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/agency-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=119';

		// Amped 1.x
	} elseif ( CHILD_THEME_NAME == 'Amped Theme' || $gtbe_stylesheet_name == 'Amped Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Amped' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/amped-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=93';

		// Apparition 1.0
	} elseif ( CHILD_THEME_NAME == 'Apparition Theme' || $gtbe_stylesheet_name == 'Apparition Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Apparition' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/apparition-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=216';

		// Associate 1.x
	} elseif ( CHILD_THEME_NAME == 'Associate Theme' || $gtbe_stylesheet_name == 'Associate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Associate' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/associate-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=174';

		// Backcountry 1.x
	} elseif ( CHILD_THEME_NAME == 'Backcountry Theme' || $gtbe_stylesheet_name == 'Backcountry Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Backcountry' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/backcountry-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Balance 1.0+
	} elseif ( CHILD_THEME_NAME == 'Balance Theme' || $gtbe_stylesheet_name == 'Balance Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Balance' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/balance-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=201';

		// Bee Crafty 1.x
	} elseif ( CHILD_THEME_NAME == 'Bee Crafty Theme' || $gtbe_stylesheet_name == 'Bee Crafty Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Bee Crafty' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/beecrafty-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=138';

		// Blissful 1.x
	} elseif ( CHILD_THEME_NAME == 'Blissful Theme' || $gtbe_stylesheet_name == 'Blissful Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Blissful' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/blissful-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=169';

		// Corporate 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Corporate Theme' || $gtbe_stylesheet_name == 'Corporate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Corporate' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/corporate-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=109';

		// Crystal 1.x
	} elseif ( CHILD_THEME_NAME == 'Crystal Theme' || $gtbe_stylesheet_name == 'Crystal Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Crystal' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/crystal-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=160';

		// Decor 1.0+
	} elseif ( CHILD_THEME_NAME == 'Decor Theme' || $gtbe_stylesheet_name == 'Decor Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Decor' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/decor-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=206';

		// Delicious
	} elseif ( CHILD_THEME_NAME == 'Delicious Theme'
			|| ( $gtbe_stylesheet_name == 'Delicious Child Theme'
				|| $gtbe_stylesheet_name == 'Delicious Blue Child Theme'
				|| $gtbe_stylesheet_name == 'Delicious Brown Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Delicious' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/delicious-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=130';

		// Education 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Education Theme' || $gtbe_stylesheet_name == 'Education Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Education' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/education-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=126';

		// eleven40 1.0+
	} elseif ( CHILD_THEME_NAME == 'eleven40 Theme' || $gtbe_stylesheet_name == 'eleven40 Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'eleven40' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/eleven40-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=199';

		// Enterprise 1.x
	} elseif ( CHILD_THEME_NAME == 'Enterprise Theme' || $gtbe_stylesheet_name == 'Enterprise Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Enterprise' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/enterprise-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=102';

		// Executive 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Executive Theme' || $gtbe_stylesheet_name == 'Executive Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Executive' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/executive-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=79';

		if ( function_exists( 'executive_portfolio_post_type' ) && post_type_exists( 'portfolio' ) ) {
			$spgenesis_file = 'executive2x_file_yes';
		}

		// Expose 1.x
	} elseif ( CHILD_THEME_NAME == 'Expose Theme' || $gtbe_stylesheet_name == 'Expose Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Expose' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/expose-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=136';

		// Fabric 1.x
	} elseif ( CHILD_THEME_NAME == 'Fabric Theme' || $gtbe_stylesheet_name == 'Fabric Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Fabric' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/fabric-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=173';

		// Family Tree 1.x
	} elseif ( CHILD_THEME_NAME == 'Family Tree Theme' || $gtbe_stylesheet_name == 'Family Tree Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Family Tree' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/familytree-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=100';

		// Focus 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Focus Theme' || $gtbe_stylesheet_name == 'Focus Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Focus' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/focus-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=167';

		// Freelance 1.x
	} elseif ( CHILD_THEME_NAME == 'Freelance Theme' || $gtbe_stylesheet_name == 'Freelance Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Freelance' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/freelance-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=121';

		// Generate 1.x
	} elseif ( CHILD_THEME_NAME == 'Generate Theme' || $gtbe_stylesheet_name == 'Generate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Generate' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/generate-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=197';

		// Going Green 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Going Green Theme' || $gtbe_stylesheet_name == 'Going Green Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Going Green' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/goinggreen-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=116';

		// Landscape 1.x
	} elseif ( CHILD_THEME_NAME == 'Landscape Theme' || $gtbe_stylesheet_name == 'Landscape Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Landscape' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/landscape-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=108';

		// Lifestyle 1.x - 2.x
	} elseif ( CHILD_THEME_NAME == 'Lifestyle Theme'
			|| ( $gtbe_stylesheet_name == 'Lifestyle Child Theme'
				|| $gtbe_stylesheet_name == 'Lifestyle Green Child Theme'
				|| $gtbe_stylesheet_name == 'Lifestyle Peach Child Theme'
				|| $gtbe_stylesheet_name == 'Lifestyle Pink Child Theme'
				|| $gtbe_stylesheet_name == 'Lifestyle Purple Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Lifestyle' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/lifestyle-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=92';

		// Luscious 1.x
	} elseif ( CHILD_THEME_NAME == 'Luscious Theme' || $gtbe_stylesheet_name == 'Luscious Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Luscious' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/luscious-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=190';

		// Magazine 1.x - 2.x
	} elseif ( CHILD_THEME_NAME == 'Magazine Theme' || $gtbe_stylesheet_name == 'Magazine Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Magazine' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/magazine-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=128';

		// Manhattan 1.x
	} elseif ( CHILD_THEME_NAME == 'Manhattan Theme' || $gtbe_stylesheet_name == 'Manhattan Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Manhattan' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/manhattan-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=152';

		// Metric 1.x
	} elseif ( CHILD_THEME_NAME == 'Metric Theme' || $gtbe_stylesheet_name == 'Metric Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Metric' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/metric-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=114';

		// Midnight 1.x
	} elseif ( CHILD_THEME_NAME == 'Midnight Theme' || $gtbe_stylesheet_name == 'Midnight Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Midnight' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/midnight-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=170';

		// Mindstream
	} elseif ( CHILD_THEME_NAME == 'Mindstream Theme' || $gtbe_stylesheet_name == 'Mindstream Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Mindstream' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/mindstream-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=207';

		// Minimum 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Minimum Theme' || $gtbe_stylesheet_name == 'Minimum Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Minimum' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/minimum-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=172';

		if ( function_exists( 'minimum_portfolio_post_type' ) && post_type_exists( 'portfolio' ) ) {
			$spgenesis_file = 'minimum2x_file_yes';
		}

		// Mocha 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Mocha Theme' || $gtbe_stylesheet_name == 'Mocha Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Mocha' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/mocha-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=80';

		// News 1.x - 2.x
	} elseif ( CHILD_THEME_NAME == 'News Theme' || $gtbe_stylesheet_name == 'News Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'News' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/news-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=118';

		// Nitrous 1.x
	} elseif ( CHILD_THEME_NAME == 'Nitrous Theme' || $gtbe_stylesheet_name == 'Nitrous Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Nitrous' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/nitrous-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=183';

		// Outreach 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Outreach Theme' || $gtbe_stylesheet_name == 'Outreach Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Outreach' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/outreach-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=112';

		// Platinum
	} elseif ( CHILD_THEME_NAME == 'Platinum Theme' || $gtbe_stylesheet_name == 'Platinum Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Platinum' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/platinum-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=73';

		// Pretty Young Thing 1.0.x - 1.1+
	} elseif ( CHILD_THEME_NAME == 'Pretty Young Thing Theme' || $gtbe_stylesheet_name == 'Pretty Young Thing Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Pretty Young Thing' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/pretty-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=166';

		// Prose 1.0 + 1.5.x
	} elseif ( defined( 'PROSE_DOMAIN' ) || CHILD_THEME_NAME == 'Prose Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Prose' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/prose-theme/';
		$spgenesis_child_aurl = admin_url( 'admin.php?page=design-settings' );
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=147';

		// Quattro 1.0+
	} elseif ( CHILD_THEME_NAME == 'Quattro Theme' || $gtbe_stylesheet_name == 'Quattro Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Quattro' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/quattro-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=213';

		// Scribble 1.0+
	} elseif ( CHILD_THEME_NAME == 'Scribble Theme' || $gtbe_stylesheet_name == 'Scribble Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Scribble' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/scribble-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=186';

		// Serenity 1.0 - 1.0.1
	} elseif ( CHILD_THEME_NAME == 'Serenity Theme' || $gtbe_stylesheet_name == 'Serenity Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Serenity' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/serenity-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=84';

		// Sleek 1.x
	} elseif ( CHILD_THEME_NAME == 'Sleek Theme'
			|| ( $gtbe_stylesheet_name == 'Sleek Child Theme'
				|| $gtbe_stylesheet_name == 'Sleek Dark Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Sleek' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/sleek-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=132';

		// Streamline 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Streamline Theme' || $gtbe_stylesheet_name == 'Streamline Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Streamline' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/streamline-theme/';
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=81';

		// Stretch 1.0
	} elseif ( function_exists( 'stretch_theme_settings_metaboxes' )
			|| CHILD_THEME_NAME == 'Stretch Theme'
			|| $gtbe_stylesheet_name == 'Stretch Child Theme'
	) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Stretch' . $gtbe_theme;
		$spgenesis_child_setup = 'http://my.studiopress.com/setup/stretch-theme/';

		// AgentPress 1.x (retired)
	} elseif ( function_exists( 'agentpress_include_slider' ) ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'AgentPress 1.0' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=86';

		// Church 1.x (retired)
	} elseif ( CHILD_THEME_NAME == 'Church Theme'
			|| ( $gtbe_stylesheet_name == 'Church Child Theme'
				|| $gtbe_stylesheet_name == 'Church Blue Child Theme'
				|| $gtbe_stylesheet_name == 'Church Brown Child Theme'
				|| $gtbe_stylesheet_name == 'Church Gray Child Theme' ) 
	) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Church' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=124';

		// Lexicon 1.x (retired)
	} elseif ( CHILD_THEME_NAME == 'Lexicon Theme' || $gtbe_stylesheet_name == 'Lexicon Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Lexicon' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=142';

		// Pixel Happy (retired)
	} elseif ( CHILD_THEME_NAME == 'Pixel Happy Theme' || $gtbe_stylesheet_name == 'Pixel Happy Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Pixel Happy' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=87';

		// Social Eyes 1.x (retired)
	} elseif ( CHILD_THEME_NAME == 'Social Eyes Theme' || $gtbe_stylesheet_name == 'Social Eyes Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Social Eyes' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=165';

		// Tapestry 1.x (retired)
	} elseif ( CHILD_THEME_NAME == 'Tapestry Theme' || $gtbe_stylesheet_name == 'Tapestry Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Tapestry' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Venture 1.x (retired)
	} elseif ( CHILD_THEME_NAME == 'Venture Theme' || $gtbe_stylesheet_name == 'Venture Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Venture' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Copyblogger (free)
	} elseif ( CHILD_THEME_NAME == 'Copyblogger Theme' || $gtbe_stylesheet_name == 'Copyblogger Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Copyblogger' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Fairway (free)
	} elseif ( CHILD_THEME_NAME == 'Fairway Theme' || $gtbe_stylesheet_name == 'Fairway Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Fairway' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Georgia (free)
	} elseif ( CHILD_THEME_NAME == 'Georgia Theme' || $gtbe_stylesheet_name == 'Georgia Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Georgia' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Nomadic (free)
	} elseif ( CHILD_THEME_NAME == 'Nomadic Theme' || $gtbe_stylesheet_name == 'Nomadic Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Nomadic' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// 24k (free)
	} elseif ( CHILD_THEME_NAME == '24k Child Theme' || $gtbe_stylesheet_name == '24k Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = '24k' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Sample Child (free)
	} elseif ( CHILD_THEME_NAME == 'Sample Theme' || $gtbe_stylesheet_name == 'Sample Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Sample' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Genesis Default Theme, no child!
	} elseif ( $gtbe_stylesheet_name == 'Genesis' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Genesis Default' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=75';

	}  // end if Genesis child theme check

	/** Official Child Themes - display links */
	if ( $gtbe_is_spchild == 'spchild_yes' && current_user_can( 'edit_theme_options' ) ) {

		/** Child type check */
		$gtbe_child_type_check = $spgenesischild;

		/** "Theme Group" menu items */
		$menu_items['spgenesischild'] = array(
			'parent' => $tgroup,
			'title'  => $spgenesis_child_name,
			'href'   => $spgenesis_child_aurl,
			'meta'   => array( 'target' => '', 'title' => $spgenesis_child_name )
		);

		/** Hook: spchild_theme_after_title */
		do_action( 'gtbe_spchild_after_title' );

		/** Display theme editor links for proper caps */
		if ( !( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT ) && current_user_can( 'edit_themes' ) && ( current_theme_supports( 'gtbe-theme-editor' ) || current_theme_supports( 'gtbe-theme-editor-prose' ) ) ) {

			/** Include plugin file with seo plugin support links */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-editfiles.php' );

		}  // end-if theme editor check

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['spgenesischild-readme'] = array(
				'parent' => $spgenesischild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  /** If Genesis class not exists use own class */
		elseif ( class_exists( 'DDW_GTBE_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['spgenesischild-readme'] = array(
				'parent' => $spgenesischild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=gtbe-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Child Theme/StudioPress personal support */
		if ( GTBE_MYSP_DISPLAY ) {
			$menu_items['spgenesischild-personalsupport'] = array(
				'parent' => $spgenesischild,
				'title'  => __( 'my.SP Personal Support', 'genesis-toolbar-extras' ),
				'href'   => 'https://my.studiopress.com/help/',
				'meta'   => array( 'title' => 'my.StudioPress.com ' . _x( 'Personal Support Contact &amp; Resources', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if my.SP display check

		/** Child Theme setup instructions */
		if ( 'default' != $spgenesis_child_setup ) {
			$menu_items['spgenesischild-setupinstructions'] = array(
				'parent' => $spgenesischild,
				'title'  => apply_filters( 'gtbe_filter_spgenesis_setup_title', __( 'Setup Instructions', 'genesis-toolbar-extras' ) ),
				'href'   => apply_filters( 'gtbe_filter_spgenesis_setup_url', esc_url_raw( $spgenesis_child_setup ) ),
				'meta'   => array( 'title' => apply_filters( 'gtbe_filter_spgenesis_setup_tooltip', _x( 'Setup Instructions', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) ) )
			);
		}  // end-if child setup instructions

		/** Child Theme Support Forum - old, read-only */
		if ( ( 'default' != $spgenesis_child_forum ) && GTBE_OLDFORUMS_DISPLAY ) {
			$menu_items['spgenesischild-support'] = array(
				'parent' => $spgenesischild,
				'title'  => apply_filters( 'gtbe_filter_spgenesis_forum_title', __( 'Support Forum (old)', 'genesis-toolbar-extras' ) ),
				'href'   => apply_filters( 'gtbe_filter_spgenesis_forum_url', esc_url_raw( $spgenesis_child_forum ) ),
				'meta'   => array( 'title' => apply_filters( 'gtbe_filter_spgenesis_forum_tooltip', _x( 'Support Forum for Child Theme - Note: Read only!', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) ) )
			);
		}  // end-if child old forum

		/** Executive 2.x Theme Specials: */
		if ( 'executive2x_file_yes' == $spgenesis_file ) {
			/** Include plugin file with theme specials */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-specials-executive2x.php' );
		}  // end-if Executive 2.x Theme specials

		/** Minimum 2.x Theme Specials: */
		if ( 'minimum2x_file_yes' == $spgenesis_file ) {
			/** Include plugin file with theme specials */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-specials-minimum2x.php' );
		}  // end-if Minimum 2.x Theme specials

	}  // end-if official child themes display


/**
 * Special child theme stuff
 * Official child theme: Prose 1.0 and 1.5+
 * Third-party child theme: Extended Magazine
 *
 * @since 1.0.0
 */
	/** Design settings section - only if "Prose" or "Extended Magazine" (third-party child theme ) is active */
	if ( ( defined( 'PROSE_DOMAIN' ) || defined( 'EXTENDED_DESIGN_FIELD' ) ) && current_user_can( 'manage_options' ) ) {
		$menu_items['designsettings'] = array(
			'parent' => $tgroup,
			'title'  => __( 'Design Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=design-settings' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Design Settings', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Design Settings check

	/** Prose Custom section - only for "Prose" 1.5+ */
	if ( function_exists( 'prose_create_custom_php' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['prosecustom'] = array(
			'parent' => $tgroup,
			'title'  => __( 'Custom Code &amp; CSS', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=prose-custom' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Custom Code &amp; CSS for Prose', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Prose Custom check
