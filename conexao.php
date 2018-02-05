<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=login_php", "root", "");
    $conn->exec("set names utf8");
}catch (PDOException $e) {
    echo "Erro ao conectar-se com mysql: " .$e->getMessage();
    exit;
}