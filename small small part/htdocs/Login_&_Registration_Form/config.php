

<?php 

$host="localhost";
$user="root";
$pass="";
$db="radhe";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn)
{
    echo "Ok";
}
else 
{
    echo "db not connected";
}
?>