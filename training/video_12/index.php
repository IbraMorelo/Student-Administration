<?php
	
	//require_once "api/Models/Person.php";
	//require_once "api/Controllers/PersonController.php";

	spl_autoload_register(function($class){

		$ruta = "api/" . str_replace("\\", "/", $class) . ".php";
		if(is_readable($ruta))
		{
			require_once $ruta;
		}
		else{
			echo "Archive doesn't exist";
		}
	});

	Models\Person::Hello();
	Controllers\PersonController::Hello();
?>