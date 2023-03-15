<?php
/*
 * Plugin Name:       Friends of the Dales WordPress Plugin
 * Plugin URI:        https://github.com/bjorsq/fotd
 * Description:       Wordpress filters for the Friends of the Dales website.
 * Version:           0.0.1
 * Requires at least: 5
 * Requires PHP:      7.2
 * Author:            Peter Edwards
 * Author URI:        https://github.com/bjorsq
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

add_filter('wpcf7_autop_or_not', '__return_false'); 
?>