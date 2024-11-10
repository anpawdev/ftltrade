<?php
/**
 * Plugin Name: WPSafeHaven
 * Description: A must-use plugin with recommended best practices for WordPress hardening.
 * Author: createIT
 * Version: 1.01
 */

// Remove version information from website header and RSS feeds
function ctwpst_remove_version_info() {
    return '';
}
add_filter('the_generator', 'ctwpst_remove_version_info');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Disable JSON REST API for non-authenticated users
function ctwpst_disable_json_api($access) {
    if (!is_user_logged_in() && function_exists('rest_url')) {
        return new WP_Error('rest_login_required', 'REST API restricted to authenticated users.', array('status' => 401));
    }
    return $access;
}
add_filter('rest_authentication_errors', 'ctwpst_disable_json_api');

// Remove unnecessary header information
function ctwpst_remove_header_info() {
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'ctwpst_remove_header_info');

// Disable file editor for themes and plugins
define('DISALLOW_FILE_EDIT', true);

// prevent PHP execution in the uploads directory.
define('DISALLOW_FILE_EXECUTE', true);

/**
 * Additional security tweaks can be added here
 */


/**
 * Blocking requests
 */
function ctwpst_log_and_block_request($reason = 'Unknown') {
    header('HTTP/1.1 403 Forbidden');
    exit('Access denied: ' . $reason);
}

// Disable author enumeration
function ctwpst_disable_author_enumeration($redirect_url, $requested_url) {
    if (preg_match('/\?author=([0-9]+)/', $requested_url)) {
        ctwpst_log_and_block_request('Author enumeration');
    }
    return $redirect_url;
}

add_filter('redirect_canonical', 'ctwpst_disable_author_enumeration', 10, 2);

// Protect against spam bots by checking the user agent and referrer
function ctwpst_check_user_agent_and_referrer() {
    if (empty($_SERVER['HTTP_USER_AGENT']) || (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], get_option('home')) !== 0)) {
        ctwpst_log_and_block_request('Bad user agent or referrer');
    }
}

add_action('init', 'ctwpst_check_user_agent_and_referrer');


// Hide login errors
function ctwpst_hide_login_errors() {
    return 'Incorrect login details.';
}

add_filter('login_errors', 'ctwpst_hide_login_errors');

// temporary IP bans to prevent brute-force attacks
function ctwpst_custom_login_failed($username) {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $attempts_key = 'failed_logins_' . md5( $username . $ip_address );

    // Increment the failed login count for this IP address and username combination
    $failed_login_count = (int) get_transient( $attempts_key );
    set_transient( $attempts_key, ++$failed_login_count, 60 * MINUTE_IN_SECONDS );
}
add_action( 'wp_login_failed', 'ctwpst_custom_login_failed' );

function ctwpst_custom_authenticate( $user, $username, $password ) {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $attempts_key = 'failed_logins_' . md5( $username . $ip_address );
    $failed_login_count = (int) get_transient( $attempts_key );

    if ( $failed_login_count >= 3 ) {
        ctwpst_log_and_block_request( 'Too many login attempts' );
    }

    return $user;
}
add_filter( 'wp_authenticate_user', 'ctwpst_custom_authenticate', 10, 3 );


// Add security headers
function ctwpst_add_security_headers() {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: no-referrer');
}

// add_action('send_headers', 'ctwpst_add_security_headers');

// Disable the WordPress emoji script and stylesheet:
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable pingbacks and trackbacks
add_filter('xmlrpc_methods', function ($methods) {
    unset($methods['pingback.ping']);
    unset($methods['pingback.extensions.getPingbacks']);
    unset($methods['pingback.extensions.getPingbacks']);
    return $methods;
});

/**
 * Other
 */


// htaccess - add security directives
function ctwpst_update_htaccess_file() {
    $htaccess_file = ABSPATH . '.htaccess';

    if (!file_exists($htaccess_file)) {
        return;
    }
    if (!is_writable($htaccess_file)) {
        return;
    }

    $htaccess_directives = array(
        'Disable directory browsing' => 'Options -Indexes',
        'Prevent access to PHP files in certain directories' => '<FilesMatch "(^\.|wp-config\.php|php\.ini|\.htaccess|readme\.html|wp-content\/mu-plugins\/)">(Require all denied)</FilesMatch>',
        'Prevent access to XML-RPC' => '<Files xmlrpc.php>(Require all denied)</Files>',
        'Prevent access to debug.log file' => '<Files debug.log>(Require all denied)</Files>',
    );

    $last_run_time = get_transient('ctwpst_htaccess_last_run_time');
    $current_time = time();
    $interval = 3600 * 12; // Run once every 12 hours

    if ($last_run_time && ($current_time - $last_run_time) < $interval) {
        return;
    }

    $htaccess_content = file_get_contents($htaccess_file);

    $new_htaccess_content = '';
    foreach ($htaccess_directives as $directive_name => $directive_code) {
        if (!preg_match('/'.$directive_name.'/', $htaccess_content)) {
            $new_htaccess_content .= $directive_code . "\n\n";
        }
    }

    if (!empty($new_htaccess_content)) {
        file_put_contents($htaccess_file, $new_htaccess_content, FILE_APPEND | LOCK_EX);
        set_transient('ctwpst_htaccess_last_run_time', $current_time);
    }
}

// add_action('init', 'ctwpst_update_htaccess_file');

// Enable automatic updates for core
define('WP_AUTO_UPDATE_CORE', true);

// Enable automatic updates for plugins
add_filter('auto_update_plugin', '__return_true');