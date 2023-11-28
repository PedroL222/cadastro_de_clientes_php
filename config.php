<?php

$servidor = "localhost";
$banco = "Cadastro_de_clientes";
$userbanco ="root";
$senha = "root";

try {
    $dbh = new PDO("mysql:host=$servidor;dbname=$banco",$userbanco,$senha);
    
} catch (Exception $ex) {
    printf("Erro de Conexão:", $ex->getMessage());
}

?>