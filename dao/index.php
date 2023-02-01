<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO PHP DAO</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Usuarios.php';

        /*$root = new Usuarios();
        $root->loadById(8);

        echo $root;*/
        //$lista = Usuarios::getList();
        //print_r($lista);

        //$busca = Usuarios::searchUser("Pie");
        
        //print_r($busca);

        //$user = new Usuarios();
        //$user->login('Joana', '3874' );
        //print_r($user);

        //$user = new Usuarios('Lílian', '12333');
        //$aluno->setDeslogin("aluno");
        //$aluno->setDessenha('22334');
        //$user->insert();
        //echo $aluno;
        //$user = new Usuarios();
        //$user->loadById(14);
        //$user->update("Camille", "ffe34444");
        //$lista = Usuarios::getList();
        //print_r($lista);
        //print_r($user);
        $user = new Usuarios();
        $user->loadById(11);
        $user->delete();
        $lista = Usuarios::getList();
        print_r($lista);



        ?>
    </pre>
</body>
</html>