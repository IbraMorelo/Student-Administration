<?php
	class Page
	{
		//Attribute
		public $name = "Ibra";
		public static $url = "ibra.com";

		//Methods
		public function welcome()
		{
			echo "Welcome to <b>" .  $this->name . "</b> the website is <b>" .  Page::$url . "</b><br>";
		}

		public static function welcome2()
		{
			echo "Welcome to " .  self::$url . "<br>";
		}
	}

	class Web extends Page
	{

	}

	$page = new Page();
	$page->welcome();
	$page->welcome2();
	Web::welcome2();
?>