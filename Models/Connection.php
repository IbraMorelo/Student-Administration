<?php
	namespace Models;

	class Connection
	{
		private $data = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "1995@admin",
			"db" => "adminstudents"
		);
		
		private $connection;

		public function __construct()
		{
			$this->connection = mysqli_connect($this->data['host'], $this->data['user'], $this->data['pass'], $this->data['db']);
		}

		public function simpleQuery($sql)
		{
			$this->connection->query($sql);
			//echo("Error description: " . mysqli_error($this->connection));
		}

		public function returnQuery($sql)
		{
			$data = mysqli_query($this->connection, $sql);
			return $data;
		}
	}
?>