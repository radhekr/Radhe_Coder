<?php
error_reporting(0);
include 'connection.php';
if (!$conn) {
    die('Connection failed:' . mysqli_connect_error());
} else {
    $myid = $_GET['myvariable'];
    $query = "DELETE p1_form.*, emp.* FROM p1_form INNER JOIN emp ON p1_form.id = emp.id WHERE p1_form.id='$myid'";
    $send = mysqli_query($conn, $query);
    if ($send) {
        header('location: details.php');
    } else {
        echo 'Not delete';
    }
}
?>
