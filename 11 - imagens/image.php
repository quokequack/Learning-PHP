<?php

header("Content-Type: imagem/png");

$imagem = imagecreate(256, 256);
$black = imagecolorallocate($imagem, 0, 0, 0);
$red = imagecolorallocate($imagem, 255, 0, 0);

imagestring($imagem, 4, 60, 120, "Teste php", $red);

imagepng($imagem);
imagedestroy($imagem);

?>