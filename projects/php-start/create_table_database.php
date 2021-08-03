<?php
$servername="localhost";
$username="root";
$password="";
$database="students";

$connection=new mysqli($servername,$username,$password,$database);

//creating a connection
if ($connection->connect_error){
    die("connection failed" .$connection->connect_error);
}
//creating tables
$sql="CREATE TABLE Names (
No INT (8) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
FullNames VARCHAR (50) NOT NULL,
Email VARCHAR  (50),
Registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";
if ($connection->query($sql) ===TRUE){
    echo "tables created successfully";

}else{
    echo "tables not created".$connection->error;
}
$connection->close();