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
    <h1 class="text-center alert-info py-3 mt-4 mx-4">Bootstrap 5  -->PHP(CRUD)</h1>
    <div class="container-fluid">
      <div class="row">
      <div class="col-5 mx-4">
        <h2 class="text-center alert-warning p-2 mt-5 rounded">Add/Update Student</h2>
        <form method="POST">
          <input type="text" class="form-control mt-3" placeholder="Enter UserName" name="user" required />
          <input type="email" class="form-control mt-3" placeholder="Enter E-mail" name="email" required />
          <input type="password" class="form-control mt-4" placeholder="Enter Password" name="pass" required />
          <button class="btn btn-primary mt-3" name="submit">Submit</button>
        </form>
        
      </div>
      <div class="col-6 mx-4">
      <h2 class="text-center alert-warning p-2 mt-5 rounded">Show Students Information</h2>
      <table class="table">
        <tr class="bg-dark text-light">
          <th>Id</th>
          <th>UserName</th>
          <th>E-mail</th>
          <th>Password</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        <tr>
          <?php
            include 'connection.php';
            $sqll = "SELECT * FROM details";
            $select = mysqli_query($conn, $sqll);
            $num = mysqli_num_rows($select);
            while($row = mysqli_fetch_assoc($select)){
          ?>

          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['user'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['pass'];?></td>
          <td><a href="delete.php?myvariable=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
          <td><a href="update.php?myvariable=<?php echo $row['id'];?>" class="btn btn-warning" >Edit</a></td>
        </tr>

        <?php
            }
        ?>
        
      </table>
      </div>
      
      </div>
    </div>
  </body>
</html>


<?php
include 'connection.php';
  if(isset($_POST['submit'])){
  $username = $_POST['user'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $send = "INSERT INTO details(user, email, pass) VALUES('$username', '$email', '$pass');";
  $query = mysqli_query($conn, $send);
  if($query){
    echo "Data Insert Successfully";
  }else{
    echo "Data Not Inserted";
  }
}
?>


