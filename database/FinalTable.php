<?php


// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dependra";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error);
}

// Inserting multiple records
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
        ('John', 'Doe', 'john@example.com'),
        ('Mary', 'Moe', 'mary@example.com'),
        ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Select records
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

//select WHERE
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Moe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results.<br>";
}

//select order by
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

//delete
$sql="DELETE FROM MyGuests WHERE id=3";
if($conn->query($sql)===TRUE)
{
    echo "Record deleted successfully";
}
else
{
    echo "Error deleting record: " . $conn->error;
}

//update
$sql="UPDATE MyGuests SET lastname='DOE' WHERE ID=2 ";
if($conn->query($sql)===TRUE){
    echo "Record updated successfully";
}
else{
    echo "Error updating record: " . $conn->error;
}

echo "<br>";
//truncate
$sql="TRUNCATE TABLE MyGuests";
if($conn->query($sql)===TRUE)
{
    echo "Table truncated successfully";
}
else{
    echo "Error truncating table: " . $conn->error;
}

// DROP a table (completely deletes the table)
$sql = "DROP TABLE IF EXISTS MyGuests";
if ($conn->query($sql) === TRUE) {
    echo "Table 'Singh' dropped successfully.<br>";
} else {
    echo "Error dropping table: " . $conn->error . "<br>";
}

// DROP a database (completely deletes the database)
$sql = "DROP DATABASE IF EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' dropped successfully.<br>";
} else {
    echo "Error dropping database: " . $conn->error . "<br>";
}
// Close connection
$conn->close();

?>
