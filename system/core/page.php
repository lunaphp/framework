<?php
namespace System\Core
{
	class Page
	{
		public static function render($name,$type='Controller')
		{
			switch ($type) {
				case "Controller":
					$controle = '\App\Controllers\%sController';
					$class = sprintf($controle,$name);
					$createPage = new $class();
					$createPage->loadModel($name);
					return $createPage;
					break;
				case "Url":
					require $name;
					break;
				case "Template":
					static $twig = null;
					if ($twig === null) {
						$loader = new \Twig\Loader\FilesystemLoader('../app/views/templates/error/');
						$twig = new \Twig\Environment($loader);
					}
					echo $twig->render($name, array( 'erro' => []));
					break;
				default:
					echo "Oops! Could not render the requested page.";
			}
		}
	}
}