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
        $query = "SELECT * FROM logedmember";
        $send = mysqli_query($conn, $query);
        $total = mysqli_num_rows($send);

        if($total !=0){
            $result = mysqli_fetch_assoc($send);
            $us = $result['member_name'];
            $ps = $result['password'];
            $uname = $_POST['uname'];
            $pass = $_POST['upass'];
            $member = $_POST['member'];

            if($uname == $us && $pass == $ps){
                $_SESSION['mysession'] = $uname;
                header("location: login_success.php");
            }
            else{
                echo "Invalid User";
            }
        }
        else{
            echo "<script> window.alert('Invalid Username and Password ! Please Enter valid username and password'); </script>";
        }
        
    }
?>