<?php

//recebe dois parâmetros: 1 - caminho do arquivo; 2 - o que quer fazer com ele;
//cria um arquivo
$file = fopen('log.txt', "a+");

//a+ : mantém o mesmo arquivo e adiciona mais informação;
//w+ : cria um novo arquivo e adiciona mais inormação;

fwrite($file, "\nSPIELBERG");
// fecha o arquivo
fclose($file);

echo "Arquivo modificado.";

?>