<?php
	class Vehicle
	{
		//Attribute
		public $motor = false;
		public $marca;
		public $color;

		//Methods
		protected function state()
		{
			if($this->motor)
			{
				echo "Motor is turn on<br>";
			}else{
				echo "Motor is turn off<br>";
			}
		}

		public function turnOn()
		{
			if($this->motor)
			{
				echo "Be Carful, motor already is turn on<br>";
			}else{
				echo "Motor is turn on now<br>";
				$this->motor = true;
			}
		}
	}

	class Motocycle extends Vehicle
	{
		public function stateMotocycle()
		{
			$this->state();
		}
	}

	class Moto extends Motocycle
	{

	}

	$vehicle = new Moto();
	$vehicle->stateMotocycle();
	$vehicle->turnOn();
	$vehicle->stateMotocycle();
?>