<?php

if (! function_exists('request')) {
    function request($key) {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
    }
}

if (! function_exists('redirect')) {
    function redirect($url) {
        header('Location: ' . BASEURL . $url);
        exit();
    }
}

if (! function_exists('get_value')) {
    function get_value($value) {
        if (! isset($_SESSION[$value])) return null;

        return $_SESSION[$value];
    }
}