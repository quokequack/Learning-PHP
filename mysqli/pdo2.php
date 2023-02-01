<?php
//inserindo dados no banco com pdo

$conn = new PDO('mysql:dbname=test;host=localhost', "root", "password");

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOG1, :PASS1)");

//$login = "Ana";
//$password = "2874387483";

//$stmt->bindParam(":LOG1", $login);
//$stmt->bindParam(":PASS1", $password);

//$stmt->execute();


//==========================================

//alterando dados no banco com pdo

//$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :NOME WHERE idusuario = :ID");

///$login = 'Jorge Matheus';
//$id = 7;

//$stmt->bindParam(":NOME", $login);
//$stmt->bindParam(":ID",$id);

//$stmt->execute();

//==========================================

//deletando dados do banco com pdo

//$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

//$id = 7;

//$stmt->bindParam(':ID', $id);
//$stmt->execute();

//=========================================

//transações com pdo 
//commit : confirma a transação;
//rollback : cancela a transação;

$conn->beginTransaction();

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = ? WHERE idusuario = ?");

$login = 'Ana Newman';
$id = 8;

$stmt->execute(array($login, $id));
//$conn->rollback();
$conn->commit();



?>