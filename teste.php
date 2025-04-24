<?php

$host = '127.0.0.1';
$db   = 'pizzaria';
$user = 'root';
$pass = ''; // Sem senha, conforme seu .env
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "✅ Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "❌ Erro ao conectar: " . $e->getMessage();
}