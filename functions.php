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

/* Add additional thumbnail sizes*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'central-home-large', 400, 266, true);

/* Flush rewrite rules on init*/
	add_action('init', 'central_flush_rewrite', 11);
	function central_flush_rewrite(){
		flush_rewrite_rules( false );
	}
