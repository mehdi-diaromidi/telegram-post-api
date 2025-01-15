<?php

class TelegramApiSettings
{
    public static function add_settings_page()
    {
        add_options_page(
            'تنظیمات ارسال به تلگرام',
            'ارسال به تلگرام',
            'manage_options',
            'telegram-api-settings',
            [__CLASS__, 'render_settings_page']
        );
    }

    public static function render_settings_page()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dta_settings_nonce']) && wp_verify_nonce($_POST['dta_settings_nonce'], 'dta_save_settings')) {
            update_option('dta_bot_token', sanitize_text_field($_POST['dta_bot_token']));
            update_option('dta_chat_id', sanitize_text_field($_POST['dta_chat_id']));

            TelegramApiResponseHandler::handle_success('تنظیمات با موفقیت ذخیره شد.');
        }

        $bot_token = get_option('dta_bot_token', '');
        $chat_id = get_option('dta_chat_id', '');

        echo '<div class="wrap">
            <h1>تنظیمات ارسال به تلگرام</h1>
            <p style="color: red;">توجه: سروری که سایت شما بر روی آن قرار دارد، باید خارج از ایران باشد تا این ربات کار کند.</p>
            <form method="post">
                ' . wp_nonce_field('dta_save_settings', 'dta_settings_nonce', true, false) . '
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="dta_bot_token">توکن ربات تلگرام:</label></th>
                        <td>
                            <input name="dta_bot_token" type="text" id="dta_bot_token" value="' . esc_attr($bot_token) . '" class="regular-text">
                            <p class="description">برای دریافت توکن، یک ربات در تلگرام ایجاد کرده و توکن آن را از طریق BotFather دریافت کنید.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="dta_chat_id">آیدی کانال تلگرام:</label></th>
                        <td>
                            <input name="dta_chat_id" type="text" id="dta_chat_id" value="' . esc_attr($chat_id) . '" class="regular-text">
                            <p class="description">رباتی که ساخته‌اید باید به عنوان مدیر کانال تنظیم شود.</p>
                        </td>
                    </tr>
                </table>
                <p class="submit">
                    <button type="submit" class="button-primary">ذخیره تنظیمات</button>
                </p>
            </form>
        </div>';
    }
}
