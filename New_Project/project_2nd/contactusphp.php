<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "myshop";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        $uname = $_POST['name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $subject = $_POST['subject'];
        $umsg = $_POST['umsg'];
        $date = date("d-m-y H:i:s");
        
        $send = "INSERT INTO contactdetails VALUES('$uname', '$email', '$contactno', '$subject', '$umsg', '$date');";
        mysqli_query($conn, $send);

        if(isset($_POST['query-btn'])){
            header("location: contactus_successfull.php");
        }
    }
?>