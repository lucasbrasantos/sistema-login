<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="lucas";
$password="x";
$dbname="sistemalogin";

try {
    $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
} catch (PDOException $e) {
    echo "Erro na conexão: $e->getMessage()";
}




?>