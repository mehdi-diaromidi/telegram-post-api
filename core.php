<?php
/*
Plugin Name: telegram-post-api
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: telegram-post-api
Author: M.Mehdi Diaromidi
Version: 1.0.0
License: GPLv2 or later
Author URI: http://mehdidiaromidi@gmail.com
*/
defined('ABSPATH') || exit;

define('DTA_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DTA_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once DTA_PLUGIN_DIR . 'class/TelegramApi.php';
TelegramApi::send_message_to_telegram_channel();
