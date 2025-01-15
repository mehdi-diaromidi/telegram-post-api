<?php
/*
Plugin Name: telegram-post-api
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: ارسال پست به کانال تلگرام
Author: M.Mehdi Diaromidi
Version: 1.0.0
License: GPLv2 or later
Author URI: http://mehdidiaromidi@gmail.com
*/

defined('ABSPATH') || exit;

define('DTA_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DTA_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once DTA_PLUGIN_DIR . 'class/TelegramApi.php';
require_once DTA_PLUGIN_DIR . 'class/TelegramApiResponseHandler.php';
require_once DTA_PLUGIN_DIR . 'class/TelegramApiSettings.php';

add_action('publish_post', 'TelegramApi::send_post_to_telegram_channel', 10, 2);
add_action('admin_menu', ['TelegramApiSettings', 'add_settings_page']);
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_script('sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', [], null, true);
});
