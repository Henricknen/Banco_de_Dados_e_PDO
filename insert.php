<?php

require_once 'conection.php';       // dando 'require' em conection para obter acesso a variável 'pdo' 

$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

$stmt = $pdo-> prepare($sql);       // query  preparada 'stmt' que o PDO irá conseguir substituir dados

$_name = 'Luis Henriques';       // variável $_name
$_username = 'FullStack';
$_password = '123456';

$stmt-> bindParam(':name', $_name);     // substituindo parâmetros por variável $_name
$stmt-> bindParam(':username', $_username);
$stmt-> bindParam(':password', $_password);

$stmt-> execute();      // executa essa query e envia para o banco de dados, 'criando' novo usuario