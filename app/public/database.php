<?php

function connect() 
{
    $server = "db";
    $database = "test";
    $username = "root";
    $password = "root";

    // Create connection
    $pdo = new PDO("mysql:host=".$server.";dbname=".$database, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

}