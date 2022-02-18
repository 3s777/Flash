<?php


class Flash
{
    /**
     * Получаем данные и вносим их в сессию
     *
     * @param $name string
     * @param $message string
     */
    public static function set_flash_message($name, $message) {
        $_SESSION['message'] = [
            'name' => $name,
            'message' => $message
        ];
    }

    /**
     * Формируем Html для вывода сообщения
     * @return string
     */
    public static function display_flash_message() {
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message']['message'];
            unset($_SESSION['message']);
            return $message;
        }
    }

    /**
     * Формируем Html для вывода сообщения
     */
    public static function display_html_flash_message() {
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-'.$_SESSION['message']['name'].' text-dark" role="alert">' . $_SESSION['message']['message'] . '</div>';
            unset($_SESSION['message']);
        }
    }
}