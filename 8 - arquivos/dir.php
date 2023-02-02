<?php
//criando um diretorio
$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretório criado.";
}else{
    rmdir($name);
    echo "Diretório já existe. Apagado.";
}







?>