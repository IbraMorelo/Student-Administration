<?php
	trait Person2
	{
		public $name;

		public function getName()
		{
			echo $this->name;
		}

		abstract public function setName($name);	
	}

	trait Worked
	{
		protected function message()
		{
			echo "I'm a worked and My name is: ";
		}

		public function welcome()
		{
			echo "Hola Worked";
		}
	}

	class Person
	{
		use Person2, Worked;

		public function setName($name)
		{
			$this->name = $name . "<br> " . Person::message();
		}

		public function welcome()
		{
			echo "Hola Class";
		}
	}

	$person = new Person;
	$person->setName("Ibra");
	$person->getName();
	$person->welcome();
?>