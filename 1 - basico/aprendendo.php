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
    $nome = 'Ana';
    $idade = 23;
    $salario = 500.00;
    $casada = 'false';

    //concatenação
    echo "$nome tem $idade anos"; 

    //aritmetica
    $n1 = 12;
    $n2 = 45;

    echo "<br/>A soma de $n2 + $n1 é igual a ".($n1+$n2);
    echo "<br/>A divisão de $n1 por $n2 é igual a ".($n1/$n2);
    echo "<br/>A multiplicação de $n1 por $n2 é igual a ".($n1 * $n2);
    echo "<br/>A subtração de $n1 por $n2 é igual a ".($n1-$n2);
    echo "<br/>O resto da divisão entre $n1 por $n2 é igual a ".($n1%$n2);

    //valores personalizados
    //$pers1 = $_GET["a"];
    //$pers2 = $_GET['b'];
    //echo "<br/>valores recebidos: $pers1 e $pers2";

    //funções matemáticas
    /*

    abs() -> pega o valor absoluto de um numero;
    pow() -> cria uma potenciação;
    sqrt() -> dá a raiz quadrada de um número;
    round() -> arredonda;
    ceil () -> arredonda pra cima;
    floor() -> arredonda pra baixo;
    intval() -> pega o valor inteiro de um número real;
    number_format() -> formata um número;

    MODELO DO number_format():
        number_format($n1, 2 (casas decimais), "," (separador), "." (separador de casa de milhar))
    */

    //atribuições
    $a = 2;
    $b = 3;
    $c = $a + $b;
    //$c += $a;

    //incremento = variavel++
    echo "</br>a soma de a + b + c é: $c.";

    //exercício: aplicar 10% de desconto no preço de um produto;
    //$precoProduto = 12.99;
    //$desconto = ($precoProduto * 10)/100;
    //$precoFinal = $precoProduto - $desconto;

    //aumento
    $preco = $_GET['p'];
    $preco += ($preco * 10) / 100;
    
    echo "</br>Após o aumento de 10%, o valor do produto é: R$".number_format($preco);
    //diminuição;
    $precoDesconto = $_GET['p'];
    $precoDesconto -= ($precoDesconto * 10) / 100;

    echo "<br/>Após o desconto de 10%, o valor do produto é: R$ ".number_format($precoDesconto, 2);

    $anoAtual = 2023;
    $anoAnterior = --$anoAtual;

    echo "<br/>O ano anterior ao atual foi $anoAnterior";

    //variáveis referenciadas
    $number1 = 4;
    $number2 = $number1;
    $number2 += 2;
    echo "<br/> $number2 e $number1";
    // o "&" liga variáveis, seus valores mudam juntos

    $numberA = 4;
    $numberB = &$numberA;
    $numberB += 2;
    echo "<br/> $numberA e $numberB";

    //variáveis de variáveis
    //variáveis criadas a partir do conteúdo de outras variáveis;
    $diretor = 'Wes Anderson';
    $$diretor = 'Rushmore';

    echo "<br/> $diretor e ".$$diretor;

    //operadores relacionais
    /*
    > -- maior que;
    < -- menor que;
    >= -- maior ou igual a;
    <= -- menor ou igual a;
    <> -- diferente;
    != -- diferente;
    == -- igual;
    === identico (compara tanto o valor da variavel, quanto o tipo dela);
    
    expressao ? verdadeiro:falso -- unario (comparações simples);
    */

$valor1 = 3;
$valor2 = 1;

$maior = $valor1 > $valor2 ? $valor1 : $valor2;

echo "<br/> $maior";

//operadores lógicos
/*
&& - E (AND);
|| - OU (OR);
XOR - OU EXCLUSIVO (PODE SATISFAZER UMA CONDIÇÃO OU OUTRA, MAS NUNCA AS DUAS);
! - NÃO;
*/

//ligação entre html e php


    ?>
</body>
</html>