<!-- //     After a database and a table have been created, we can start adding data in them.

// Here are some syntax rules to follow:

// The SQL query must be quoted in PHP
// String values inside the SQL query must be quoted
// Numeric values must not be quoted
// The word NULL must not be quoted
// The INSERT INTO statement is used to add new records to a MySQL table:

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...) -->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed ".$conn->connect_error);
}
// Create table
//now insert
$sql="INSERT INTO Myt(firstname,lastname,email)
VALUES ('John','Doe','john@example.com')";

// if($conn->query($sql)===TRUE){
//     echo "New record created successfully";
// }
// else{
//     echo "Error: ".$sql."<br>".$conn->error;
// }

// Get ID of The Last Inserted Record
// If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get the ID of the last inserted/updated record immediately.

// In the table "MyGuests", the "id" column is an AUTO_INCREMENT field:

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();
?>