<?php

class Db1 extends PDO {
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:dbname=test; host=localhost", 'root', 'password');
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($key, $value);
        }
    }
    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }



}



?>