<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
          height: 450px;
          width: 400px;
          background-color: rgb(17, 16, 16,.3);
          margin: auto;
          position: relative;

        }
        .row{
            height: 90%;
            width: 65%;
            margin: auto;
        }
        h4{
            text-align: center;
            padding-top: 35px;
            color: blue;
            font-size: 35px;
        }
        input{
            width: 100%;
            padding: 5px;
        }
        .formsave{
           position: absolute;
           right: 180px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <h4>Student Details</h4>
       <hr>

    <div class="">
    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text"  name="name" placeholder="Enter Firsy Name"><br><br>

        <label for="">Password</label>
       <input type="text" name="password" placeholder="Enter your password"><br><br>


        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter Email Address"><br><br>


        <label for="">Mobile No</label>
        <input type="text" name="mibno" placeholder="Enter Mobile Numebr"><br><br>


        <!-- <button name="save"><a href="view1.php"></a>Details</button> -->


        <button type="sumbit" name="save" class="formsave" >Save</button>

        

    </form>
</div>


    </div>
</div>


<?php 
if(isset($_POST['save']))
{
    $fname=$_POST['name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $MObNo=$_POST['mibno'];

    $query="INSERT INTO demo (name,password,email,mibno) VALUES('$fname','$pass','$email','$MObNo')";
    $data=mysqli_query($conn,$query);


    if($data)
    {
        ?>
        <script>
            alert("Data Saved Successfully");
        </script>
        <?php
    }

    else 
    {
        ?>
        <script>
            alert("Please try Again");
        </script>
        <?php
    }
}
?>
</body>
</html>