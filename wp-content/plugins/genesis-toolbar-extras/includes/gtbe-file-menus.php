<?php
/**
 * Helper functions for the admin.
 * Displays the contents of "README.txt" and "changelog.txt" files, if available.
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Admin
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.3.0
 */

/**
 * Helper function for retrieving and filter README.txt file or similar file.
 *
 * @since 1.3.0
 */
function ddw_gtbe_filter_url_child_readme() {

	$gtbe_url_child_readme = false;

	if ( ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) &&
		is_readable( get_stylesheet_directory() . '/LIESMICH.txt' )
	) {

		$gtbe_url_child_readme = apply_filters( 'gtbe_filter_url_child_readme', get_stylesheet_directory() . '/LIESMICH.txt' );

	} elseif ( is_readable( get_stylesheet_directory() . '/README.txt' ) ) {

		$gtbe_url_child_readme = apply_filters( 'gtbe_filter_url_child_readme', get_stylesheet_directory() . '/README.txt' );

	}  // end-if file check

	return esc_url_raw( $gtbe_url_child_readme );

}


/**
 * Helper function for retrieving and filter changelog.txt file or similar file.
 *
 * @since 1.3.0
 */
function ddw_gtbe_filter_url_child_changelog() {

	$gtbe_url_child_changelog = false;

	if ( is_readable( get_stylesheet_directory() . '/changelog.txt' ) ) {

		$gtbe_url_child_changelog = apply_filters( 'gtbe_filter_url_child_changelog', get_stylesheet_directory() . '/changelog.txt' );

	} elseif ( is_readable( get_stylesheet_directory() . '/Changelog_Versionshistorie.txt' ) ) {

		$gtbe_url_child_changelog = apply_filters( 'gtbe_filter_url_child_changelog', get_stylesheet_directory() . '/Changelog_Versionshistorie.txt' );

	}  // end-if file check

	return esc_url_raw( $gtbe_url_child_changelog );

}


/**
 * Registers a new admin page, providing content and corresponding menu item
 * for the (available) Readme page of the current child theme.
 *
 * @since 1.3.0
 */
class DDW_GTBE_Admin_Readme extends Genesis_Admin_Basic {

	/**
	 * Create an admin menu item and settings page.
	 *
	 * @uses Genesis_Admin::create() Register the admin page
	 *
	 * @since 1.3.0
	 */
	function __construct() {

		/** ID & slug of new admin page */
		$page_id = 'gtbe-readme';

		/** Admin page setup */
		$menu_ops = array(
			'submenu' => array(
				'parent_slug' => 'genesis',
				'page_title'  => __( 'README for', 'genesis-toolbar-extras' ) . ' ' . CHILD_THEME_NAME,
				'menu_title'  => __( 'Theme README', 'genesis-toolbar-extras' )
			)
		);

		$this->create( $page_id, $menu_ops );

	}

	/**
	 * Callback for displaying the Readme admin page.
	 *
	 * Checks if the file contents are readable, and echoes out HTML.
	 *
	 * @since 1.3.0
	 */
	public function admin() {

		/** Assume we cannot find the file */
		$readme_file = false;

		/** Get the file contents */
		$readme_file = @file_get_contents( is_readable( ddw_gtbe_filter_url_child_readme() ) );

		/** If we can't find file contents, show a message */
		if ( ! $readme_file || empty( $readme_file ) ) {
			$readme_file = '<div class="error"><p>' . sprintf( __( 'The %s file was not found in the child theme, or it was empty.', 'genesis-toolbar-extras' ), '<code>README.txt</code>' ) . '</p></div>';
		}

		?>
		<div id="genesis-readme-file" class="wrap">
			<?php screen_icon( 'edit-pages' ); ?>
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<pre><?php echo wpautop( $readme_file ); ?></pre>
		</div>
		<?php

	}  // end of method admin

}  // end of class DDW_GTBE_Admin_Readme


/**
 * Registers a new admin page, providing content and corresponding menu item
 * for the (available) Changelog page of the current child theme.
 *
 * @since 1.3.0
 */
class DDW_GTBE_Admin_Changelog extends Genesis_Admin_Basic {

	/**
	 * Create an admin menu item and settings page.
	 *
	 * @uses Genesis_Admin::create() Register the admin page
	 *
	 * @since 1.3.0
	 */
	function __construct() {

		/** ID & slug of new admin page */
		$page_id = 'gtbe-changelog';

		/** Admin page setup */
		$menu_ops = array(
			'submenu' => array(
				'parent_slug' => 'genesis',
				'page_title'  => __( 'Changelog for', 'genesis-toolbar-extras' ) . ' ' . CHILD_THEME_NAME,
				'menu_title'  => __( 'Theme Changelog', 'genesis-toolbar-extras' )
			)
		);

		$this->create( $page_id, $menu_ops );

	}

	/**
	 * Callback for displaying the Changelog admin page.
	 *
	 * Checks if the file contents are readable, and echoes out HTML.
	 *
	 * @since 1.3.0
	 */
	public function admin() {

		/** Assume we cannot find the file */
		$changelog_file = false;

		/** Get the file contents */
		$changelog_file = @file_get_contents( ddw_gtbe_filter_url_child_changelog() );

		/** If we can't find file contents, show a message */
		if ( ! $changelog_file || empty( $changelog_file ) ) {
			$changelog_file = '<div class="error"><p>' . sprintf( __( 'The %s file was not found in the child theme, or it was empty.', 'genesis-toolbar-extras' ), '<code>changelog.txt</code>' ) . '</p></div>';
		}

		?>
		<div id="genesis-changelog-file" class="wrap">
			<?php screen_icon( 'edit-pages' ); ?>
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<code><?php echo wpautop( $changelog_file ); ?></code>
		</div>
		<?php

	}  // end of method admin

}  // end of class DDW_GTBE_Admin_Changelog
