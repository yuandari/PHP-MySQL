<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comment(email, comment) VALUES ('yuandari8@gmail.com', 'Hi')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
