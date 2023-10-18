<?php

namespace Framework\Database;

use PDO;

class Connection {
    
    public $pdo;

    public function __construct($config)
    {
        $this->connectDB($config);
    }

    function connectDB($config) {
        try {
           $this->pdo = new PDO($config['database']['driver'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['database'], $config['database']['user'], $config['database']['password']);
        } catch (\Exception $e) {
            echo 'Error de connexió a la base de dades: ' . $e;
        }
    }
}