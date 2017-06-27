<?php 
	namespace Models;

	class Student
	{
		private $id;
		private $name;
		private $age;
		private $average;
		private $image;
		private $section_id;
		private $date;
		private $connection;

		public function __construct()
		{
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
			$sql = "SELECT t1.*, t2.name as name_section FROM students t1 INNER JOIN sections t2 ON t1.section_id = t2.id";
			$data = $this->connection->returnQuery($sql);
			return $data;
		}

		public function create()
		{
			$sql = "INSERT INTO students(id, name, age, average, image, section_id, date) VALUES (null, '{$this->name}', '{$this->age}', '{$this->average}', '{$this->image}', '{$this->section_id}', NOW())";
			$this->connection->simpleQuery($sql);
		}

		public function delete()
		{
			$sql = "DELETE FROM students WHERE id = '{$this->id}'";
			$this->connection->simpleQuery($sql);
		}

		public function update()
		{
			$sql = "UPDATE students SET name = '{$this->name}', age = '{$this->age}', average = '{$this->average}', section_id = '{$this->section_id}' WHERE id = '{$this->id}'";
			$this->connection->simpleQuery($sql);
		}
		
		public function show()
		{
			$sql = "SELECT t1.*, t2.name as name_section FROM students t1 INNER JOIN sections t2 ON t1.section_id = t2.id WHERE t1.id = '{$this->id}'";
			$data = $this->connection->returnQuery($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}
	}
?>