<?php
	abstract class Molde
	{
		abstract public function setName($name);
		abstract public function getName();
	}

	class Person extends Molde
	{
		//Attributes
		private $message = "Hola Mundo<br>";
		private $name;

		//Methods
		public function show()
		{
			print $this->message;
		}

		public function setName($name, $username = " IM ")
		{
			$this->name = $name . $username;
		}

		public function getName()
		{
			print $this->name . "<br>";
		}
	}

	$obj = new Person();
	$obj->setName("Ibra", " Morelo");
	$obj->getName();
	$obj->show();
?>