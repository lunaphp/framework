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
            //Route "CLIENTE/DELETE" created automatically by LunaCLI
            Router::add(getenv('APP_URL_PATH').'/cliente/delete',function() {
                Page::render('Cliente')->Delete();
            }, 'get');

            //Route "CLIENTE/EDIT" created automatically by LunaCLI
            Router::add(getenv('APP_URL_PATH').'/cliente/edit',function() {
                Page::render('Cliente')->Edit();
            }, 'get');

            //Route "CLIENTE/ADD" created automatically by LunaCLI
            Router::add(getenv('APP_URL_PATH').'/cliente/add',function() {
                Page::render('Cliente')->Create();
            }, 'get');

            //Route "CLIENTE" created automatically by LunaCLI
            Router::add(getenv('APP_URL_PATH').'/cliente',function() {
                Page::render('Cliente')->Index();
            }, 'get');

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
