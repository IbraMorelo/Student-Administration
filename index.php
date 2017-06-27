<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/projects/adminstudents/");

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Views/template.php";
	Config\Routes::run(new Config\Request());
	/*$stu = new Models\Student();
	$stu->set("id", 1);
	$data = $stu->show();
	print $data['name'];*/
?>