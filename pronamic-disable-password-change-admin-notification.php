<?php
/**
 * Pronamic Disable Password Change Admin Notification
 *
 * @package Pronamic\WordPressDisablePasswordChangeAdminNotification
 * @author Pronamic
 * @copyright 2022 Pronamic
 * @license GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Pronamic Disable Password Change Admin Notification
 * Plugin URI:        https://www.pronamic.eu/plugins/pronamic-disable-password-change-admin-notification/
 * Description:       Prevents WordPress from sending email notifications to the site admin when a user changes their password.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      8.1
 * Author:            Pronamic
 * Author URI:        https://www.pronamic.eu/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.pronamic.eu/
 * Update URI:        https://www.pronamic.eu/plugins/pronamic-disable-password-change-admin-notification/
 */

if ( ! function_exists( 'wp_password_change_notification' ) ) {
	/**
	 * Overwrite the pluggable `wp_password_change_notification()` function.
	 * 
	 * @link https://github.com/johnbillion/wp_mail/blob/trunk/README.md#user-resets-their-password
	 * @link https://developer.wordpress.org/reference/functions/wp_password_change_notification/
	 * @param WP_User $user WordPress user object.
	 * @return void
	 */
	function wp_password_change_notification( $user ) {
	}
}
