<?php 

use App\Framework\App;
use App\Framework\Database\Database;

require 'app/helpers.php';

$tasks = App::get('database')::selectAll('tasks');