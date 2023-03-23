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