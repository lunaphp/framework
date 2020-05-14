<?php
namespace System\Core
{
    class Model
    {
        public function __construct()
        {}

        protected static function DB()
        {
            return $db = new Database();
        }
    }
}


