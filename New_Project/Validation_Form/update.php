


<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
    $myid3=$_POST['myvariable'];
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


  

    $send = "UPDATE p1_form SET name='$name',fname='$fname', email='$email', mobno='$mobno', 
    gender='$gender', date='$date', yf='$yf', yt='$yt', address='$address' WHERE id='$myid3';";
   

    $send1="UPDATE emp SET salary='$salary', job='$job';";

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