<?php
namespace System
{
    class AutoLoader
    {
        public function __construct(){}

        public static function init()
        {
            spl_autoload_register(function ($class) {
                $root = dirname(__DIR__);
                $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
                if (is_readable($file)) {
                    require $file;
                }
            });
        }
    }
    AutoLoader::init();
}