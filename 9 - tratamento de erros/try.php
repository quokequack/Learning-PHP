<?php

$nome = 'Wes Anderson';
$filme = "Moonrise Kingdom";

try{
    $nomeEFilme = $nome + $filme;
}
catch(TypeError $e){
    echo json_encode(array(
        "message"=>$e->getMessage(),
        'line'=>$e->getLine(),
        'file'=>$e->getFile(),
        'code'=>$e->getCode()
    ));
}



?>