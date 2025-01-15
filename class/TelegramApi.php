<?php

class TelegramApi
{
    protected static $botToken;
    protected static $baseUrl = 'https://api.telegram.org';
    protected static $chat_id;

    // Initialize settings
    public static function init()
    {
        self::$botToken = get_option('dta_bot_token', '');
        self::$chat_id = get_option('dta_chat_id', '');
    }

    public static function send_post_to_telegram_channel($ID, $post)
    {
        self::init();

        if (empty(self::$botToken) || empty(self::$chat_id)) {
            TelegramApiResponseHandler::handle_error('Bot token or chat ID is not configured.');
            return;
        }

        $caption = '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' . PHP_EOL . wp_trim_words(
            $post->post_content,
            num_words: 30,
            more: ' ... '
        );

        $photo = get_the_post_thumbnail_url();

        $response = self::connect_to_api(self::$chat_id, $caption, $photo);

        if (is_wp_error($response)) {
            TelegramApiResponseHandler::handle_error($response->get_error_message());
        } else {
            TelegramApiResponseHandler::handle_success('Post successfully sent to Telegram channel.');
        }
    }

    public static function connect_to_api($chat_id, $caption, $photo)
    {
        $query_string = http_build_query([
            'chat_id' => $chat_id,
            'photo' => $photo,
            'caption' => $caption,
            'protect_content' => true,
            'parse_mode' => 'HTML'
        ]);

        $request_url = self::$baseUrl . '/bot' . self::$botToken . '/sendPhoto?' . $query_string;

        return wp_remote_get($request_url);
    }
}
