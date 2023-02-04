<?php

define("SECRET_IV",pack("al6",'senha', false));
define("SECRET",pack("al6",'senha', false));

$data = [
    "nome"=>"Quokequack"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

?>