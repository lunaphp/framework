<?php
namespace System\Core
{
    class View
    {
        public function __construct(){}

        public static function render($view = '', $template = false, $args = []) {
            if(!$template){
                extract($args, EXTR_SKIP);
                $file = '../app/views/' . $view;
                if (file_exists($file.'.html')) {
                    $file = $file.'.html';
                }else if(file_exists($file.'.php')){
                    $file = $file.'.php';
                }
                if (is_readable($file)) {
                    require $file;
                } else {
                    throw new \Exception("$file not found");
                }
            }else{
                static $twig = null;
                if ($twig === null) {
                    $loader = new \Twig\Loader\FilesystemLoader('../app/views/');
                    $twig = new \Twig\Environment($loader);
                }
                $file = '/'.$view.'.html';
                $args["base_path"] = getenv('APP_PROTOCOL') . $_SERVER['HTTP_HOST'] . getenv('APP_URL_PATH')."/";
                echo $twig->render($file, $args);
            }
        }
    }
}