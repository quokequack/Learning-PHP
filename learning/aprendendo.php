<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php

    //variáveis
    $nome = 'ana';
    $idade = 23;
    $salario = 500.00;
    $casada = 'false';

    //concatenação
    echo "$nome tem $idade anos"; 

    //aritmetica
    $n1 = 12;
    $n2 = 45;

    echo "<br/>a soma de $n2 + $n1 é igual a ".($n1+$n2);
    echo "<br/>a divisão de $n1 por $n2 é igual a ".($n1/$n2);
    echo "<br/>a multiplicação de $n1 por $n2 é igual a ".($n1 * $n2);
    echo "<br/>a subtração de $n1 por $n2 é igual a ".($n1-$n2);
    echo "<br/>o resto da divisão entre $n1 por $n2 é igual a ".($n1%$n2);

    //valores personalizados
    $pers1 = $_GET["a"];
    $pers2 = $_GET['b'];
    echo "<br/>valores recebidos: $pers1 e $pers2";
    ?>
</body>
</html>