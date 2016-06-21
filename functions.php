<?php
// Remove wordpress headers
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// Remove dashboard widgets
	add_action('wp_dashboard_setup', 'CUI_remove_dashboard_widgets' );
	function CUI_remove_dashboard_widgets() {
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side');
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side');
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal');
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side');
	}

// Remove Emoji stuff
function CUI_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'CUI_disable_emojis' );

//Add theme support for the title tag
function cui_add_title_tag(){
		add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cui_add_title_tag');

/* Add additional thumbnail sizes*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'central-home-large', 400, 266, true);

/* Flush rewrite rules on init*/
	add_action('init', 'central_flush_rewrite', 11);
	function central_flush_rewrite(){
		flush_rewrite_rules( false );
	}
// ----------------------------------------------------------------
// Add menu for managing homepage items
// ----------------------------------------------------------------
function homepage_items_menu(){
	add_menu_page('Homepage', 'Homepage', 'edit_pages', 'homepage_items_menu', 'homepage_items_edit', 'dashicons-admin-home', 4);
}
add_action('admin_menu', 'homepage_items_menu');

//HTML for this page is done through an include.
function homepage_items_edit(){
	include 'features/homepage.php';
}
// ----------------------------------------------------------------
// Add menu for managing homepage items
// ----------------------------------------------------------------
function tweak_image_gallery($output){
	$string = $output;
	$pattern = '<a ';
	$replacement = '<a data-lightbox="central-gallery" data-lightbox="roadtrip"';
	$result = str_ireplace($pattern, $replacement, $string);
	$length = strlen($output);
	return $result;
}
add_filter('the_content', 'tweak_image_gallery', 99);
