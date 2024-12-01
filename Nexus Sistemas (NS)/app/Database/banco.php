<?php

$host = 'localhost';
$dbname = 'trabalhodatabase';
$dbusername = 'root';
$dbpassword = 'masterkey';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou, possível erro: " . $e->getMessage());
}

