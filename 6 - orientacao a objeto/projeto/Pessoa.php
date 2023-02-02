<?php

class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;


    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->experiencia = 0;
    }
    protected function ganharExperiencia(){
        $this->experiencia + 10;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }
}





?>