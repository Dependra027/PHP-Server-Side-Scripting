<!-- The UPDATE statement is used to update existing records in a table:

UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value  -->

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//update
$sql="UPDATE MyGuests SET lastname='DOE' WHERE ID=2 ";
if($conn->query($sql)===TRUE){
    echo "Record updated successfully";
}
else{
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>