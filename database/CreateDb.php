<!-- The CREATE DATABASE statement is used to create a database in MySQL.

The following examples create a database named "myDB": -->

<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}

//create db
$sql="CREATE DATABASE myDb";
if($conn->query($sql)=== TRUE)
{
    echo "Connection created";
}
else{
    echo "Error creating database: ".$conn->error;
}

$conn->close();
?>