<?php

require_once "../database.php";

$username = $_POST["username"];
$password = $_POST["password"];

$pdo = connect();

$query = "SELECT id, username, password ".
         "from users ".
         "WHERE username='$username' ".
         "AND password='$password';";

echo $query;
try {
    $results = $pdo->query($query);
} catch (PDOException $e) {
    echo $e->getMessage();
    return;
}

// success
if ($results->rowCount() > 0) {
    echo "Logged in as $username";
    return;
}

header("Location: /login/index.php?f=true");

