<?php

require "conexao.php";

$nome = "Tiger";
$email= "usuario2@email.com";
$senha= "que1234";

$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

$sql = "insert into usuarios (id, nome, email, senha) values (DEFAULT ,:nome, :email, :senha);";
$stmt = $conn-> prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha_crip);

$stmt-> execute();

echo "deu certo";