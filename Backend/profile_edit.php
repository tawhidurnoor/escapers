<?php

include_once "connection.php";

session_start();
$u_id = $_SESSION['u_id'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];

$sql = "UPDATE users SET f_name='$f_name',l_name='$l_name',email='$email' WHERE u_id = $u_id ";

if(mysqli_query($conn, $sql)){
    $_SESSION['f_name'] = $f_name;
    $_SESSION['l_name'] = $l_name;
    $_SESSION['email'] = $email;
}


header("Location:../profile.php");
