<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $mobno=$_POST['mobno'];
    $gender=$_POST['gender'];
    $date=date('y-m-d', strtotime($_POST['date']));
    $course=$_POST['course'];
    $yf=date('y-m-d', strtotime($_POST['yf']));
    $yt=date('y-m-d', strtotime($_POST['yt']));
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $job=$_POST['job'];
   

    // $send="INSERT INTO `p1_form` (`id`, `name`, `fname`, `email`, `mobno`, `gender`, `date`, `course`, `yf`, `yt`, `address`) 
        //    VALUES ('3', 'hiiiiiiiiii', 'hiiiiiiiii', '', '7865456789', 'Male', '2023-04-13', 'B.Sc', '2023-04-12', '2023-04-12', 'Nalanda ');";

        

$send="INSERT INTO `p1_form` (`id`, `name`, `fname`, `email`, `mobno`, `gender`, `date`, `course`, `yf`, `yt`, `address`) 
VALUES ('', '$name', '$fname', '$email', ' $mobno', '$gender', '$date', '$course', '$yf', '$yt', '$address');";


$send1="INSERT INTO `emp` (`id`, `salary`, `job`) VALUES ('', '$salary', '$job');";

$query2 = mysqli_query($conn, $send);
$query3 = mysqli_query($conn, $send1);

if ($query2) {
    echo "Data Updated";
}else if($query3){
    echo "Successfully";
} else {
    echo 'Data Not Updated';
}
}

?>


   

        
      