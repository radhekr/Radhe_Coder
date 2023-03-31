<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CURD APPLICATION</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <h1 class="text-center alert-info py-3 mt-4 mx-4">Bootstrap 5 -->PHP(CRUD)</h1>
    <div class="container-fluid">
      <div class="row justify-content-center">
      <div class="col-5 mx-4">
        <h2 class="text-center alert-warning p-2 mt-5 rounded">Add/Update Student</h2>
        <form method="POST">

        <?php
        include 'connection.php';
        // if(isset($_POST['edit'])){
        $id1 = $_GET['myvariable'];

        $sqll1 = "select * from details where id='$id1'";
        $select1 = mysqli_query($conn, $sqll1);
        // $num1 = mysqli_num_rows($select1);
        while ($row1 = mysqli_fetch_assoc($select1)) { ?>

          <input type="text" class="form-control mt-3" placeholder="Enter UserName" name="user" required value="<?php echo $row1[
              'user'
          ]; ?>"/>
          <input type="email" class="form-control mt-3" placeholder="Enter E-mail" name="email" required value="<?php echo $row1[
              'email'
          ]; ?>"/>
          <input type="text" class="form-control mt-4" placeholder="Enter Password" name="pass" required value="<?php echo $row1[
              'pass'
          ]; ?>"/>
          <button class="btn btn-primary mt-3" name="submit">Submit</button>
        </form>
        <?php }

// }
?>
      </div>
      
      
      </div>
    </div>
  </body>
</html>


<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $id2 = $_GET['myvariable'];
    $username = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $send = "UPDATE details SET user='$username', email='$email', pass='$pass' WHERE id='$id2';";
    $query2 = mysqli_query($conn, $send);
    if ($query2) {
        echo "<p class='text-success text-center fs-4'>Data Update Successfully !</p>";
    } else {
        echo 'Data Not Updated';
    }
}
?>


