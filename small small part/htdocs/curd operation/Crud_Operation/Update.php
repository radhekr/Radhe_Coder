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