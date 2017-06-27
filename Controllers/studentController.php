<?php
    namespace Controllers;

    use Models\Student as Student;
    use Models\Section as Section;

    class StudentController
    {
        private $students;
        private $sections;

        public function __construct()
        {
            $this->students = new Student();
            $this->sections = new Section();
        }

        public function index()
        {
            $data = $this->students->list();
            return $data;
        }

        public function create()
        {
            if($_POST)
            {
                $allow = array("image/jpeg", "image/png", "image/gif", "image/jpg");
                $limit = 700;
                if(in_array($_FILES['image']['type'], $allow ) && $_FILES['image']['size'] <= $limit * 1024)
                {
                    $name = date('i-s') . $_FILES['image']['name'];
                    $route = "Views" . DS . "template" . DS ."img" . DS . "avatars" . DS . $name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $route);
                    $this->students->set("name", $_POST['name']);
                    $this->students->set("age", $_POST['age']);
                    $this->students->set("average", $_POST['average']);
                    $this->students->set("image", $name);
                    $this->students->set("section_id", $_POST['section_id']);
                    $this->students->create();
                    header("Location: " . URL . "student");
                }
            }else{
                $data = $this->sections->list();
                return $data;
            }
        }

        public function edit($id)
        {
            if($_POST)
            {
                $this->students->set('id', $id);
                $this->students->set("name", $_POST['name']);
                $this->students->set("age", $_POST['age']);
                $this->students->set("average", $_POST['average']);
                $this->students->set("section_id", $_POST['section_id']);
                $this->students->update();
                header("Location: " . URL . "student");
            }else{
                $this->students->set('id', $id);
                $data = $this->students->show();
                return $data;
            }
        }

        public function show($id)
        {
            $this->students->set('id', $id);
            $data = $this->students->show();
            return $data;
        }

        public function delete($id)
        {
            $this->students->set('id', $id);
            $this->students->delete();
            header("Location: " . URL . "student");
        }
    }
    $objSections = new Section();
    $sections = $objSections->list();
?>