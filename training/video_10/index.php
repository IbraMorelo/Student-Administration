<?php

	//$_GET['action'];

	function autoload($class)
	{
		include $_GET['action'] . "/" . $class . ".php";
		//include "classes/" . $class . ".php";
	}

	spl_autoload_register('autoload');

	Auto::show("Hola Mundo");
	Person::show("Hola Mundo");
?>