<?php

namespace App\Framework\Database;

use App\Framework\App;
use PDO;

class Connection {
    public static function make($config)
    {
        $dsn = $config['driver'].':host='.$config['host'].';dbname='.$config['database'];
        return new PDO(
            $dsn, $config['user'], $config['password']
        );
    }
}