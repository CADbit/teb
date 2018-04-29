<?php

class Session {
    static function start() {
        session_start();
        echo 'Start sesji<br/>';
    }
    static function stop() {
        session_destroy();
        echo 'Stop sesji<br/>';
    }
    static function getSessionId() {
        return session_id();
    }
    static function setData($key, $data) {
        $_SESSION[$key] = $data;
    }
    static function getData($key) {
        return $_SESSION[$key];
    }
    static function data($key, $data = null) {
        if (!is_null($data)) {
             $_SESSION[$key] = $data;
        }
        return  $_SESSION[$key];
    }
}

?>

