<?php  
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
     //$cmd = escapeshellcmd($_POST['cmd']);
        echo "<prev>";
        $comando = system("dir C:", $retorno);
        echo "</prev>";
    }

?>