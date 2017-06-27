<?php
	class Facebook
	{

		//Attributes
		public $fisrt_name;
		public $last_name;
		private $password;

		//Methods
		public function __construct($fisrt_name, $last_name, $password)
		{
			$this->fisrt_name = $fisrt_name;
			$this->last_name = $last_name;
			$this->password = $password;
		}

		public function viewInformation()
		{
			echo "Fisrt Name: " . $this->fisrt_name . "<br>";
			echo "Last Name: " . $this->last_name . "<br>";
			self::updatePassword("8912");
			echo "Password: " . $this->password . "<br>";
		}

		private function updatePassword($password)
		{
			$this->password = $password;
		}
	}
	$facebook = new Facebook("Ibra", 22, "1234");
	//echo $facebook->password;
	//$facebook->updatePassword("8912");
	$facebook->viewInformation();
?>