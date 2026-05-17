<?php

namespace Framework;

class Session
{

    //Start session
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    //set a sesion key/value parse_ini_file
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    // Get a value by the key
    public static function get($key, $default = null)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }
    //check if session key exist
    public static function has($key)
    {
        return isset($_SESSION[$key]);
    }
    public static function clear($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public static function clearAll()
    {
        session_unset();
        session_destroy();
    }
    //set a flash message
    public static function setFlashMessage($key, $message)
    {
        self::set('flash_' . $key, $message);
    }

    //get a flash message and unset
    public static function getFlashMessage($key, $default = null)
    {
        $message = self::get('flash_' . $key, $default);

        self::clear('flash_' . $key);

        return $message;
    }
}
