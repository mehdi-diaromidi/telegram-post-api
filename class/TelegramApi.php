<?php

class TelegramApi
{

    protected static $botToken = '7806854898:AAGltlWkpNdzbP15lnqhxgykJLiB7TfKHm8';
    protected static $baseUrl = 'https://api.telegram.org';
    protected static $chat_id = '@wp_dollar_daily';

    public static function send_message_to_telegram_channel()
    {
        $text = 'hi, this is the test!';
        self::connect_to_telegram_api(self::$chat_id, $text);
    }

    public static function connect_to_telegram_api($chat_id, $text)
    {

        $request_url = self::$baseUrl . '/' . self::$botToken . '/' . 'sendMessage?chat_id=' . $chat_id . '&text=' . $text;
        $response = wp_remote_get($request_url);
        var_dump($response);

        if (is_array($response) && !is_wp_error($response)) {
        }
    }
}
