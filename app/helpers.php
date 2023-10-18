<?php

function greeting() {
    if(isset($_GET["first_name"]) && isset($_GET["last_name"])) 
        $full_name = $_GET["first_name"] . " " . $_GET["last_name"];
    else if(isset($_GET["first_name"])) $full_name = $_GET["first_name"];
    else $full_name = "Desconegut";
    $sanitized_full_name = htmlspecialchars($full_name);
    return "<h1>Hola $sanitized_full_name!</h1>";
}

function connectDB($config) {
    try {
        return new PDO($config['database']['driver'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['database'], $config['database']['user'], $config['database']['password']);
    } catch (Exception $e) {
        echo 'Error de connexió a la base de dades: ' . $e;
    }
}