<?php 

require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';

$pdo = connectDB($config);

$query = $pdo->prepare("SELECT * from tasks;");
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_CLASS, 'Task');