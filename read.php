<?php

require_once 'conection.php';

$sql = 'SELECT * FROM usuarios';        // 'selecionando tudo' da tabela usuarios

$stmt = $pdo-> prepare($sql);       // execução da query que retornará os usuarios
$result = $stmt-> execute();       // execução da query que retornará os usuarios

if($result) {
    // $data = $stmt-> fetchAll(PDO::FETCH_ASSOC);       // 'PDO::FETCH_ASSOC' retorna o resultado por associação

    // foreach($data as $linha) {       // percorrendo linha por linha no array
    //     echo '<h1>'. $linha['username']. '</h1>';
    //     echo '<pre>';
    //     var_dump($linha);        
    //     echo '</pre>';        
    //     echo '<hr>';
    // }
    
    $data = $stmt-> fetchAll(PDO::FETCH_OBJ);       // 'PDO::FETCH_OBJ' retorna os resultados como um 'objeto'
    
    foreach($data as $linha) {
        echo '<h1>'. $linha-> username. '</h1>';
        echo '<pre>';
        var_dump($linha);        
        echo '</pre>';        
        echo '<hr>';
    }

}