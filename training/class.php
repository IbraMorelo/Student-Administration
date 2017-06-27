<?php
	class Person
	{
		//Attributes
		public $first_name = array();
		public $last_name = array();

		//Methods
		public function create($first_name, $last_name)
		{
			$this->first_name[] = $first_name;
			$this->last_name[] = $last_name;
		}

		public function show()
		{
			for($i = 0; $i < count($this->first_name); $i++)
			{
				Person::format($this->first_name[$i], $this->last_name[$i]);
			}
		}

		public function format($first_name, $last_name)
		{	
			echo "Nombre: " . $first_name . " Apellido: " . $last_name . "<br>";
		}
	}

	$person = new Person();
	$person->create("Ibra", "Morelo");
	$person->create("Angie", "Arzuza");
	$person->show();
?>