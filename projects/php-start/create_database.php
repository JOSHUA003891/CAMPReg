<?php
$servername="localhost";
$username="root";
$password="";

$connection=new mysqli($servername,$username,$password);

//creating a connection
if ($connection->connect_error){
    die("connectin failed" .$connection->connect_error);
}
//creating database

$sql="CREATE DATABASE Student_name";
if ($connection->query($sql) === TRUE){
    echo "database created successfully";

}else{
    echo "failed to create database"  .$connection->connect_error;
}
$connection->close();
