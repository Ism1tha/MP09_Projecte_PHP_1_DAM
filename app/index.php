<?php 

use Framework\Database\Database;

require 'config.php';
require 'app/helpers.php';
require 'app/Models/Task.php';
require 'Framework/Database/Connection.php';
require 'Framework/Database/Database.php';

$database = new Database($config);
$tasks = $database->selectAll('tasks');