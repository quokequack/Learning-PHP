<?php

class Db1 extends PDO {
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=test; host=localhost", 'root', 'password');
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($statment, $key, $value);
        }
    }
    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }

    public function search($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }
    public function select($rawQuery, $params = array()):array{
        $stmt = $this->search($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }


}



?>