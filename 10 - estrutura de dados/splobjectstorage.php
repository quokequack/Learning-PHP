<?php

class Pessoa{
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

$p1 = new Pessoa("Maria");
$p2 = new Pessoa("Antônio");
$p3 = new Pessoa("Pâmela");
$p4 = new Pessoa("Angélica");
$p5 = new Pessoa("Cecília");

$storage = new \SplObjectStorage();
$storage->attach($p1); //adiciona na lista
$storage->attach($p2);
$storage->attach($p3);
$storage->attach($p4);
$storage->attach($p5);
$storage->detach($p2); //remove
var_dump($storage->contains($p1)); //verifica se um objeto esta na lista

foreach($storage as $object){
    echo $object->nome."<br/>";
}




?>