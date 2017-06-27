<?php 
	namespace Config;

	class Autoload
	{
		public static function run()
		{
			spl_autoload_register(function($class){
				$route = str_replace("\\", "/", $class) .  ".php";
				//print $route;
				if(is_readable($route))
				{
					include_once $route;
				}
			});
		}
	}
?>