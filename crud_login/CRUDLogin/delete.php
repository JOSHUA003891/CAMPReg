<?php

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


if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}
require_once './db_connect.php';

$id = trim(mysqli_real_escape_string($conn, $_GET['id']));
$delete_user = mysqli_query($conn, "DELETE FROM `loginDetails` WHERE id='$id'");
header('Location: index.php');
exit;
