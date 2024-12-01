<?php

// Define the database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'shop_db';

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
      die('Could not connect to the database: ' . mysqli_connect_error());
}
// If the connection was successful, print a success message
// echo 'Connected to the database successfully';