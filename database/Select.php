<!-- Select Data From a MySQL Database
The SELECT statement is used to select data from one or more tables:

SELECT column_name(s) FROM table_name
or we can use the * character to select ALL columns from a table:

SELECT * FROM table_name -->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
//create table
//insertin table

//Select from table
$sql="SELECT id,firstname,lastname FROM Dependra";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
        echo "ID: ".$row["id"]." Name ".$row["firstname"]." ".$row["lastname"]. "<br>";
    }
}
else {
    echo "0 results";
  }
  $conn->close();
?>