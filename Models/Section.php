<?php
	namespace Models;

	class Section
	{
		private $id;
		private $name;
		private $connection;

		public function __construct(){
			$this->connection = new Connection();
		}

		public function set($attribute, $content)
		{
			$this->$attribute = $content;
		}

		public function get($attribute)
		{
			return $this->attribute;
		}

		public function list()
		{
			$sql = "SELECT * FROM sections ORDER BY name ASC";
			$data = $this->connection->returnQuery($sql);
			return $data;
		}

		public function create()
		{
			$sql = "INSERT INTO sections(id, name) VALUES (null, '{$this->name}')";
			$this->connection->simpleQuery($sql);
		}

		public function delete()
		{
			$sql = "DELETE FROM sections WHERE id = '{$this->id}'";
			$this->connection->simpleQuery($sql);
		}

		public function update()
		{
			$sql = "UPDATE sections SET name = '{$this->name}' WHERE id = '{$this->id}'";
			$this->connection->simpleQuery($sql);
		}

		public function show()
		{
			$sql = "SELECT * FROM sections WHERE id = '{$this->id}'";
			$data = $this->connection->returnQuery($sql);
			$row = \mysqli_fetch_assoc($data);
			return $row;
		}
	}
?>