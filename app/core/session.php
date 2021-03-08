<?php

namespace HMVC\core;

class session{
    //This function use to open the session
    public static function start()
    {
        @session_start();
    }

    public static function Get($key)
    {
        if(isset($_SESSION[$key]))
            return $_SESSION[$key];
    }
    public static function Set($key,$value)
    {
        $_SESSION[$key] = $value;
    }
    public static function Stop()
    {
        @session_destroy();
    }
}