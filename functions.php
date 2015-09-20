<?php
/**
 *File Name: functions.php
 *Theme Name: Aurora Zaporozhye
 *Theme URI: https://github.com/rustamojukas/aurora_zaporozhye
 *Author: Rustam Ojukas
 *Author URI: http://it-group4you.com
 *Description: Worpress theme for website http://zp.aurora.ua.
 *Version: 0.1.0
 *License: GNU General Public License v2 or later
 *License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *GitHub Theme URI: https://github.com/rustamojukas/aurora_zaporozhye
 *GitHub Branch: master
 */

/**
 * Security.
 */
  remove_action('wp_head', 'wp_generator');
  add_filter('xmlrpc_enabled', '__return_false');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');

/**
 * Add thumbnail feature.
 */
add_theme_support( 'post-thumbnails' );
?>