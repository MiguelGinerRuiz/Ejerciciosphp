<?php
    require_once "Model/task.php";
    
    class taskController{

        private $taskModel;

        public function __construct(){
            $this->taskModel = new Task();
        }

        public function index(){
            $task = $this->taskModel->getAll();
            require "View/listar.php";
        }

        public function create(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $title = $_POST["title"];
                $description = $_POST["description"];
                $created_at = $_POST["created_at"];
                $this->taskModel->save($title, $description, $created_at);
                header("Location: index.php");
            } else{
                require "View/create.php";
            }
        }

        public function edit($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $title = $_POST["title"];
                $description = $_POST["description"];
                $this->taskModel->update($id, $title, $description);
                header("Location: index.php");
            } else {
                $task = $this->taskModel->getById($id);
              
                require "View/edit.php";
            }
        }

        public function delete($id){
            $this->taskModel->delete($id);
            header("Location: index.php");
        }
    }
?>