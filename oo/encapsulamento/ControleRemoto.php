<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
        echo "Controle criado";
    }
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    //metodos da interface

    public function ligar(){
        if($this->getLigado() == false){
            $this->setLigado(true);
            echo "<br/>O controle ligou a TV.<br/>";
        }else{
            echo "A TV já está ligada!<br/>";
        }
    }
    public function desligar(){
        if($this->getLigado() == true){
            $this->setLigado(false);
            echo "<br/>O controle desligou a TV.<br/>";
        }else{
            echo "<br/>A TV já está desligada!<br/>";
        }
    }
    public function abrirMenu(){
        if($this->getLigado() == true && $this->getTocando() == true){
            echo "<br/>O controle está ligado e tocando.<br/>";
            echo "<br/>Volume: ".$this->getVolume();
            for($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br/>";
        }else{
            echo "<br/>Não foi possível abrir o menu.<br>";
        }
    }
    public function fecharMenu(){
        echo "<br/>Fechando menu.....<br/>";
    }
    public function maisVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume()+5);
        }else{
            echo "<br/> A TV está desligada.<br/>";
        }
    }
    public function menosVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume()-5);
        }else{
            echo "<br/> A TV está desligada.<br/>";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume(0);
        }else{
            echo "<br/>Não foi possível mutar a TV.<br/>";
        }
    }
    public function desligarMudo(){
        if($this->getLigado() == true && $this->getVolume() == 0){
            $this->setVolume(50);
        }else{
            echo "<br/>A TV está desligada!.<br/>";
        }
    }
    public function play(){
        if($this->getLigado() == true && $this->getTocando() == false){
            $this->setTocando(true);
            echo "<br/> Tocando....";
        }else{
            echo "<br/> Não foi possível ligar.<br/>";
        }
    }
    public function pause(){
        if($this->getLigado() == true && $this->getTocando() == true){
            $this->setTocando(false);
            echo "<br/> Não está mais tocando.<br/>";
        }else{
            echo "<br/> Não foi possível desligar.<br/>";
        }
    }
}






?>