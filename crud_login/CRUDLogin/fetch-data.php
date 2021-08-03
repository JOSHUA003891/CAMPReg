<?php
// FETCH ALL USERS
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "campLogin";
// Create connection
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// FETCH ALL USERS
function fetchUsers($conn){
    $query = mysqli_query($conn,"SELECT * FROM `loginDetails`");
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
};

// FETCH SINGLE USER BY ID
function fetchUser($conn, $id){
    $id = mysqli_real_escape_string($conn,$id);
    $query = mysqli_query($conn,"SELECT * FROM `loginDetails` WHERE `id`='$id'");
    $data = mysqli_fetch_assoc($query);
    if(!count($data)){
        header('Location: index.php');
        exit;
    }
    return $data;
}
