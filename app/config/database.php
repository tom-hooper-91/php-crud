<?php
// used to connect to the database
$host = "mysql";
$db_name = "mysqldb";
$username = "user";
$password = "password";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>