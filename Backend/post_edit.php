<?php

include_once "connection.php";
$post_id = $_POST['post_id_e'];
$title = $_POST['title'];
$places = $_POST['places'];
$num_guest = $_POST['num_guest'];
$cost = $_POST['cost'];
$date = $_POST['date'];
$details = $_POST['details'];

$sql = "UPDATE post_table SET title='$title',held_at='$date',num_guest='$num_guest',places='$places',cost='$cost',post='$details' WHERE post_id = '$post_id' ";

mysqli_query($conn, $sql);

header("Location:../postview.php?id=". $post_id);