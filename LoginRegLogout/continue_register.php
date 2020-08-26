<?php

include_once "../Backend/connection.php";
include_once "../Backend/session_checker.php";

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$pass_1 = $_POST['pass_1'];
$pass_2 = $_POST['pass_2'];


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location:registration.php?error=1");
} else {
    if (strcmp($pass_1, $pass_2) != 0) {

        header("Location:registration.php?error=2");
    } else {

        if (!empty($_POST['u_type'])) {
            $u_type = $_POST['u_type'];
        } else {
            $u_type = "individual";
        }

        $pro_pic = "avatar.png";

        $sql2 = "INSERT INTO users(f_name, l_name, email, pass_1, pass_2, u_type, pro_pic) VALUES ('$f_name', '$l_name', '$email', '$pass_1', '$pass_2', '$u_type', '$pro_pic')";


        mysqli_query($conn, $sql2);

        header("Location:login.php");
    }
}


?>