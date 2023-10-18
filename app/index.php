<?php 

require 'helpers.php';
require 'Task.php';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_laravel", 'root', 'root');
} catch (Exception $e) {
    echo 'Error de connexió a la base de dades: ' . $e;
}

$query = $pdo->prepare("SELECT * from tasks;");
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');