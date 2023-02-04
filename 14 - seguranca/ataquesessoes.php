<?php

session_start();


//depois de verificar login e senha reinicie o id da sessao
echo session_destroy();

echo session_start();

echo session_regenerate_id();

echo session_id();


?>