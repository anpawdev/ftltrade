<?php

// For W3C
add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle) {
  return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

function disable_default_dashboard_widgets() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');

function remove_xmlrpc_pingback_ping($methods)
{
	unset($methods['pingback.ping']);
	unset($headers['X-Pingback']);
	return $methods;
}

add_filter('xmlrpc_enabled', '__return_false');
add_filter('xmlrpc_methods', 'remove_xmlrpc_pingback_ping');

remove_action('wp_head', 'feed_links');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator');

function author_page_redirect()
{

	if (is_author()) {

		wp_redirect(home_url());
	}
}

add_action('template_redirect', 'author_page_redirect');