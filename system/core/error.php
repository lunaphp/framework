<?php
namespace System\Core
{
    class Error
    {

        /**
         * Error handler. Convert all errors to Exceptions by throwing an ErrorException.
         *
         * @param int $level Error level
         * @param string $message Error message
         * @param string $file Filename the error was raised in
         * @param int $line Line number in the file
         *
         * @return void
         */
        public static function errorHandler($level, $message, $file, $line)
        {
            if (error_reporting() !== 0) {  // to keep the @ operator working
                throw new \ErrorException($message, 0, $level, $file, $line);
            }
        }

        /**
         * Exception handler.
         *
         * @param Exception $exception The exception
         *
         * @return void
         */
        public static function exceptionHandler($exception)
        {
            $code = $exception->getCode();
            if ($code != 404) {
                $code = 500;
            }
            http_response_code($code);

            if (getenv('ERROR_SHOW') && getenv('ERROR_SHOW') != 'false') {
                echo "<h1>Fatal Error</h1>";
                echo "<p><b>Uncaught exception:</b><br> '" . get_class($exception) . "'</p>";
                echo "<p><b>Message:</b><br> '" . $exception->getMessage() . "'</p>";
                echo "<p><b>Error Code:</b><br> '" . $code . "'</p>";
                echo "<p><b>Stack trace:</b><pre>" . $exception->getTraceAsString() . "</pre></p>";
                echo "<p>Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
            } else {
                if (getenv('ERROR_LOGS') && getenv('ERROR_LOGS') != 'false') {
                    $pathLog = dirname(__DIR__) . '/../logs/';

                    if (!is_dir($pathLog)) {
                        mkdir($pathLog, 0666, true);
                    }

                    $log = $pathLog . date('Y-m-d') . '.txt';
                    ini_set('error_log', $log);

                    $message = "Uncaught exception: '" . get_class($exception) . "'";
                    $message .= " with message '" . $exception->getMessage() . "'";
                    $message .= "\nStack trace: " . $exception->getTraceAsString();
                    $message .= "\nThrown in '" . $exception->getFile() . "' on line " . $exception->getLine();

                    error_log($message);
                }
                View::render("error",true);
            }
        }
    }
}