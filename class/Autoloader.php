<?php

/**
 * Created by PhpStorm.
 * User: dvine
 * Date: 26/04/2018
 * Time: 09:10
 */
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoloader($class_name)
    {
        require 'class/' . $class_name . '.php';
    }
}