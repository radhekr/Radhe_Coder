<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "myshop";

    $conn = mysqli_connect($server, $user, $pass, $db);

    // $gulab_jamun = 10;
    // $rasgulla = 15;
    // $rasmalai = 25;
    // $jalebi = 100;
    // $laddu = 180;
    // $besan_laddu = 200;
    // $motichur_laddu = 230;
    // $rabdi = 30;
    // $ghevar = 1000;

    // $kurkure = 10;
    // $biscuits = 10;
    // $haldiram_mixture = 20;
    // $chips = 10;
    // $namkin_mixture = 15;
    // $samosa = 8;
    // $momos = 10;
    // $samosa_chaat = 45;
    // $masaledar_poori = 30;

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        $uname = $_POST['uname'];
        $contactno = $_POST['contactno'];
        $address = $_POST['address'];
        $items = $_POST['opt'];
        $qty = $_POST['qty'];

        $date_time = date("d-m-y H:i:s");

        switch($items){
            case 'Gulab Jamun':
                $price = 10;
                $total_price = $qty * $price;
                break;
            case 'Rasgulla':
                $price = 15;
                $total_price = $qty * $price;
                break;
            case 'Rasmalai':
                $price = 25;
                $total_price = $qty * $price;
                break;
            case 'Jalebi':
                $price = 100;
                $total_price = $qty * $price;
                break;
            case 'Laddu':
                $price = 180;
                $total_price = $qty * $price;
                break;
            case 'Besan Laddu':
                $price = 200;
                $total_price = $qty * $price;
                break;
            case 'Motichur Laddu':
                $price = 230;
                $total_price = $qty * $price;
                break;
            case 'Rabdi':
                $price = 30;
                $total_price = $qty * $price;
                break;
            case 'Ghevar':
                $price = 1000;
                $total_price = $qty * $price;
                break;

            case 'kurkure':
                $price = 10;
                $total_price = $qty * $price;
                break;
            case 'Biscuits':
                $price = 10;
                $total_price = $qty * $price;
                break;
            case 'Haldirams Mixture':
                $price = 20;
                $total_price = $qty * $price;
                break;
            case 'Chips':
                $price = 10;
                $total_price = $qty * $price;
                break;
            case 'Namkin Mixture':
                $price = 15;
                $total_price = $qty * $price;
                break;
            case 'Momos':
                $price = 10;
                $total_price = $qty * $price;
                break;
            case 'Samosa':
                $price = 8;
                $total_price = $qty * $price;
                break;
            case 'Samosa Chaat':
                $price = 45;
                $total_price = $qty * $price;
                break;
            case 'Masaledar Poori':
                $price = 30;
                $total_price = $qty * $price;
                break;
        }

        $send = "INSERT INTO orderdetails VALUES('$date_time', '$uname', '$contactno', '$address', '$items','$price', '$qty', '$total_price')";
        mysqli_query($conn, $send);

        
        if(isset($_POST['buy_btn'])){
            header("location: Buy_successfully.php");
        }
    }  
?>
