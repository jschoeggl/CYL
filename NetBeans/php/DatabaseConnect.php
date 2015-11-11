<?php

function getConnection() {
    //$servername = "127.0.0.1";
    //$password = "";
    $servername = "207.93.211.85";
    $password = "admin@regis";
    $dbname = "CYL";
    $username = "root";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
        
    } catch (Exception $e) {
        echo "EXCEPTION : Connection failed : " . $e->getMessage();
    }
}

?>