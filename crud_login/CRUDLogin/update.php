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


function updateUser($conn, $id, $u_name, $u_email)
{

    $id = trim(mysqli_real_escape_string($conn, $id));
    $u_name = trim(mysqli_real_escape_string($conn, htmlspecialchars($u_name)));
    $u_email = trim(mysqli_real_escape_string($conn, htmlspecialchars($u_email)));

    // IF NAME OR EMAIL IS EMPTY
    if (empty($u_name) || empty($u_email)) {
        return 'Please fill all required fields.';
    }
    //IF EMAIL IS NOT VALID
    elseif (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
        return 'Invalid email address.';
    } else {
        $check_email = mysqli_query($conn, "SELECT `email` FROM `loginDetails` WHERE `email` = '$u_email' AND `id`!='$id'");
        // IF THE EMAIL IS ALREADY IN USE
        if (mysqli_num_rows($check_email) > 0) {
            return 'This email is already registered. Please try another.';
        }

        // UPDATE USER DATA
        $query = mysqli_query($conn, "UPDATE `loginDetails` SET `name`='$u_name', `email`='$u_email' WHERE `id`='$id'");
        // IF USER UPDATED
        if ($query) {
            return true;
        }
        return 'Oops something is going wrong!';
    }
}