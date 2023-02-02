<?php

function trataNome($name){
    if(!$name){
        throw new Exception("Nenhum nome foi informado.");
    }
    echo ucfirst($name)."<br/>";
}
try{
    trataNome("GABI");
    trataNome("");
}
catch(Exception $error){
    echo $error->getMessage();
}
finally{
    echo "dhjdfdfdjfdjfdjdjfhd";
}






?>