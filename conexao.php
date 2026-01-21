<?php

$host = 'localhost';

$username = 'root';
$password = '';
$dbname = '';
$dsn = "mysql:host=$host;dbname=$dbname";      // string de conexão com banco de dados

try {       // captura os erros de conexão
    $connection = new PDO($dsn, $username, $password);      // fazendo conexão
    echo 'Conexão bem sucedida.';
} catch (PDOException $e) {
    echo 'Erro na conexão: '. $e-> getMessage();        // método 'getMessage' transforma a string de erro em uma descrição
}