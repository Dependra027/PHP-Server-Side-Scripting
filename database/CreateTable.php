<!-- The CREATE TABLE statement is used to create a table in MySQL.

We will create a table named "MyGuests", with five columns: "id", "firstname", "lastname", "email" and "reg_date": -->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDb";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}

//creating table
$sql = "CREATE TABLE  Myt (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn->query($sql)===TRUE){
        echo "table created successfully";
    }
    else{
        echo "error creating table".$conn->error;
    }


    $conn->close();
?>