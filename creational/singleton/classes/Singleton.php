<?php

class Singleton
{

    private static $instance = null;

    public static function getInstance ()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    private function __construct ()
    {

    }

    private function __clone ()
    {

    }

    public function __wakeup ()
    {
        
    }
}