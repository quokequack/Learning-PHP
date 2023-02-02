<?php
require_once "Db1.php";

$db = new Db1();

$usuarios = $db->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers =  array();

foreach($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key));
}
$file = fopen("Usuarios.csv", "w+");
fwrite($file, implode(" | ", $headers)."\r\n" );

foreach ($usuarios as $row){
    $data = array();
    foreach($row as $key => $value){
        array_push($data, $value);
    }

    fwrite($file, implode(" | ", $data)."\r\n");
}

fclose($file);



?>