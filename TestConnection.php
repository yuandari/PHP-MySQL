<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses teknoneksi ke database MySQL" . PHP_EOL;

    //Menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagalterkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}
