<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO - PHP</title>
</head>
<body>
    <pre>
        <?php

        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->setModelo("BIC CRISTAL");
        $c1->setPonta(0.5);
        $c1->getModelo();
        $c1->getPonta();
         print_r($c1);

        ?>
    </pre>
</body>
</html>