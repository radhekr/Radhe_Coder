<!DOCTYPE html>
<?php 
include "connection.php";
if(isset($_POST['signup']))
{
  $username=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['pasword']);
  $conpassword=mysqli_real_escape_string($conn,$_POST['password2']);

  if(empty($username))  { $error="username field is required"; }
  else if(empty($email))  { $error="Email field is Empty"; }
  else if(empty($password))  { $error="password  is Empty"; }
  else if($password != $conpassword)  { $error=" password  does not match"; }
  else if(strlen($username)<3 ||strlen($username)>30){$error="user name must be 3 to 30 characters";}
  else if(strlen($password)<6){$error="password must be atleast 6 characters";}
  else{$check_email="SELECT * FROM signup WHERE email='$email'"; $data=mysqli_query($conn,$check_email); $result=mysqli_fetch_array($data); if($result >0){$error="Email already exits";} 
        //  else
        //  {  // $pass=mb5($password);
        //   $insert="INSERT INTO signup(name,email,pasword,password2) values('$username','$email','$password','$conpassword')";
        //   $q=mysqli_query($conn,$insert);
        //   if($q)
        //   {
        //     $success="Your account hsas been created successfully";
        //   }
        // }
      }
    }
    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
          <p style="color:red">
            <?php
            if(isset($error))
            {
              echo $error;
            }
            ?>
          </p>
               
          <form action="" method="POST">
            <input type="text" name="name" placeholder="Enter user Name" value="<?php if(isset($error)){echo $username;}?>"><br><br>
            <input type="email" name="email" placeholder="Enter your email" value="<?php if(isset($error)){echo $email;}?>"><br><br>
            <input type="text" name="pasword" placeholder="Enter your password"><br><br>
            <input type="text" name="password2" placeholder="Conform password"><br><br>
             
          <button type="sumbit" name="signup" value="Signup">Sumbit</button>
        </form>
        </div>
    </div>

</body>
</html>