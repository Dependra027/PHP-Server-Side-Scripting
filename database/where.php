<!-- Select and Filter Data From a MySQL Database
The WHERE clause is used to filter records.

The WHERE clause is used to extract only those records that fulfill a specified condition.

SELECT column_name(s) FROM table_name WHERE column_name operator value 
To learn more about SQL, please visit our SQL tutorial.

Select and Filter Data With MySQLi
The following example selects the id, firstname and lastname columns from the MyGuests table where the lastname is "Doe", and displays it on the page: -->

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

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($database);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS Singh (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error);
}

// Insert records
$sql = "INSERT INTO Singh (firstname, lastname) 
        VALUES ('Dependra', 'Singh'), ('Vinit', 'Kumar')";
if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully.<br>";
} else {
    echo "Error inserting records: " . $conn->error;
}

// Select records with WHERE condition
$sql = "SELECT id, firstname, lastname FROM Singh WHERE lastname='Singh'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results.<br>";
}

// Close connection
$conn->close();
?>
