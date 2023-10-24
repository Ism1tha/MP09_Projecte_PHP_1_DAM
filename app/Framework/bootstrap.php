<?php

namespace App\Framework;
use App\Framework\Database\Connection;
use App\Framework\Database\Database;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

App::bind('config', require './config.php');
App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));