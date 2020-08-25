<?php

include_once "../Backend/session_checker.php";
include_once "../Backend/connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$return = $_POST['return'];



$sql = "SELECT * FROM users WHERE email='$email' and pass_1='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['u_id'] = $row['u_id'];
    $_SESSION['f_name'] = $row['f_name'];
    $_SESSION['l_name'] = $row['l_name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['u_type'] = $row['u_type'];
    $_SESSION['pro_pic'] = $row['pro_pic'];

    $return = "../" . $return;
    //echo $return;
    //header($return);
    header("Location:" . $return);
  }
} else {
  header("Location:login.php?error=1");
}