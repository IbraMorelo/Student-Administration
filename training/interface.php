<?php
	interface Auto
	{
		public function turnOn();
		public function turnOff();
	}

	interface Oil extends Auto
	{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}

	/**
	* Change words from spanish to english
	*/
	class Deportivo implements Oil
	{
		//Attributes
		private $state = false;
		private $tanque = 0;

		//Methods
		public function state()
		{
			if($this->state)
			{
				print "Car is turned On and it has Oil(Lt): " . $this->tanque . "<br>";
			}
			else
			{
				print "Car is turned Off<br>";
			}
		}

		public function turnOn()
		{
			if($this->state)
			{
				print "You can't turn on the car twice<br>";
			}
			else
			{
				if($this->tanque <= 0)
				{
					print "Yo can't turn on the car because there no oil<br>";
				}
				else{
					print "Car turned on<br>";
					$this->state = true;
				}
			}
		}

		public function turnOff()
		{
			if($this->state)
			{
				print "Car turned off";
				$this->state = false;
			}
			else
			{
				print "You can't turn off the car twice<br>";
			}
				
		}

		public function vaciarTanque()
		{
			$this->tanque = 0;
		}

		public function llenarTanque($cant)
		{
			$this->tanque = $cant;
		}

		public function use($km)
		{
			if($this->state)
			{
				$reducir = $km / 3;
				$this->tanque -= $reducir;
				if($this->tanque <= 0)
				{
					$this->state = false;
				}
			}else{
				print "Car is turned off and it can't use <br>";
			}
		}
	}

	$obj = new Deportivo();
	$obj->llenarTanque(100);
	$obj->turnOn();
	$obj->use(350);
	$obj->state();
?>