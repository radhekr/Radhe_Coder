<?php 
include 'Connection.php';
?>
<a href=""></a>
<table cellpadding="10px" cellspacing="0" style= border="1px">
<tr>
    <th>Name</th>
    <th>Password</th>
    <th>Email</th>
    <th>Mob_No</th>
    <th colspan="2">Actions</th>
</tr>
<?php 
$query="SELECT * FROM demo";
$data=mysqli_query($conn,$query);
$result=mysqli_num_rows($data);
if($result)

{
   while($row=mysqli_fetch_array($data))
   {
    ?>
     <tr>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['password']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['mibno']?></td>
        <td><a href="Update.php?id=<?php echo $row['id'];?>">Edit</a></td>
        <td><a onclick="return confirm('Are you sure you want to delete?')" href="view1.php?id=<?php echo $row['id'];?>">Delete</a></td>
       
     </tr>
    <?php
   }
}

else 
{
    ?>
    <td>No Record Found</td>
    <?php
}


?>
</table>