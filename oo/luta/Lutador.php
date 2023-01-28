<?php


require_once 'Lutando.php';
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

        echo "Lutador cadastrado.<br>";

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){
        $peso = $this->getPeso();
        if($peso < 52.2){
            $this->categoria = 'Inválida';
        }else if($peso  <= 70.3){
            $this->categoria = 'Leve';
        }else if($peso <= 83.9){
            $this->categoria = 'Médio';
        }else if($peso <= 120.02){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Inválida';
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
    public function apresentar(){
        echo "LUTADOR: ".$this->getNome().
        "<br>NACIONALIDADE: ".$this->getNacionalidade().
        "<br/>IDADE: ".$this->getIdade().
        "<br/>ALTURA: ".$this->getAltura().
        "<br/>PESO: ".$this->getPeso().
        "<br/>CATEGORIA: ".$this->getCategoria().
        "<br/>VITORIAS :".$this->getVitorias().
        "<br/>DERROTAS: ".$this->getDerrotas().
        "<br/>EMPATES: ".$this->getEmpates();
    }
    public function status(){
        echo 
        "<br/>VITORIAS :".$this->getVitorias().
        "<br/>DERROTAS: ".$this->getDerrotas().
        "<br/>EMPATES: ".$this->getEmpates();
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }







}

?>