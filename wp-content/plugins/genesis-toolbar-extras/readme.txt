=== Genesis Toolbar Extras ===
Contributors: daveshine, deckerweb
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, tool bar, adminbar, admin bar, genesis, genesis framework, genesiswp, framework, administration, resources, links, theme, settings, manage, deckerweb, ddwtoolbar
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 1.6.0
License: GPLv2 or later
License URI: http://www.opensource.org/licenses/gpl-license.php

This plugin adds useful admin settings links and massive resources for Genesis Framework and its ecosystem to the WordPress Toolbar / Admin Bar.

== Description ==

= Quick Access to Genesis Framework Resources - Time Saver! =
This plugin just adds **a lot Genesis Framework related resources** to your toolbar / admin bar. Also links to **all settings pages** of this framework are added making life for webmasters a lot easier. So you might just switch from the frontend of your site to the Genesis 'Theme Settings' or adjust additional extensions like 'Genesis Simple Hooks', 'AgentPress Listings', 'Genesis Media Project' etc. -- Use this time saver and get quicker access :-)

= General Features =
* The plugin is **primarily intended towards site admins and webmasters**.
* All the Framework settings links, plus support for all official child themes, plus support for almost all other child themes available, including from StudioPress Marketplace, the "Themedy" and "Allure Themes" brands, as well as from third-party developers and other marketplaces, for full list [see "Other Notes" here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/other_notes/)
* Support for all official plugins by StudioPress, plus all third-party community extensions as well as plugins from the "ecosystem", for full list [see "Other Notes" here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/other_notes/)
* A massive list of resource & community links is included: support forums, tutorials, code snippets, translations etc.
* A special "Manage Content" group where plugins like "AgentPress Listings", "Premise" or "Genesis Media Project" or other custom post types from some child themes hook in -- so you can very easily manage this framework/child theme related content stuff from your toolbar!
* Support for the most popular SEO plugins: if one of this is active, Genesis SEO options are also hidden from the toolbar and the plugin's settings links are hooked in! (since v1.1.0)
* Optional support for Theme Editor links for child themes (style.css + functions.php), for security reasons has to be activated via `add_theme_support( 'gtbe-theme-editor' );`. (since v1.1.0)
* The added menu items by the plugin follow the same user cabalities as their original links - in other words: if a link to a settings page is not displayed without my plugin for a certain user role/capability it won't be when my plugin is active!
* Support for user profile options regarding Genesis admin menus: So, if a user won't see the left-hand Genesis icon, the same user won't see any Genesis toolbar items!
* 4 action hooks included for hooking custom menu items in -- for all main sections plus the resource group section ([see FAQ section here for more info on that](http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/)).
* 9 additional icon colors included :) (changeable via filters)
* 7 filters included to change wording/tooltip and icon of the main item - for more info [see FAQ section here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/)
* For custom "branding" or special needs a few sections like "Extensions" and "Resource links group" could be hidden from displaying via your active child theme - for more info [see FAQ section here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/)
* Fully internationalized! Real-life tested and developed with international users in mind!  Also supports update-secure custom language file (if you need special wording...)
* Fully WPML compatible!

= Special Features =
* Not only supporting official Genesis/StudioPress sites but ALSO third-party stuff and user links - so just the whole Genesis ecosystem :)
* Plugin includes a little CSS fix for older (prior of January 2012) child themes to proper display second-level links for frontend toolbar/admin bar items
* Link to GenesisFinder search engine included!
* Links to Genesis translations project and forums included - to spread the word and better connect the community
* Links to downloadable German language packs - only displayed when German locales are active (de_DE, de_AT, de_CH, de_LU)
* *NOTE:* I would be happy to add more language/locale specific resources and more useful third-party links - just contact me!

= Developer/Client Features =
* README.txt support (child theme root) -- present your clients short documentation, instructions or whatever
* changelog.txt support (child theme root) -- present your client webmasters quick access to actual changelog -- (secure) filter included so you can change the URL to your own server (yourbusiness.com/theme-xyz/changelog.txt)
* Theme Editor support -- quick access for quick changes to `style.css` or `functions.php`
* Customizing, Branding and Capability support -- give your clients or staff members the menu items and the access THEY need.

= Plugin/ Child Theme Support =
* Currently more than **225 child themes** plus more than **66 plugins** are supported. How cool is that? :)
* For the full list plus additional info please [**see "Other Notes" here**](http://wordpress.org/extend/plugins/genesis-toolbar-extras/other_notes/)
* *Your child theme/ plugin? - [Just contact me with specific data](http://genesisthemes.de/en/contact/)*

= Localization =
* English (default) - always included
* German (de_DE) - always included
* .pot file (`genesis-toolbar-extras.pot`) for translators is also always included :)
* Easy plugin translation platform with GlotPress tool: [Translate "Genesis Toolbar Extras"...](http://translate.wpautobahn.com/projects/genesis-plugins-deckerweb/genesis-toolbar-extras)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

[A plugin from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Drop me a line [@deckerweb](http://twitter.com/deckerweb) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/deckerweb.service)
* Or follow me on [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)
* Hey, come & join the [Genesis Community on Google+ :)](http://ddwb.me/genesiscommunity)

== Installation ==

1. Upload the entire `genesis-toolbar-extras` folder to the `/wp-content/plugins/` directory -- or just upload the ZIP package via 'Plugins > Add New > Upload' in your WP Admin
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your toolbar / admin bar for "Genesis" and enjoy using the new links there :)
4. Go and manage your framework, child theme and/or extensions settings :)

**Please note, this plugin requires WordPress 3.3 or higher in order to work! And yes, it is fully compatible with WordPress 3.4!**

**Also note:** This plugin has NO settings page because I believe it's just not neccessarry. All customizing could be done via filters, constants and regular WordPress user roles & capabilities. As the plugin is indended for a site manager/ admin/ webmaster use that's the way to go. This way we can save the overhaul of an options panel/settings page, additional database requests, uninstall routines and such. End result: a lightweight system that just works and saves clicks & time :-).

**Multisite install:** Yes, it's fully compatible but have a look in the [FAQ section here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/) for more info :)

**Own translation/wording:** For custom and update-secure language files please upload them to `/wp-content/languages/genesis-toolbar-extras/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that, just use a language file like `genesis-toolbar-extras-en_US.mo/.po` to achieve that (for creating one see the tools on "Other Notes").

== Frequently Asked Questions ==

= Why another Genesis Toolbar plugin, there are already some others!? =
You're right! If you're happy with one of the others then that's absolutely great and you don't need to switch anything! :)
I just made this new plugin here for my own needs and some of my client admins. As I am an open source evangelist I like to release my stuff to give back to the community!

The main purpose of my plugin here is to have all things under one roof. So if you're the admin and running Genesis plus a child theme and a few of the Genesis plugins on your site you then have the full experience: all settings links from almost all stuff available. All is working out of the box so you can concentrate on your work and content! It's a huge time saver! And, since all third-party stuff and community resources are supported as well you're not left alone in the dark! The official stuff by StudioPress is incredible awesome but we have a BIG Genesis community and ecosystem out there. My mission is to support all from that if at all possible - I'll add support for new stuff if something gets released. Of course, this will be maintained as I use and need such a kind of plugin in my own daily work!

One plugin to rule them all :-)

= Does this plugin work with latest WP version and also older versions? =
Yes, this plugin works really fine with the latest WordPress 3.3+, of course also WordPress 3.4! :-)
And sorry, it DOES NOT work with older WordPress versions so please update your install if you haven't done yet :).

= How are new resources being added to the toolbar/admin bar? =
Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and I'll add the link if it is useful for admins/ webmasters and the Genesis #genesiswp community.

= How could my plugin/extension or child theme options page be added to the toolbar/admin bar links? =
This is possible of course and highly welcomed! Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and we sort out the details!
Particularly, I need the admin url for the primary options page (like so `wp-admin/admin.php?page=foo`) - this is relevant for both, plugins and child themes. For child themes then I also need the correct name defined in the stylesheet (like so `Footheme`). (Note: I don't own all the premium stuff myself yet so you're more than welcomed to help me out with these things. Thank you!)

= Is this plugin Multisite compatible? =
Yes, it is! :) Works really fine in Multisite invironment - it will ever ONLY display for admins or users who can see the left-hand "G" menu. Still, I just recommend to activate on a per site basis so to load things only where and when needed.

= In Multisite, could I "network activate" this plugin? =
Yes, you could! It will ever ONLY display for admins or users who can see the left-hand "G" menu so you're on the safe side :). Of course it makes only sense if you have one or more sites running with Genesis in your Multisite environment. However, it's a lightweight plugin but activation on a per site basis is the recommended way from my point of view. Almost all admin links are intended for a per-site use and not for network-related stuff.

= How can I access the style.css and functions.php files from the toolbar? =
Via `add_theme_support( 'gtbe-theme-editor' );` you can easily add Theme Editor links for `style.css` and `functions.php` of your current child theme to the child theme section -- if enabled it will only display if the user has the proper cabalitities and if the Theme Editor is not disabled via wp-config!
`
/** Genesis Toolbar Extras: Add Theme Editor support */
add_theme_support( 'gtbe-theme-editor' );
`

= Can custom menu items be hooked in via theme/child theme or other plugins? =
Yes, this is possible since version 1.1 of the plugin! There are 4 action hooks available for hooking custom menu items in -- `gtbe_custom_main_items` for the main section, `gtbe_custom_theme_items` for the child theme section, `gtbe_custom_extend_items` for the extensions section plus `gtbe_custom_group_items` for the resource group section. Here's an example code:
`
add_action( 'gtbe_custom_group_items', 'gtbe_custom_additional_group_item' );
/**
 * Genesis Toolbar Extras: Custom Resource Group Items
 *
 * @global mixed $wp_admin_bar
 */
function gtbe_custom_additional_group_item() {

	global $wp_admin_bar;

	$wp_admin_bar->add_menu( array(
		'parent' => 'ddw-genesis-genesisgroup',
		'id'     => 'your-unique-item-id',
		'title'  => __( 'Custom Menu Item Name', 'your-textdomain' ),
		'href'   => 'http://deckerweb.de/',
		'meta'   => array( 'title' => __( 'Custom Menu Item Name Tooltip', 'your-textdomain' ) )
	) );
}
`

= Can certain sections be removed? =
Yes, this is possible! You can remove the following sections: "Child Theme" area (all items) / "Extensions" (main item + sub items!) / "Manage Content" group (all items) / "Resources link group" at the bottom (all items) / "My.StudioPress" Resources / "Old Support Forums" stuff / "German language stuff" (all items) / "Translations" (all items)

To achieve this add one, some or all of the following constants to your child theme's `functions.php` file:
`
/** Genesis Toolbar Extras: Remove Child Theme Items */
define( 'GTBE_CHILD_THEME_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove Extensions Items */
define( 'GTBE_EXTENSIONS_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove Manage Content Items */
define( 'GTBE_MANAGE_CONTENT_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove Resource Items */
define( 'GTBE_RESOURCES_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove My.StudioPress Items */
define( 'GTBE_MYSP_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove my.StudioPress Items */
define( 'GTBE_OLDFORUMS_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove German Language Items */
define( 'GTBE_DE_DISPLAY', FALSE );

/** Genesis Toolbar Extras: Remove Translations Items */
define( 'GTBE_TRANSLATIONS_DISPLAY', FALSE );
`

= Can the the whole toolbar entry be removed, especially for certain users? =
Yes, that's also possible! This could be useful if your site has special user roles/capabilities or other settings that are beyond the default WordPress stuff etc. For example: if you want to disable the display of any "Genesis Toolbar Extras" items for all user roles of "Editor" please use this code:
`
/** Genesis Toolbar Extras: Remove all items for "Editor" user role */
if ( current_user_can( 'editor' ) ) {
	define( 'GTBE_DISPLAY', FALSE );
}
`

To hide only from the user with a user ID of "2":
`
/** Genesis Toolbar Extras: Remove all items for user ID 2 */
if ( 2 == get_current_user_id() ) {
	define( 'GTBE_DISPLAY', FALSE );
}
`

To hide items only in frontend use this code:
`
/** Genesis Toolbar Extras: Remove all items from frontend */
if ( ! is_admin() ) {
	define( 'GTBE_DISPLAY', FALSE );
}
`

In general, use this constant do hide any "Genesis Toolbar Extras" items:
`
/** Genesis Toolbar Extras: Remove all items */
define( 'GTBE_DISPLAY', FALSE );
`

= Can I remove the original Toolbar items for WordPress SEO by Yoast? =
Yes, this is also possible! Since v1.1.0 of my plugin support for Yoast's great plugin is included so if you only want his stuff to appear within "Genesis Toolbar Extras" just add this constant to your active child theme's `functions.php file` or functionality plugin:
`
/** Genesis Toolbar Extras: Remove original Yoast SEO items */
define( 'GTBE_REMOVE_WPSEO_YOAST_TOOLBAR', true );
`


= Available Filters to Customize More Stuff =
All filters are listed with the filter name in bold and the below additional info, helper functions (if available) as well as usage examples.

**gtbe_filter_capability_all**

* Default value: `edit_posts` (needed for the "manage content" stuff...)
* 5 Predefined helper functions:
 * `__gtbe_admin_only` -- returns `'administrator'` role -- usage:
`
add_filter( 'gtbe_filter_capability_all', '__gtbe_admin_only' );
`
 * `__gtbe_role_editor` -- returns `'editor'` role -- usage:
`
add_filter( 'gtbe_filter_capability_all', '__gtbe_role_editor' );
`
 * `__gtbe_cap_edit_theme_options` -- returns `'edit_theme_options'` capability -- usage:
`
add_filter( 'gtbe_filter_capability_all', '__gtbe_cap_edit_theme_options' );
`
 * `__gtbe_cap_manage_options` -- returns `'manage_options'` capability -- usage:
`
add_filter( 'gtbe_filter_capability_all', '__gtbe_cap_manage_options' );
`
 * `__gtbe_cap_install_plugins` -- returns `'install_plugins'` capability -- usage:
`
add_filter( 'gtbe_filter_capability_all', '__gtbe_cap_install_plugins' );
`
* Another example:
`
add_filter( 'gtbe_filter_capability_all', 'custom_gtbe_capability_all' );
/**
 * Genesis Toolbar Extras: Change Main Capability
 */
function custom_gtbe_capability_all() {
	return 'switch_themes';
}
`
--> Changes the capability to `switch_themes`

**gtbe_filter_main_icon**

* Default value: Genesis "G" logo (favicon) with turquoise/light blue touch... :)
* 9 Predefined helper functions for the 9 included colored icons, returning special colored icon values - the helper function always has this name: `__gtbe_colornamehere_icon()` this results in the following filters ready for usage:
`
add_filter( 'gtbe_filter_main_icon', '__gtbe_brown_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_darkblue_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_green_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_ivory_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_orange_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_pink_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_red_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_white_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_yellow_icon' );

add_filter( 'gtbe_filter_main_icon', '__gtbe_child_images_icon' );
`
--> Where the last helper function returns the icon file (`icon-gtbe.png`) found in your current child theme's `/images/` subfolder

* Example for using with current child theme:
`
add_filter( 'gtbe_filter_main_icon', 'custom_gtbe_main_icon' );
/**
 * Genesis Toolbar Extras: Change Main Icon
 */
function custom_gtbe_main_icon() {
	return get_stylesheet_directory_uri() . '/images/custom-icon.png';
}
`
--> Uses a custom image from your active child theme's `/images/` folder

--> Recommended dimensions are 16px x 16px

**gtbe_filter_main_icon_display**

* Returning the CSS class for the main item icon
* Default value: `icon-genesistbe` (class is: `.icon-genesistbe`)
* 1 Predefined helper function:
 * `__gtbe_no_icon_display()` -- usage:
`
add_filter( 'gtbe_filter_main_icon_display', '__gtbe_no_icon_display' );
`
--> This way you can REMOVE the icon!

 * Another example:
`
add_filter( 'gtbe_filter_main_icon_display', 'custom_gtbe_main_icon_display_class' );
/**
 * Genesis Toolbar Extras: Change Main Icon CSS Class
 */
function custom_gtbe_main_icon_display_class() {
	return 'your-custom-icon-class';
}
`
--> You then have to define CSS rules in your child theme stylesheet for your own custom class `.your-custom-icon-class`

--> Recommended dimensions are 16px x 16px

**gtbe_filter_main_item**

* Default value: "Genesis"
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_main_item', 'custom_gtbe_main_item' );
/**
 * Genesis Toolbar Extras: Change Main Item Name
 */
function custom_gtbe_main_item() {
	return __( 'Your custom main item', 'your-child-theme-textdomain' );
}
`

**gtbe_filter_main_item_tooltip**

* Default value: "Genesis Framework"
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_main_item_tooltip', 'custom_gtbe_main_item_tooltip' );
/**
 * Genesis Toolbar Extras: Change Main Item Name's Tooltip
 */
function custom_gtbe_main_item_tooltip() {
	return __( 'Your custom main item tooltip', 'your-child-theme-textdomain' );
}
`

**gtbe_filter_genesis_name** and **gtbe_filter_genesis_name_tooltip**

* Default value for both: "Genesis"
* Used for some items within toolbar links to enable proper branding
* Change things like in the other examples/principles shown above


**gtbe_filter_theme_support_url**

* Default value for both: if applicable, support URL accordingly to the used child theme
* Important: Has to be an URL!
* Note: automatically opens in a new window/tab.
* Only used for supported third party child themes.
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_theme_support_url', 'custom_theme_support_url' );
/**
 * Genesis Toolbar Extras: Custom Support URL
 */
function custom_theme_support_url() {
	return 'http://genesisfinder.com/';
}
`

**gtbe_filter_theme_docs_url**

* Default value for both: if applicable, docs/knowledge base URL accordingly to the used child theme
* Important: Has to be an URL!
* Note: automatically opens in a new window/tab.
* Only used for supported third party child themes.
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_theme_docs_url', 'custom_theme_docs_url' );
/**
 * Genesis Toolbar Extras: Custom Docs URL
 */
function custom_theme_docs_url() {
	return 'http://genesisfinder.com/';
}
`

**gtbe_filter_url_child_readme**

* Default value for both: get_stylesheet_directory() . '/README.txt'
* Important: Has to be an existing/ readable .txt file.
* Note: Could only be used if an original 'README.txt' file is there in the child theme's root folder.
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_url_child_readme', 'custom_url_child_readme' );
/**
 * Genesis Toolbar Extras: Custom README URL
 */
function custom_url_child_readme() {
	return 'http://your-support-site.com/customers/readme.txt';
}
`

**gtbe_filter_url_child_changelog**

* Default value for both: get_stylesheet_directory() . '/changelog.txt'
* Important: Has to be an existing/ readable .txt file.
* Note: Could only be used if an original 'changelog.txt' file is there in the child theme's root folder.
* Example code for your child theme's `functions.php` file:
`
add_filter( 'gtbe_filter_url_child_changelog', 'custom_url_child_changelog' );
/**
 * Genesis Toolbar Extras: Custom Changelog URL
 */
function custom_url_child_changelog() {
	return 'http://your-theme-shop-site.com/theme-xy/changelog.txt';
}
`

**Final note:** If you don't like to add your customizations to your child theme's `functions.php` file you can also add them to a functionality plugin or an MU-plugin. This way you can also use this better for Multisite environments. In general you are then more independent from child theme changes etc.

**Final note:** I DON'T recommend to add customization code snippets to your child theme's `functions.php` file! **Please use a functionality plugin or an MU-plugin instead!** This way you can also use this better for Multisite environments. In general you are not abusing the functions.php for plugin-specific stuff and you are then also more independent from child theme changes etc. If you don't know how to create such a plugin yourself just use one of my recommended 'Code Snippets' plugins. Read & bookmark these Sites:

* [**"What is a functionality plugin and how to create one?"**](http://wpcandy.com/teaches/how-to-create-a-functionality-plugin) - *blog post by WPCandy*
* [**"Creating a custom functions plugin for end users"**](http://justintadlock.com/archives/2011/02/02/creating-a-custom-functions-plugin-for-end-users) - *blog post by Justin Tadlock*
* DON'T hack your `functions.php` file: [Resource One](http://thomasgriffinmedia.com/custom-snippets-plugin/) - [Resource Two](http://thomasgriffinmedia.com/blog/2012/09/calling-on-the-wordpress-community/) *(both by Thomas Griffin Media)*
* [**"Code Snippets"** plugin by Shea Bunge](http://wordpress.org/extend/plugins/code-snippets/) - also network wide!
* [**"Code With WP Code Snippets"** plugin by Thomas Griffin](https://github.com/thomasgriffin/CWWP-Custom-Snippets) - Note: Plugin currently in development at GitHub.
* [**"Toolbox Modules"** plugin by Sergej Müller](http://wordpress.org/extend/plugins/toolbox/) - see also his [plugin instructions](http://playground.ebiene.de/toolbox-wordpress-plugin/).

All the custom & branding stuff code above can also be found as a Gist on Github: https://gist.github.com/2198788 (you can also add your questions/ feedback there :)

== Screenshots ==

1. Genesis Toolbar Extras: default icon plus additional colored icons -- default color: turquoise/light blue -- 9 additional colors: brown, dark blue, green, ivory, orange, pink, red, white (= Genesis original!), yellow -- changeable via filters, [see FAQ section here](http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/) ([click on image for larger view](https://www.dropbox.com/s/6d0pj7pycj2gdug/screenshot-1.png))
2. Genesis Toolbar Extras in action - primary level ([click on image for larger view](https://www.dropbox.com/s/catjf3y6zqy0tkw/screenshot-2.png)).
3. Genesis Toolbar Extras in action - Genesis theme settings ([click on image for larger view](https://www.dropbox.com/s/tu7ye4ajhvhlk40/screenshot-3.png)).
4. Genesis Toolbar Extras in action - child theme name plus additional settings, info and support - only if available! (section could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/7ahs0o4pjqikkxw/screenshot-4.png))
5. Genesis Toolbar Extras in action - active extensions - plugins hook in... (section could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/aaf2tj3nbot9ubc/screenshot-5.png))
6. Genesis Toolbar Extras in action - manage content section - for special content-related plugins or custom types of themes - displays only if plugins are active or cpt's available! (section could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/m9fpxrjvmpu8pdq/screenshot-6.png))
7. Genesis Toolbar Extras in action - resources - user guides, tools etc. (whole resources section could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/w2lb0xiemxsc6up/screenshot-7.png))
8. Genesis Toolbar Extras in action - resources - Genesis HQ with more useful stuff (whole resources section could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/vsutitpx79tfn0m/screenshot-8.png))
9. Genesis Toolbar Extras in action - language and translation specific links at the bottom - example here: German locales - only displaying for non-English locales! (both sections could be removed via constant!) ([click on image for larger view](https://www.dropbox.com/s/n3ukhy8cwqjs20d/screenshot-9.png))

== Changelog ==

= 1.6.0 (2012-12-09) =
* *General maintenance:*
 * UPDATE: Updated links and wording for new/ updated official support resources and forums by StudioPress due to changes by StudioPress support.
 * UPDATE: Updated links and wording for new/ updated support resources and forums for all official StudioPress child themes due to changes by StudioPress support.
 * UPDATE: Updated links and wording for new/ updated support resources and forums for all Community/Marketplace child themes sold via studiopress.com due to changes by StudioPress support.
 * NEW: Added a bunch of new filters to better customize support forums/site plus setup/knowledge base titles and URLs for child themes.
 * NEW: Added constants for removing My.SP and/or old support forums stuff if needed (see FAQ section here).
* * Extended Child Theme support:*
 * NEW: Added support for new official child theme "Stretch" by StudioPress.
 * NEW: Added support for new Community/Marketplace child theme "MomPreneur" by Lindsey Riel of Pretty Darn Cute Design.
 * NEW: Added support for "Decor8ted Theme" by Shannon Dow of EightCrazy Designs.
 * NEW: Added support for "theBiz", "Surefire EDD", "Genesis Sandbox" by Sure Fire Web Services, Inc..
 * NEW: Added support for "Nancy", "Daniel" and "Christian" by Web Savvy Marketing, LLC.
 * NEW: Added support for "AyoShop" by AyoThemes at ThemeForest.
 * NEW: Added support for "Solo" by ZigZagPress.
 * NEW: Added support for "Nameless" by Mónica Guerra Leiria.
 * NEW: Added support for "Tasty" by Jared Atchison.
 * NEW: Added support for "Event Manager Theme" by Social Coup Ltd. & Bill Erickson.
* *Extended plugin support:*
 * NEW: Added support for "Genesis Widgetized Archive Pro" (premium, by David Decker of wpAUTOBAHN.com & GenesisThemes.de) - that's from me, hehe :).
 * NEW: Added support for "Genesis Post Navigation" (free, by Iniyan).
 * UPDATE: Changed wording for "Genesis Connect for BuddyPress" - as it is now (since v1.2) a free plugin on WordPress.org (formerly premium via studiopress.com).
 * NEW: Added support for "Infinite Seo" (premium, by WPMU DEV) - also added to Genesis SEO plugin detection.
* *Other stuff:*
 * CODE: Some code/documentation updates & improvements.
 * UPDATE: Corrected and updated readme.txt file here.
 * UPDATE: Updated German translations and also the .pot file for all translators!
 * UPDATE: Moved screenshots to 'assets' folder in WP.org SVN to reduce plugin package size.

= 1.5.1 (2012-11-03) =
* *Extended Child Theme support:*
 * NEW: Added support for new Community/Marketplace child theme "Megalithe" by ZigZagPress.
 * NEW: Added support for "Ellen Mae" by Web Savvy Marketing, LLC.
 * NEW: Added support for "Absolute" by ZigZagPress.
* *Extended plugin support:*
 * NEW: Added support for "Genesis Simple Headers" (free, by 9seeds, LLC).
 * NEW: Added support for "Genesis Responsive Header" (free, by Nick_theGeek).
 * UPDATE: Improved support for premium version of "Soliloquy Sliders".
* *Other stuff:*
 * UPDATE: Corrected and updated readme.txt file here.
 * UPDATE: Updated German translations and also the .pot file for all translators!

= 1.5.0 (2012-10-30) =
* *Extended Child Theme support:*
 * UPDATE: Updated support for official "Minimum" & "Executive" child theme by StudioPress, now both in version 2.0 - including support for 'portfolio' post type section!
 * NEW: Added support for new official child theme "Apparition" by StudioPress.
 * NEW: Added support for "Jemma Theme Me", "Structure", "Full Width Child" by Aaron Hartland.
 * NEW: Added support for "Follow Me" and "Ally" by appfinite/Wes Straham.
 * NEW: Added support for "Lillian", "Dagmar", "Erik", "Anneliese" and "Kathryn" by Web Savvy Marketing, LLC.
 * NEW: Added support for "Domestic8ted LifeStyle Theme" by Shannon Dow of EightCrazy Designs.
 * NEW: Added support for "Grind" by Themedy Themes brand.
 * NEW: Added support for "Pinsomo" and "SomoSocial" by SomoThemes.
 * NEW: Added support for "Engrave", "Showroom", "Simplicity" and "Vanilla" by ZIGZAGPRESS.
 * NEW: Added support for "Herman" and "Morgan" by Len Kutchma of WPCanada.ca.
 * NEW: Added support for "Pin It" by Loren Nason (Your Local Tech).
 * UPDATE: Improved support for "BlogNews" and "Winfield" child themes by WPCanada.ca.
 * UPDATE: Updated and enhanced theme support for all child themes by Web Savvy Marketing, LLC.
* *Extended plugin support:*
 * NEW: Added support for my own (all free) plugins "Genesis Social Profiles Menu", "Genesis Printstyle Plus" and "Genesis Single Post Navigation" for the theme file editor section: you can now additionally edit your own CSS files if you added one to your child theme folder (enabled all via: `add_theme_support( 'gtbe-theme-editor' );` ) -- see the FAQ sections of the mentioned plugins for more info on the styles.
 * NEW: Added support for "Genesis Extender" (premium, by Cobalt Apps/ CatalystThemes.com).
 * NEW: Added support for "Genesis Grid (Loop)" (free, by Bill Erickson).
 * NEW: Added support for "Genesis Bootstrap Carousel" (free, by Justin Tallant).
 * NEW: Added support for "AgentPress Broker Listings (Agents)" (free, by iZone Technology).
 * NEW: Added support for "Jetpack" plugin (free, by Automattic, Inc.) and its "Custom CSS" module (of course, fully respects user capabilities plus module enabled/disabled!).
 * UPDATE: Updated & improved support for "Premise" 2.x premium plugin - you should update the plugin to the latest version to experience the full support here :-).
* *Other stuff:*
 * CODE: Some code/documentation updates & improvements.
 * UPDATE: Updated German translations and also the .pot file for all translators!
 * UPDATE: Initiated new three digits versioning, starting with this version.

= 1.4.0 (2012-08-22) =
* *Maintenance release*
* *Extended Child Theme support:*
 * NEW: Added support for new Community/Marketplace child theme "Craftiness" by Lauren Gaige of Restored 316 Designs.
 * NEW: Added support for "Linky Loo" by Len Kutchma of WPCanada.ca.
 * NEW: Added support for "Dizain 01" by themedizain at ThemeForest.
 * UPDATE: Fixed and improved support for "Optimal" child theme by appfinite.
 * BUGFIX: Fixed "Portfolio" and "Slides" support for child themes of Themedy brand.
 * UPDATE: Fixed support for "custom.css" file for child themes of Themedy brand (now corresponding with Themedy settings).
 * BUGFIX: Fixed support for "README.txt" files for child themes of Themedy brand.
 * UPDATE: Added support for "changelog.txt" files also for Marketplace/Community themes (via StudioPress).
* *Extended plugin support:*
 * NEW: Added support for "Widget Settings Importer/Exporter" (free, by Kevin Langley & smccafferty) - in general a great tool for backing up and importing current widget settings.
 * NEW: Added support for "(SPYR) Network Bar" (free, by Spyr Media) - in general a great additional tool for every (networking) site.
 * NEW: Added support for great "RoyalSlider" responsive slider plugin (premium, by Semenov) -- note: only for 'Manage Content' section.
 * NEW: Added support for great "TouchCarousel" responsive content carousel plugin (premium, by Semenov) -- note: only for 'Manage Content' section.
* *Other stuff:*
 * CODE: Minor code/documentation updates & improvements.
 * UPDATE: Added new filters introduced in v1.3.0 to documentation in FAQ here and also to the [GitHub Gist snippets for this plugin](https://gist.github.com/2198788).
 * UPDATE: Updated German translations and also the .pot file for all translators!

= 1.3.0 (2012-08-14) =
* *New features:*
 * NEW: Added live search box for GenesisFinder.com on primary level -- the custom search engine for the Genesis Framework plus ecosystem & community.
 * NEW: Added new resource links to StudioPress.tv, 'official' Community Tutorials and Brad Potter Code Snippets (community).
 * NEW: README.txt support might be removed from one of next Genesis versions, so I just added my own README.txt support for child themes.
 * NEW: Added "changelog.txt" support child themes (like the one for README.txt), so if a file `changelog.txt` is available in child theme root folder it will be added to the left-hand Genesis menu as well as the Theme section of my plugin :).
 * NEW: Added help tab on Genesis settings pages.
 * NEW: Added 2 new filters for third party child themes allowing admins to change the support and documentation URLs.
* *Extended Child Theme support:*
 * NEW: Added support for new official child theme "Quattro" by StudioPress.
 * NEW: Added support for "Easy Downloads" by David Decker of GenesisThemes.de.
 * NEW: Added support for "Robert", "Mariah", "Alexandra" and "Frederik" by Web Savvy Marketing, LLC.
 * NEW: Added support for new Community/Marketplace child theme "Glitter and Lace" by Heather Jones of Viva la Violette.
 * NEW: Added support for new Community/Marketplace child theme "Innov8tive" by Shannon Dow of EightCrazy Designs.
 * NEW: Added support for new Community/Marketplace child theme "Inspired" by Lauren Gaige of Restored 316 Designs.
 * NEW: Added enhanced support for new "Dynamik Website Builder" (aka Dynamik Genesis) by Catalyst Themes -- with full respect of the user profile admin menu settings!
 * NEW: Added support for "Blink" and (upcoming) "Tote" by Themedy Themes brand.
 * UPDATE: Updated and enhanced theme support for all child themes by Web Savvy Marketing, LLC.
* *Extended plugin support:"
 * NEW: Added support for "AgentPress Listings Taxonomy Reorder" (free, by Robert Iseley).
 * UPDATE: Updated support for "WordPress SEO by Yoast" to reflect his recent plugin updates/changes (v1.2+ branch; versions prior may not work any longer, so please update).
 * UPDATE: Updated and improved Premise premium plugin support - especially for the 2.1 branch -- so please update your Premise version if you haven't already :).
 * NEW: Added support for awesome "Soliloquy" & "Soliloquy Lite" responsive slider plugins (free & premium versions, by Thomas Griffin Media) -- note: only for 'Manage Content' section.
* *Other stuff:*
 * NEW: Moved resources and translations links group from plugin main file to extra files for performance optimization if one or all of these group might be disabled via constant.
 * CODE: Minor code/documentation updates & improvements.
 * UPDATE: Corrected and updated German translations and also the .pot file for all translators!

= 1.2.0 (2012-05-16) =
* NEW: Added support for community translation project.
* NEW: Added support for new Community/Marketplace child theme "Adorable" by Lindsey Riel of Pretty Darn Cute Design.
* NEW: Added support for new Community/Marketplace child theme "RealPro" by Chris Ford of Creativity Included.
* NEW: Added support & integration for "Genesis Design Palette" (free, Andrew Norcross)
* UPDATE: Changed behavior of constants for removing sections (or all), so that setting to "FALSE" removes stuff, and setting to "TRUE" displays stuff. (This does not affect existing behavior as explained in the FAQ but introduces ability to use the boolean "TRUE" to bring stuff back in favor of removing the code lines - great for testing purposes etc.)
* UPDATE: Updated German translations and also the .pot file for all translators!

= 1.1.0 (2012-05-07) =
* *New features:*
 * NEW: Added support for third-party SEO plugins for which Genesis SEO options degrade gracefully - I even added 3 more plugins to the "degrade filter" for better and extended support :) (also see below, plugin section)
 * NEW: Via `add_theme_support( 'gtbe-theme-editor' );` you can now add Theme Editor links for `style.css` and `functions.php` of your current child theme to the child theme section -- if enabled it will only display if the user has the proper cabalitities and if the Theme Editor is not disabled via wp-config!
 * NEW: For "Themedy" brand added links to edit `custom.css` and `custom_functions.php` files via Theme Editor - only if the user has the proper cabalitities and if the Theme Editor is not disabled via wp-config!
 * NEW: Added simple fallback for any Genesis Child Theme which has no added extended support here: displaying its name and if available the 'README' in the backend (Theme Editor links could also activated for these themes!).
 * NEW: Added 4 action hooks for hooking custom menu items in -- for all main sections plus the resource group section (see FAQ section here for more info on that).
* *Extended Child Theme support:*
 * NEW: Added support for new official child themes "Decor" and "Mindstream" by StudioPress.
 * NEW: Added support for "Adapt", "Skope", "Imagery" and "Classik" by appfinite/Wes Straham; improved support for now Community/Marketplace child theme "Optimal".
 * NEW: Added support for "Derby" by Themedy Themes brand
 * NEW: Added support for "Color Me Happy" and "Celebrate" by The Pixelista
 * NEW: Added support for "Hans" by Web Savvy Marketing, LLC
 * NEW: Added support for "Peppermint" by Sara Greenlaw - Swoon Media
 * NEW: Added support for "Radio" (v1.1+) by Greg Rickaby
 * NEW: Added support for "WP Presenter for Genesis" by Pat Ramsey
 * NEW: Added support for "Photo Pro" by Creativity Included
 * UPDATE: Improved child theme detection for the 4 other themes by Web Savvy Marketing, LLC
* *Extended Plugin support:*
 * NEW: Added support for "Genesis 404 Page" (free, by Bill Erickson)
 * NEW: Added support for "Genesis Portfolio" (free, by Travis Smith) - note: plugin currently in beta status!
 * NEW: Added support for SEO plugins supported by Genesis SEO plugin detection - so if one of these is active, the link to Genesis SEO options becomes disabled and instead of it the proper admin settings pages of the current SEO plugin is hooked in. *Yes, it's that awesome! :)* -- See under "Other Notes" here for supported SEO plugins...
 * UPDATE: Improved "Premise" support - loading stuff only if plugin is in use.
* *Other stuff:*
 * UPDATE: Improved 'custom code/css' section detection for Prose 1.5 child theme - now showing custom links also in frontend.
 * UPDATE: Added full compatibility with WordPress 3.4+ (tested since 3.4-beta1 up to latest trunk version).
 * UPDATE: Moved plugin links from main file to extra admin file which only loads within 'wp-admin', this way it's performance-improved! :)
 * CODE: Beside new features, code/documentation tweaks and improvements.
 * CODE: Successfully tested against Genesis 1.8+ plus WordPress 3.3 branch and new 3.4 branch. Also successfully tested in WP_DEBUG mode (no notices or warnings).
 * UPDATE: Updated readme.txt documentation/FAQ here plus on the GitHub Gist.
 * UPDATE: Updated German translations and also the .pot file for all translators!
 * UPDATE: Extended GPL License info in readme.txt as well as main plugin file.
 * NEW: Easy plugin translation platform with GlotPress tool: [Translate "Genesis Toolbar Extras"...](http://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/genesis-toolbar-extras)

= 1.0.0 (2012-03-26) =
* Initial release
* *Support for the most stuff available already built-in - just working out of the box:*
 * Including support for 55 official premium & free child themes by StudioPress
 * Including support for 79 third-party child themes - including from StudioPress Marketplace, Themedy Themes, ThemeForest Authors and lots of other developers/companies
 * Including support for 7 Genesis official plugin extensions by StudioPress
 * Including support for 21 Genesis third-party plugin extensions
 * Including support for 6 plugins from the "ecosystem" around Genesis - Simple URLs, SEO Data Transporter, Premise 1.x & 2.0+, Scribe SEO, Dynamic Content Gallery (DCG), WP-Cycle

== Upgrade Notice ==

= 1.6.0 =
Several additions & updates: Updated all support resources to reflect StudioPress changes. Extended theme & plugin support. Updated .pot file for translators plus German translations.

= 1.5.1 =
Several additions & improvements: Extended theme & plugin support. Updated .pot file for translators plus German translations.

= 1.5.0 =
Several additions & improvements: Extended theme & plugin support. Some code updates, fixes and improvements. Updated .pot file for translators plus German translations.

= 1.4.0 =
Several additions & improvements: Extended theme & plugin support. Some code updates, fixes and improvements. Updated .pot file for translators plus German translations.

= 1.3.0 =
Several additions & improvements: GenesisFinder search box; README and Changelog support; extended theme & plugin support. Updated .pot file for translators plus German translations.

= 1.2.0 =
Several additions & improvements: Extended theme & plugin support! Added community translations project. Improved constants behavior. Updated .pot file for translators plus German translations.

= 1.1.0 =
Major improvements + several changes: Extended theme & plugin support! Added SEO Plugin support! Also added theme editor links for custom styles & functions. Updated .pot file for translators plus German translations.

= 1.0.0 =
Just released into the wild.

== Plugin Links ==
* [Translations (GlotPress)](http://translate.wpautobahn.com/projects/genesis-plugins-deckerweb/genesis-toolbar-extras)
* [User support forums](http://wordpress.org/support/plugin/genesis-toolbar-extras)
* [Code snippets archive for customizing, GitHub Gist](https://gist.github.com/2198788)

== Donate ==
Enjoy using *Genesis Toolbar Extras*? Please consider [making a small donation](http://genesisthemes.de/en/donate/) to support the project's continued development.

== Translations ==

* English - default, always included
* German (de_DE): Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/genesis-plugins/#genesis-toolbar-extras)
* For custom and update-secure language files please upload them to `/wp-content/languages/genesis-toolbar-extras/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that as well, just use a language file like `genesis-toolbar-extras-en_US.mo/.po` to achieve that (for creating one see the following tools).

**Easy plugin translation platform with GlotPress tool:** [**Translate "Genesis Toolbar Extras"...**](http://translate.wpautobahn.com/projects/genesis-plugins-deckerweb/genesis-toolbar-extras)

*Note:* All my plugins are internationalized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/), which works fine on Windows, Mac and Linux.

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the Genesis users out there to make their daily web admin life a bit easier. I'll try to add more plugin support if it makes some sense. So stay tuned :).

**Genesis News Planet** I also have started a little news/feed service via "FriendFeed" that you can subscribe to: http://friendfeed.com/genesisnews -- Please contact me via my Twitter for new resources (that have an RSS feed and are Genesis-related!)

== Supported Child Themes and Plugins ==
*Please note, only plugins with linkable settings pages and/or meta boxes (with an ID anchor) can be supported.*

= Official Child Themes by StudioPress =
* All official *premium* themes, 54+ to date -- see under studiopress.com
* including: AgentPress 2.0.x and 1.0, Prose 1.0 and 1.5.x
* also including discontinued/ retired themes: AgentPress 1.x, Church, Lexicon, Pixel Happy, Social Eyes, Tapestry, Venture
* All official *free* themes, 6+ -- see under studiopress.com
* Including free "Sample Child Theme"
* Including "Genesis Default" (no child theme, but it's always recommended to use a child theme...)

= Community/Marketplace Child Themes from studiopress.com =
* All community/marketplace child themes sold via studiopress.com platform, 24+ to date
* including these retired themes: Blingless, Driskill, Fashionista, Politica
* See under studiopress.com for full and growing list...
* Note: if available, all extra setting pages are fully supported, as well as their specific support link resources.

= Child Themes from the "Themedy" Brand =
* All Genesis child themes from the "Themedy" Brand, 16+
* Note: the extra settings pages from all, plus the content types (if available) from some child themes are fully supported!
* The specific Themedy support resource links are supported as well

= Third-party Child Themes from the Community or Other Marketplaces =
* All by GenesisThemes.de/DECKERWEB, 2+ (free & premium)
* All by Appfinite (Wes Straham), 9+ (all premium)
* All by Web Savvy Marketing, LLC, 18+ (all premium)
* All by WPCanada (Len Kutchma), 16+ (all free)
* All by ZIGZAGPRESS, 7+ (all premium) - includes support for Portfolio & Slides post types!
* All by Sure Fire Web Services, Inc., 3+ (free & premium)
* All by Marco Galasso - Teethgrinder, 6+ (free & premium)
* All by SomoThemes, 2+ (all premium)
* All by FlashingCursor, 2+ (all premium)
* All by Travis Smith, 2+ (all premium)
* All by Josh Stauffer, 2+ (all free)
* All by Rafal Tomal, 2+ (all free)
* All by Aaron Hartland, 5+ (all free)
* All by MediaCairn Design Studio, 2+ (all free)
* All by "Allure Themes" brand, 8+ (all premium - though, not longer available at the moment...)
* All by The Pixelista (Jessica Barnard), 2+ (all premium)
* "Domestic8ted LifeStyle Theme", "Decor8ted Theme" by Shannon Dow of EightCrazy Designs (both premium).
* "Dynamik Website Builder" (aka Dynamik Genesis) by Catalyst Themes/Cobalt Apps, Inc. (premium)
* "Nameless" by Mónica Guerra Leiria (free)
* "Buster" by Bradley Potter (free)
* "Simply Sweet" by Auxano Creative (free)
* "Fluid" by Nick Croft - Designs by Nickthe_Geek (currently free)
* "Pin It" by Loren Nason/Your Local Tech (free)
* "Event Manager Theme" by Social Coup Ltd. & Bill Erickson (premium).
* "Peppermint" by Sara Greenlaw - Swoon Media
* "Charisma" by Cristian Antohe/Cozmoslabs (free)
* "Belvedere" by Ryan Holder (once premium, not longer available)
* "Tasty" (free), "Twenty Diez" (once free), "Matrimony" (once premium) by Jared Atchison
* "BE Gallery", "Genesis CRM" by Bill Erickson (free)
* "Bones for Genesis" by Eddie Machado/Themble (once premium, now free)
* "Code Chirps" by Daniel Shamburger/Code Chirps (free)
* "Speaker" by OC^2 & Pixelterra (premium)
* "Photo Pro" by Creativity Included (once premium)
* "Fringe", "Radio" (v1.1+) by Greg Rickaby (all free)
* "WP Presenter for Genesis" by Pat Ramsey (free)
* "Zirconium" by Mark Howe/Next Level Innovation (free)
* "myTunes" by Dee Teal - the Web Princess (free)
* "Tee Box" by Alan Smith/Media317 (free)
* "Weight Loss" by Selena - PLR Diva (free)
* "DocPress" (Genesis Version) by Okay Themes (Mike McAlister) (once premium - not longer available, though...)
* from "ThemeForest" marketplace, all premium: "AyoShop" by AyoThemes / "Caffeinated" by jtwerdy / "Dizain 01" by themedizain (includes support for Portfolio post type!) / "Improvement" by Kuba Sto / "Avett" by KidThemes / "Hightech" by Lauren Mancke & Northbound Design / "Nzig" by haikbvn (not longer available, though...)
* "On Demand" (Genesis Version) by Press75.com (once premium, not longer available...)
* "Extended Magazine" by WPChildThemes (once premium, not longer available, though...)

= Official Plugin Extensions by StudioPress =
* Genesis Simple Edits - free
* Genesis Simple Sidebars - free
* Genesis Simple Hooks - free
* Genesis Slider - free
* Genesis Responsive Slider - free
* AgentPress Listings - free
* Genesis Connect for BuddyPress - free since v1.2 (formerly premium!)

= Third-Party Extension Plugins by the Community =
* Genesis Widgetized Archive Pro - premium
* Genesis Layout Extras - free
* Genesis Simple Breadcrumbs - free
* Genesis Simple Comments - free
* Genesis Media Project - free
* Genesis Portfolio - free
* Genesis Custom Post Type Archives - free
* Genesis Promotion Box - free
* Genesis Press Post Type - free
* Genesis Favicon Uploader - free
* Genesis Responsive Header - free
* Genesis Simple Headers - free
* Genesis Custom Backgrounds - free
* Genesis Design Palette - free
* Genesis Bootstrap Carousel - free
* Generate Box (only for Generate child theme) - free
* Genesis 404 Page - free
* Genesis Grid (Loop) - free (Bill Erickson)
* Genesis Grid - free (Travis Smith)
* Genesis Featured Images - free
* Genesis Post Teasers - free
* Genesis Title Toggle - free
* Genesis Style Select - free
* Genesis Post Navigation - free
* Genesis Footer Widgets - free
* bbPress Genesis Extend - free
* Genesis Hooks - free
* AgentPress Listings Taxonomy Reorder - free
* Genesis Simple Defaults - free
* Genesis Comment Title - free
* AgentPress Broker Listings (Agents)" - free
* Genesis Accordion  - free (see: http://slash25.com/genesis-accordion-plugin/ )
* Genesis Printstyle Plus - free
* Genesis Social Profiles Menu - free
* Genesis Single Post Navigation - free
* Genesis Extender - premium!

= Plugins from the Genesis Ecosystem =
* Simple URLs - free
* SEO Data Transporter - free
* Premise v1.x & v2.x - premium plugin! -- Note: also includes full support for "Membership Module" introduced with Premise v2.x!
* Scribe SEO - Note: free plugin but a premium service! (we only support the free plugin!)
* Dynamic Content Gallery (DCG) - free -- Used/recommended by older child themes like "Church", "Lifestyle 1.0" ...
* WP-Cycle - free -- Note: used by some child themes like "Enterprise", "Outreach" (1.0.x only) or "Buster" ...

= Other Supported Plugins =
* Soliloquy for WordPress (premium!) - one of the best slider plugins around
* Soliloquy Lite (free version!)
* Widget Settings Importer/Exporter (free)
* (SPYR) Network Bar (free)
* RoyalSlider (premium)
* TouchCarousel (premium)
* Jetpack - *only support for its "Custom CSS" module, though!*

= SEO Plugins supported by Genesis SEO Plugin Detection =
* *since v1.1.0 of the plugin*
* wpSEO by Sergej Müller (premium, see: wpseo.de)
* WordPress SEO by Yoast (free), v1.2+ required!
* All In One SEO Pack by Michael Torbert (free version)
* All In One SEO Pack Pro by Michael Torbert (premium version)
* SEO Ultimate by SEO Design Solutions (free)
* HeadSpace2 by John Godley (free)
* gdHeadSpace4 by Milan Pretovic of Dev4Press (free, fork of HeadSpace2!)
* Platinum SEO Pack by Rajesh (free)
* Greg's High Performance SEO by Greg Mulhauser (free)
* Infinite Seo by WPMU DEV (premium)
