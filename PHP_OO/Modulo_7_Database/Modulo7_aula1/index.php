<?php
/**
 * O PDO é a ferramenta de banco de dados do PHP mais utilizada.
 * Exemplo de uso:
 */

$pdo = new PDO("mysql:dbname=pdo;host=127.0.0.1", "root");

$sql = $pdo->query("SELECT * FROM usuarios");

echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";

print_r($dados);