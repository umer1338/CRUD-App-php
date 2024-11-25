<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'company_db';

// Create the connection
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

// Check if the connection was successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>