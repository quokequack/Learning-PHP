<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguranca com PHP - injection</title>
</head>
<?php  
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cmd = escapeshellcmd($_POST['cmd']);
        echo "<prev>";
        $comando = system($cmd, $retorno);
        echo "</prev>";
    }

?>
<body>
   <form method='POST'>
        <input type='text' name='cmd'>
        <button type='submit'>ENVIAR</button>
    </form>
</body>
</html>