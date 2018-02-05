<?php

require "conexao.php";

$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

if (!empty($email) && !empty($senha)) {

    $sql = "select*from usuarios where email = :email";
    $query = $conn->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();

    $row = $query->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($senha, $row['senha'])) {

        unset($row['senha']);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['usuario'] = $row;

        header("location:index.php");
    } else {
        echo "Não logado!";
    }
}
 else {
    echo "Por favor, informe os dados corretamente";
}