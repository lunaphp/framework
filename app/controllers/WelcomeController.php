<?php
namespace App\Controllers
{
    use System\Core\View;
    use System\Core\Controller;
    class WelcomeController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function Index()
        {
            View::render('welcome/index',true);
        }
    }
}