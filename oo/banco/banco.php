<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <pre>
        <?php
        
        require_once 'Conta.php';
         $conta1 = new Conta();
        $conta1->abrirConta(0001, 'Malu', 'CC');
        print_r($conta1);


        $conta2 = new Conta();
        $conta2->abrirConta(0002, 'Leonardo', 'CP');
        print_r($conta2);


        ?>
    </pre>
</body>
</html>