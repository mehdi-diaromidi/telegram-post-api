<?php

class TelegramApiResponseHandler
{
    // Handle success messages with Toast
    public static function handle_success($message)
    {
        add_action('admin_footer', function () use ($message) {
            echo '<script type="text/javascript">
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "success",
                    title: "' . esc_js($message) . '",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>';
        });
    }

    // Handle error messages with Toast
    public static function handle_error($message)
    {
        add_action('admin_footer', function () use ($message) {
            echo '<script type="text/javascript">
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "error",
                    title: "' . esc_js($message) . '",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>';
        });
    }

    // Handle warning messages with Toast
    public static function handle_warning($message)
    {
        add_action('admin_footer', function () use ($message) {
            echo '<script type="text/javascript">
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: "warning",
                    title: "' . esc_js($message) . '",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>';
        });
    }
}
