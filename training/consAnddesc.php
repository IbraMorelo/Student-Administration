<?php
	class Lottery
	{

		//Attributes
		public $number;
		public $attempts;
		public $result = false;

		//Methods
		public function __construct($number, $attempts)
		{
			$this->number = $number;
			$this->attempts = $attempts;
		}

		public function lucky()
		{
			$min = $this->number / 2;
			$max = $this->number * 2;
			for($i = 0; $i < $this->attempts; $i++)
			{
				$try = rand($min, $max);
				self::attempts($try);
			}
		}

		public function attempts($try)
		{
			if($try == $this->number)
			{
				echo "<b>" . $try . " == " . $this->number . "</b><br>";
				$this->result = true;
			}else{
				echo "<b>" . $try . " != " . $this->number . "</b><br>";
			}
		}

		public function __destruct()
		{
			if($this->result)
			{
				echo "Congratulation, You've hit in: " . $this->attempts . " attempts";
			}else{
				echo "Opss, You've not hit in: " . $this->attempts . " attempts";
			}
		}
	}

	$lottery = new Lottery(10, 10);
	$lottery->lucky();
?>