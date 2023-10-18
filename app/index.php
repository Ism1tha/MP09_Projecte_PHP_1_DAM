<?php 

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

$driver     = $config['database']['driver'];
$host       = $user = $config['database']['host'];
$db_name    = $config['database']['database'];
$user       = $config['database']['user'];
$password   = $config['database']['password'];


try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name", $user, $password);
} catch (Exception $e) {
    echo 'Error de connexió a la base de dades: ' . $e;
}

$query = $pdo->prepare("SELECT * from tasks;");
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');