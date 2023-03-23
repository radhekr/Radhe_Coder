<?php 
require 'config.php';
if(isset($_POST["sumbit"]))
{
    $name=$_POST["neme"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $insertData=mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($insertData) > 0)
    {
        echo "<script>alert('Username or Email has Already Taken');</script>";
    }
    else {
        if($password == $confirmpassword)
        {
            $query ="INSERT INTO tb-user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn,$query);
            echo "<script>alert('Registration Successful');</script>";
        }
        else {
            echo "<script>alert('Password Does not Match');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitstration </title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>
<body>
    <h2>Registration</h2>
    <form action="" method="POST" autocomplete="off">
    <label for="name" >Name : </label>
    <input type="text" name="name" id="name" required value=""><br>
    <label for="username" >User Name : </label>
    <input type="text" name="username" id="username" required value=""><br>
    <label for="email" >Email-Id : </label>
    <input type="email" name="email" id="email" required value=""><br>
    <label for="password" >Password : </label>
    <input type="password" name="password" id="password" required value=""><br>
    <label for="confirmpassword" >Confirm Password : </label>
    <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
    <button type="submit" name="submit">Submit</button><br><br>
    <a href="login.php">Login</a><br>

</form>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>
</html>