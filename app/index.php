<?php 

use Framework\App;
use Framework\Database\Database;

$tasks = App::get('database')::selectAll('tasks');