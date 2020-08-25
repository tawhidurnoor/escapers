<?php

include_once 'connection.php';
include_once 'timezone.php';

session_start();

$title = $_GET['title'];
$u_id = $_SESSION['u_id'];
$created_at = date('Y/m/d');
$held_at = $_GET['held_at'];
$num_guest = $_GET['num_guest'];
$places = $_GET['places'];
$cost = $_GET['cost'];
if ($_SESSION['u_type'] == 'individual') {
    $tour_type = 'Personal';
} else {
    $tour_type = 'Organizational';
}

$post = $_GET['post'];



$sql = " INSERT INTO post_table(title, u_id, created_at, held_at, num_guest, places, cost, tour_type, post) VALUES ('$title', '$u_id', '$created_at', '$held_at', '$num_guest', '$places', '$cost', '$tour_type', '$post') ";

if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;
    header("Location:../postview.php?id=".$id);
} else {
    header("Location:../");
}