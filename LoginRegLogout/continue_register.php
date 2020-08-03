<?php

include_once "../Backend/connection.php";
include_once "../Backend/session_checker.php";

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$pass_1 = $_POST['pass_1'];
$pass_2 = $_POST['pass_2'];

if(!empty($_POST['u_type'])) { 
    $u_type = $_POST['u_type'];
}else{
    $u_type = "individual";
}

$pro_pic = "avatar.png";

$sql = "INSERT INTO users(f_name, l_name, email, pass_1, pass_2, u_type, pro_pic) VALUES ('$f_name', '$l_name', '$email', '$pass_1', '$pass_2', '$u_type', '$pro_pic')";


mysqli_query($conn,$sql);

include_once "../Backend/session_checker.php";
$_SESSION['users'] = $email;
header("Location:../index.php");

?>