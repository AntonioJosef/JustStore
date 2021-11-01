<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'juststore';
    try{
        $database = mysqli_connect($host, $username, $password, $databaseName);
    } catch(exception $e) {
        die("Cannot connect to database");
    }
?>
