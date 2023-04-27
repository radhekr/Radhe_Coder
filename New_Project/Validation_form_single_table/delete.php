<?php
error_reporting(0);
include 'connection.php';
if (!$conn) {
    die('Connection failed:' . mysqli_connect_error());
} else {
    $myid = $_GET['myvariable'];
    $query = "DELETE FROM p1_form WHERE id='$myid'";
    $send = mysqli_query($conn, $query);
    if ($send) {
        header('location: details.php');
    } else {
        echo 'Not delete';
    }
}
?>