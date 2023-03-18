<?php 
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='rahde';
$DATABASE='radhe';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($conn)
{
    echo "connection successfuly";
}
else 
{
    die(mysqli_error($conn));
}
?>