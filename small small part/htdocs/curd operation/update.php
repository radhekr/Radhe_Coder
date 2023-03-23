<?php include 'Connection.php';
$id=$_GET['id'];
$select="SELECT * FROM demo WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>


<div class="container">
    <div class="row">
        <h4>Student Details</h4>
       <hr>

    <div class="">
    <form action="" method="POST">
        <label for="">Name</label>
        <input type="text"  name="name" placeholder="Enter Firsy Name" value="<?php echo $row['name']?>"><br><br>

        <label for="">Password</label>
       <input type="text" value="<?php echo $row['password']?>" name="password" placeholder="Enter your password"><br><br>


        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $row['email']?>" placeholder="Enter Email Address"><br><br>


        <label for="">Mobile No</label>
        <input type="text" name="mibno" value="<?php echo $row['mibno']?>" placeholder="Enter Mobile Numebr"><br><br>


        <button name="update_btn"><a href="view1.php"></a>Update</button>


        <button type="sumbit" name="view1.php" class="formsave" ><a href="view1.php">Back</a></button>

        

    </form>
</div>


    </div>
</div>



<?php 
if(isset($_POST['update_btn']))
{
    $fname=$_POST['name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $MObNo=$_POST['mibno'];

    $update="UPDATE demo SET name='$fname',password='$pass',email='$email',mibno='$MObNo' WHERE id='$id'";
    $data=mysqli_query($conn,$update);


    if($data)
    {
        ?>
        <script type="text/javascript">
            alert("Data Update Successfully");
            windo.open("http://localhost/curd%20operation/view1.php","_self");
        </script>
        <?php
    }

    else 
    {
        ?>
        <script type="text/javascript">
            alert("Please try Again");
        </script>
        <?php
    }
}
?>
