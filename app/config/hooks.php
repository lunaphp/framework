<?php
namespace App\Config
{
    class Hooks
    {
        public function __construct(){}

        private static $actions = array(
            'ev_after_user_create' => array(),
            'ev_after_user_profile_update' => array()
        );

        public static function apply($hook, $args = array()) {
            if (!empty(self::$actions[$hook])) {
                foreach (self::$actions[$hook] as $f) {
                    $f($args);
                }
            }
        }

        public static function add_action($hook, $function) {
            self::$actions[$hook][] = $function;
        }
    }
}