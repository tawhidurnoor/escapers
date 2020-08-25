<?php
include_once "connection.php";

$post_id = $_POST['post_id_d'];

$sql = "DELETE FROM post_table WHERE post_id = $post_id ";
mysqli_query($conn,$sql);

header("Location:../profile.php");
