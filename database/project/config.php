<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webpage_db";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="CREATE DATABASE IF NOT EXISTS $database";
if($conn->query($sql)===TRUE)
{
    echo "Created db";
}
else{
    echo "Error creating db ".$conn->error;
}
$conn->select_db("$database");

$sql="CREATE TABLE IF NOT EXISTS users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if($conn->query($sql)===TRUE)
{
    echo "table created";
}
else
{
    echo "table not created ".$conn->error;
}


?>
