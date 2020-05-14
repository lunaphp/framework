<?php
    /**
     * PHP Minimal Version
     */
    $phpVersion = '7.2.9';
    if (phpversion() < $phpVersion)
    {
        die("<b>Oops!</b><br>Your PHP version must be equal to <b>{$phpVersion}</b> or higher for <b>Luna Framework</b> to work properly.<br>Current version: <b>" . phpversion() . '</b>');
    }
    unset($phpVersion);

    /**
     * Composer AutoLoader
     */
    require dirname(__DIR__) . '/app/vendor/autoload.php';

    /**
     * Native AutoLoader (Do not use twig templates with native autoloader.)
     */
    //require '../system/autoloader.php';

    /**
     * Error and Exception handling
     */
    error_reporting(E_ALL);
    set_error_handler('System\Core\Error::errorHandler');
    set_exception_handler('System\Core\Error::exceptionHandler');

    /**
     * .ENV Loader
     */
    $dotenv = new Dotenv\Dotenv( __DIR__.'/../');
    $dotenv->load();
    //print_r( $_ENV );
    /**
     * Routing
     */
    use App\Config\Route;
    class Start
    {
        public function __construct(){}

        public static function init()
        {
            Route::add();
        }
    }
    Start::init();
