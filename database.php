<?php

$config = require_once "config.php";

$dsn = "mysql:dbname={$config['database']}; host={$config['host']}";

try {

    $db = new PDO(
        $dsn,
        $config['user'],
        $config['password'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ); 
    
} catch(PDOException $error) {

    exit('database error');

}

