<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRENDENDO PHP</title>
</head>
<body>
    <?php
        $ano = isset($_GET["anoNasci"])?$_GET['anoNasci']:'Nenhum valor recebido.';
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos.";


        if($idade >= 18 && $idade < 65){
            $voto = 'obrigatório';
            $dirigir = 'já pode dirigir';
        }
        else{
            if($idade >=16 && $idade < 18){
                $voto = 'opcional';
                $dirigir = 'ainda não pode dirigir';
            }else{
                $voto = 'desnecessário';
                $dirigir = 'não pode dirigir';
            }
        };
        echo "<br/> Portanto, você $dirigir e seu voto é $voto.";


    ?>
</body>
</html>