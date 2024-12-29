<?php
// Database connection details
$servername = "localhost";
$username = "username";
$password = "";
$database = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db($database);

// TRUNCATE a table (removes all rows but keeps the table structure)
$sql = "TRUNCATE TABLE Singh";
if ($conn->query($sql) === TRUE) {
    echo "Table 'Singh' truncated successfully.<br>";
} else {
    echo "Error truncating table: " . $conn->error . "<br>";
}

// DROP a table (completely deletes the table)
$sql = "DROP TABLE IF EXISTS Singh";
if ($conn->query($sql) === TRUE) {
    echo "Table 'Singh' dropped successfully.<br>";
} else {
    echo "Error dropping table: " . $conn->error . "<br>";
}

// DROP a database (completely deletes the database)
$sql = "DROP DATABASE IF EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database '$database' dropped successfully.<br>";
} else {
    echo "Error dropping database: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
