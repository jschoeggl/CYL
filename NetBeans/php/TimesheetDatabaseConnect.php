<?php

function getconnection() {
    $servername = "127.0.1";
    $dbname = "CYL";
    $username = "root";
    $password = "jwrocket123";
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Exception: Connection failed: " . $e->getMessage();
    }
    return $connection;
}

?>