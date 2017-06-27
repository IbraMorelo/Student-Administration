<?php
    namespace Controllers;

    use Models\Section as Section;

    class SectionController
    {
        private $sections;

        public function __construct()
        {
            $this->sections = new Section();
        }
        public function index()
        {
            $data = $this->sections->list();
            return $data;
        }

        public function create()
        {       
            if($_POST)
            {
                $this->sections->set("name", $_POST['name']);
                $this->sections->create();
                header("Location: " . URL . "section");
            }
        }

        public function edit($id)
        {
            if($_POST)
            {
                $this->sections->set('id', $id);
                $this->sections->set("name", $_POST['name']);
                $this->sections->update();
                header("Location: " . URL . "section");
            }else{
                $this->sections->set('id', $id);
                $data = $this->sections->show();
                return $data;
            }
        }

        public function show($id)
        {
            $this->sections->set('id', $id);
            $data = $this->sections->show();
            return $data;
        }

        public function delete($id)
        {
            $this->sections->set('id', $id);
            $this->sections->delete();
            header("Location: " . URL . "section");
        }
    }
?>