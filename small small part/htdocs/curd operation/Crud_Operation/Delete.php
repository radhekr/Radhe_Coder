<?php 
include 'connection.php';
$id=$GET['id']
$query="DELETE FROM demo WHERE id='$id'";
$data=mysqli_query($conn,$query);

if($data)
{
    ?>
    <script type="text/javascript">
        alert("Data Delete Successfully");
        window.open("http://localhost/curd%20operation/view1.php","_self");
      
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
?>