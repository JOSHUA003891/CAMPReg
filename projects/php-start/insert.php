<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$connection = new mysqli($servername, $username, $password, $database);

//creating a connection
if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
}
//Inserting data
$sql="INSERT INTO Names (Fullnames,Email)VALUE ('Joshua Peter','peterjoshua456@gmail.com')";


if ($connection->query($sql) === TRUE) {
    echo "added a new record successfully";

} else {
    echo "failed" . $sql . "<br>" . $connection->error;
}
$connection->close();
