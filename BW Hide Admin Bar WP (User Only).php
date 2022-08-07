<?php

/*

Plugin Name: BW Hide Admin Bar WP (User Only)
Plugin URI: https://www.berbakti.com/bw-hide-admin-bar-wp-for-user-only/
Description: BW Hide Admin Bar WP is a plugin that has the ability to hide the appearance of the WordPress Admin Bar. The existence of this plugin makes it easy for WordPress users to hide the Admin Bar, whether all users or WP administrators are made an exception.
Version: 1.0.0
Author: Berbakti Webhoster
Author URI: https://www.berbakti.com/
Donation URI: https://www.berbakti.com/donation/
Development URI: https://www.fajarpos.com/
License: GPL v2.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/

/*Hide Admin Bar Wordpress only User */

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

?>
