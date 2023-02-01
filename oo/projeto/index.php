<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto final em Php usando Poo</title>
</head>
<body>
    <pre>
        <?php
        
        require_once 'Video.php';
        require_once 'Gafanhoto.php';


        $videos[0] = new Video('Aula 1');
        $videos[1] = new Video('Aula 2');
        $videos[2] = new Video('Aula 3');

        $pessoa1 = new Gafanhoto('Maria', 12, "F", 2332332);

        print_r($videos);
        print_r($pessoa1);
        
        
        ?>
    </pre>
</body>
</html>