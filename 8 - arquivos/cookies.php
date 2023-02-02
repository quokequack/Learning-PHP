<?php

$data = array(
    "empresa"=>'Maestro Academy',
    "gerente"=>"Lúcia Hernandez Diaz",
    "localização"=>"São Paulo, SP"
);

setcookie("NOME_DO_COOKIE", json_encode($data),time()+3600);

echo "OK";




?>