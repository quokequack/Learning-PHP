<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutas</title>
</head>
<body>
    <pre>
        <?php
        
        require_once "Lutador.php";
        require_once "Luta.php";
        
        $lutador = array();
        
        $lutador[0] = new Lutador('Louis', 'França', 29, 187, 67.0, 3, 4, 2);
        $lutador[1] = new Lutador('José', 'Brasil', 20, 177, 57.0, 2, 5, 1);
        $lutador[2] = new Lutador('Anderson', 'Brasil', 24, 180, 84.0, 5, 0, 1);
        $lutador[3] = new Lutador('Maxon', 'EUA', 35, 195, 120.0, 6, 2, 0);
        $lutador[4] = new Lutador('Eliot', 'Inglaterra', 34, 190, 100.0, 4, 2, 0);
        $lutador[5] = new Lutador('Bruno', 'México', 38, 179, 79.0, 5, 0, 0);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[0], $lutador[1]);
        $UEC01->lutar();

        
        print_r($lutador);
        
        ?>
    </pre>
</body>
</html>