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
            background-color: rgb(7, 7, 7,0.6);
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
            border-radius: 11px 11px;
            /* background-color: rgba(238, 17, 17, 0.1); */

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

<?php 
include 'connectoin.php';
$sendf="SELECT * FROM details2 WHERE email=='$email' AND password=='password';";
$query=mysqli_query($conn, $sendf);
while($row = mysqli_fetch_assoc($query)){?>

            <h4>Login</h4><hr>
            <label for="">Email</label><br><br>
            <input type="email" name="email" placeholder="Enter Your Email" class="input" require value="<?php echo $row['name'];?>" /><br><br><br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter Your Password" class="input" require value="<?php echo $row1['email'];?>"/><br><br>
            <p>Reset your password <a href="">Forget Pass</a></p>
            <button class="button" type="submit" name="submit">Submit</button>
            <p>Please signup the form <a href="SignUP_Form.php">Sign Up</a></p>
           </form>

           <?php
}
           ?>
        </div>
    </div>
</body>
</html>

<!-- `details2`      name      email    password     conpassword     -->



?>