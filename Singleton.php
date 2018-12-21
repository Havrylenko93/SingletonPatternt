<?php

class Singleton
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {

        if (self::$instance === null) {
            self::$instance = new self();
            // some.....
        }

        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
