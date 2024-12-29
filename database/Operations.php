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

// Create sample table and insert data
$sql = "CREATE TABLE IF NOT EXISTS Products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    category VARCHAR(30) NOT NULL,
    price DECIMAL(10,2) NOT NULL
)";
$conn->query($sql);

// Insert sample data
$sql = "INSERT INTO Products (name, category, price) VALUES 
    ('Laptop', 'Electronics', 80000),
    ('Mobile', 'Electronics', 15000),
    ('Tablet', 'Electronics', 20000),
    ('Chair', 'Furniture', 3000),
    ('Desk', 'Furniture', 5000)";
$conn->query($sql);

echo "<h3>Examples of SQL Queries:</h3>";

// **GROUP BY and HAVING**
$sql = "SELECT category, AVG(price) AS avg_price 
        FROM Products 
        GROUP BY category 
        HAVING AVG(price) > 10000";
$result = $conn->query($sql);
echo "<h4>GROUP BY and HAVING:</h4>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Category: " . $row["category"] . " - Avg Price: " . $row["avg_price"] . "<br>";
    }
}

// **LIKE and AND/OR Operators**
$sql = "SELECT * FROM Products 
        WHERE name LIKE '%top%' 
        AND category = 'Electronics'";
$result = $conn->query($sql);
echo "<h4>LIKE and AND/OR:</h4>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Category: " . $row["category"] . " - Price: " . $row["price"] . "<br>";
    }
}

// **SQL Functions AVG, COUNT, SUM, MIN, MAX**
$sql = "SELECT 
        COUNT(*) AS total_items, 
        SUM(price) AS total_price, 
        MIN(price) AS min_price, 
        MAX(price) AS max_price, 
        AVG(price) AS avg_price 
        FROM Products";
$result = $conn->query($sql);
echo "<h4>SQL Functions (COUNT, SUM, MIN, MAX, AVG):</h4>";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total Items: " . $row["total_items"] . "<br>";
    echo "Total Price: " . $row["total_price"] . "<br>";
    echo "Minimum Price: " . $row["min_price"] . "<br>";
    echo "Maximum Price: " . $row["max_price"] . "<br>";
    echo "Average Price: " . $row["avg_price"] . "<br>";
}

// **SQL Functions LCASE and UCASE**
$sql = "SELECT UCASE(name) AS upper_name, LCASE(category) AS lower_category 
        FROM Products";
$result = $conn->query($sql);
echo "<h4>SQL Functions (LCASE and UCASE):</h4>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Uppercase Name: " . $row["upper_name"] . " - Lowercase Category: " . $row["lower_category"] . "<br>";
    }
}

// Close connection
$conn->close();
?>
