<?php
namespace App\Config
{
    use System\Core\Router;
    use System\Core\Page;
    use App\Controllers;
    use App\Config;

    class Route
    {
        public function __construct(){}

        public static function add()
        {
            Router::add(getenv('APP_URL_PATH'),function() {
                Page::render('Welcome')->Index();
            },'get');

            Router::pathNotFound(function($path){
                  Page::render('404.html','Template');
            });

            Router::methodNotAllowed(function($path, $method){
                Page::render('405.html','Template');
            });

            Router::run("/");
        }
    }
}
