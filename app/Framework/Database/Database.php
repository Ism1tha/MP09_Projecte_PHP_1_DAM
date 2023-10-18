<?php

namespace Framework\Database;

use PDO;
use Models\Task;

class Database {

    protected $config;
    protected $connection;

    public function __construct($config)
    {
        $this->config = $config;
        $this->connection = new Connection($this->config);
    }

    function selectAll($table) {
        $query = $this->connection->pdo->prepare("SELECT * from $table;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}