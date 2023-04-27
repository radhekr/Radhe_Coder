<?php 
$servername='localhost';
$username='root';
$password='';
$db='radhe';
$conn=new mysqli($servername, $username, $password, $db);
if($conn){
    echo "Successfully";
}else{
    echo "Not Successfully";
}
?>