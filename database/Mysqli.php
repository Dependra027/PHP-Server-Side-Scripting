<!-- What is MySQL?
MySQL is a database system used on the web
MySQL is a database system that runs on a server
MySQL is ideal for both small and large applications
MySQL is very fast, reliable, and easy to use
MySQL uses standard SQL
MySQL compiles on a number of platforms
MySQL is free to download and use
MySQL is developed, distributed, and supported by Oracle Corporation
MySQL is named after co-founder Monty Widenius's daughter: My
The data in a MySQL database are stored in tables. A table is a collection of related data, and it consists of columns and rows.

Databases are useful for storing information categorically. A company may have a database with the following tables:

Employees
Products
Customers
Orders


Database Queries
A query is a question or a request.

We can query a database for specific information and have a recordset returned.

Look at the following query (using standard SQL):

SELECT LastName FROM Employees
The query above selects all the data in the "LastName" column from the "Employees" table. -->

<!-- connection -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn=new mysqli($servername,$username,$password);
// Check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}
?>

<!-- Close the Connection
The connection will be closed automatically when the script ends. To close the connection before, use the following:
    $conn->close(); -->