<?php 
$servername='localhost';
$username='root';
$password='';
$db='camwel';
$conn=new mysqli($servername, $username, $password, $db);
if($conn){
    echo "Successfully";
}else{
    echo "Not Successfully";
}
?>