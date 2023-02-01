<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ENCAPSULAMENTO</title>
</head>
<body>
    <pre>
        <?php

         require_once 'ControleRemoto.php';

         echo "<br/><br/>";

         $controle = new ControleRemoto();

         $controle->ligar();
         $controle->maisVolume();
         $controle->play();
         $controle->abrirMenu();
         
         echo "<br/><br/>";

         print_r($controle);

        
        
        
        ?>
    </pre>
</body>
</html>