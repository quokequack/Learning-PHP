<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL COM PHP</title>
</head>

<body>
    <pre>
        <<?php

            $conn = new mysqli("localhost", "root", "password", "test");

            //$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
            //$login = 'user';
            //$pass = '123456';
            //$stmt->bind_param("ss", $login, $pass);
            //$stmt->execute();

            $resultquery = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

            while ($row = $resultquery->fetch_array(MYSQLI_ASSOC)) {
                print_r($row);
            }

            ?>
    </pre>
</body>

</html>