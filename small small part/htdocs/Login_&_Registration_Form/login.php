
<?php 
require 'config.php';
if(isset($_POST["submit"])){
    $usernameemail=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$usernameemail' OR email='$usernameemail'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $_POST["password"])
        {
            $_SESSION["login"] = true;
            $_SESSION["id"]=$row["id"];
            header("Location: index.php");
        }
        else{
            echo "<script>alert('Wrong Password');</script>";
        }
       
    }
    else {
        echo "<script>alert('User Not Registered');</script>";
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" class="" method="POST" autocomplete="off">
    <label for="usernameemail" >User Email : </label>
    <input type="text" name="usernameemail" id="usernameemail" required value=""><br>  
    <label for="password" >User Pass : </label>
    <input type="password" name="password" id="password" required value=""><br>   
    <button type="submit" name="submit">Login</button>
</form><br>
<a href="registration.php">Registrer</a>
</body>
</html>