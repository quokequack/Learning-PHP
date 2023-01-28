<?php

require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($lutador1, $lutador2){
        if($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)){
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function Lutar(){
        if($this->aprovada == true){
            echo "<br/>";
            $this->desafiado->apresentar();
            echo "<br/>";
            echo "<br/>";
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<br>EMPATOU!!!!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1:
                    echo "<br>VITÓRIA DE ".$this->desafiado->getNome()."!!!!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2:
                    echo "<br>VITÓRIA DE ".$this->desafiante->getNome()."!!!!";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                break;
            }
        }else{
            echo "A luta não pode acontecer.";
        }
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
}







?>