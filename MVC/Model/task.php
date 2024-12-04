<?php

require_once "Config/conexion.php";

class Task{

    private $pdo;
    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){

        try{
            $query = "SELECT * FROM task";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getById($id){
        try{
            $query = "SELECT * FROM task WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function delete($i){
        try{
            $insercion = $this->pdo->prepare("DELETE FROM task WHERE id=:id");
            $insercion->bindParam(":id", $i);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->$getMessage());
        }
    }
    public function edit($i, $t, $d){
        try{
            $insercion = $this->pdo_<prepare("UPDATE task SET title=:title, description=:description WHERE id=:id");
            $insercion->bindParam(":id", $i);
            $insercion->bindParam(":title", $t);
            $insercion->bindParam(":description", $d);
            $insercion->execute();
            return true;
        }catch(PDOException $e){
            die ($e->getMessage());
        }
    }
    public function save($t, $d, $c){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO task(title, description, created_at) VALUES(:title, :description, :created_at)");
            $insercion->bindParam(":title", $t);
            $insercion->bindParam(":description", $d);
            $insercion->bindParam(":created_at", $c);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function update($id, $title, $description){
        $query = "UPDATE task SET title = :title, description = :description WHERE id = :id";
        $insercion = $this->pdo->prepare($query);
        $insercion->bindParam(":id", $id);
        $insercion->bindParam(":title", $title);
        $insercion->bindParam(":description", $description);
        return $insercion->execute();
    }
}
?>