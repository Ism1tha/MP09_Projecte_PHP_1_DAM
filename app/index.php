<?php 

require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';

$pdo = connectDB($config);
$tasks = fetchAllTasks($pdo);