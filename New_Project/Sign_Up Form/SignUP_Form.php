<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            height: 460px;
            width: 400px;
            background-color: rgb(7, 7, 7,0.3);
            text-align: center;
            margin: auto;
            margin-top: 77px;
            padding-top: 13px;
        }
        .row{
            height: 85%;
            width: 75%;
            margin: auto;
            /* background-color: rgb(7, 7, 7,0.3); */
        }
        input{
            width: 98%;
            padding: 6px;
        }
        h4{
            text-align: center;
            text-decoration: underline;
            font-size: 25px;
        }
        .button{
            background-color: rgba(18, 18, 19, 0.5);
            /* padding: 7px; */
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 6px;
            padding-bottom: 6px;
        }
        p{
            margin-left: 11px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
           <form action="" method="POST">
            <h4>SignUp Form</h4><hr>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" class="input"><br><br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="input"><br><br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" class="input"><br><br>
            <label for="">Confirm Password</label>
            <input type="password" name="conpassword" placeholder="Enter Your Confirm Password" class="input"><br>
            <p>Reset your password <a href="Login_page.php">Login Form</a></p>
            <button class="button" type="submit" name="submit">Submit</button>
            <!-- <p>Please signup the form <a href="">Sign Up</a></p> -->
           </form>
        </div>
    </div>
</body>
</html>

<!-- `details2`      name      email    password     conpassword     -->

<?php
include 'connection.php';
  if(isset($_POST['submit'])){
  $username = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $conpass = $_POST['conpassword'];

//   $send = "INSERT INTO `details2`(user, email, password, conpassword) VALUES('$username', '$email', '$pass','$conpass');";
  $sql="INSERT INTO details2 (names, email, passwords, conpassword) VALUES('$username', '$email', '$pass', '$conpass');";
//   $query = mysqli_query($conn, $send);
//   if($query){
//     echo "Data Insert Successfully";
//   }else{
//     echo "Data Not Inserted";
//   }

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>