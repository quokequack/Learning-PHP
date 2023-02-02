<?php

//lê os arquivos da página
$images = scandir("images");

foreach($images as $img){
    if(!in_array($img, array(".",".."))){
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        print_r($info);
    }
}





?>