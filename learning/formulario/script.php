<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    $txt = isset($_GET['text'])?$_GET['text']:"Texto Genérico";
    $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
    $cor = isset($_GET['cor'])?$_GET['cor']:"#000000";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando dados do formulário</title>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <a href='form.html'>Voltar</a>
    </div>
</body>
</html>