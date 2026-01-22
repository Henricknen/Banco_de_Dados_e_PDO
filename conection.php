<?php

$host = 'localhost';

$username = 'root';
$password = '';
$dbname = '';
$dsn = "mysql:host=$host;dbname=$dbname";      // string de conexão com banco de dados

$connection = new PDO($dsn, $username, $password);

try {       // captura os erros de conexão
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);      // fazendo conexão
    echo 'Conexão bem sucedida.<hr><br/>';
} catch (PDOException $e) {
    echo 'Erro na conexão: '. $e-> getMessage();        // método 'getMessage' transforma a string de erro em uma descrição
}