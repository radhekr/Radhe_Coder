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
   

    // $send="INSERT INTO `p1_form` (`id`, `name`, `fname`, `email`, `mobno`, `gender`, `date`, `course`, `yf`, `yt`, `address`) 
        //    VALUES ('3', 'hiiiiiiiiii', 'hiiiiiiiii', '', '7865456789', 'Male', '2023-04-13', 'B.Sc', '2023-04-12', '2023-04-12', 'Nalanda ');";

        
     $send="INSERT INTO `p1_form` (`id`, `name`, `fname`, `email`, `mobno`, `gender`, `date`, `course`, `yf`, `yt`, `address`) 
            VALUES ('', '$name', '$fname', '$email', ' $mobno', '$gender', '$date', '$course', '$yf', '$yt', '$address');";


    $query=mysqli_query($conn, $send);
    if($query){
        echo "Inserted Successfully";

    }else{
        echo "Not Inserted Successfully";
    }
    
}
?>