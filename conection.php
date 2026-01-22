<?php

require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";      // string de conexão com banco de dados

try {       // captura os erros de conexão
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);      // fazendo conexão
    echo 'Conexão bem sucedida.<hr><br/>';
} catch (PDOException $e) {
    echo 'Erro na conexão: '. $e-> getMessage();        // método 'getMessage' transforma a string de erro em uma descrição
}