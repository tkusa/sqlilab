<?php

require_once "../database.php";

$pdo = connect();
$query1 = "DROP TABLE IF EXISTS users;";
$pdo->query($query1);
$query2 = "CREATE TABLE users ( ".
          "  id int, ". 
          "  username varchar(255), ".
          "  password varchar(255) ".
          ");";
$pdo->query($query2);
$query3 = "INSERT INTO users (id, username, password) VALUES ".
          "(1, 'admin', 'password');";
$pdo->query($query3);

echo "Done!";