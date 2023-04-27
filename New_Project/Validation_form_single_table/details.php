<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <style>
        .container{
            width: 100%;
            height: 500px;
            background-color: rgb(14, 13, 13,0.5);
            margin: auto;
            padding-top: 57px;
            text-align: center;
        }
        .row{
            width: 72%;
            height: 100%;
            margin: auto;
            /* padding-left: 41px; */
            padding: 21px;
            text-align: center;
            
            } 

          .buttond{
            background-color: red;
          }
          .buttone{
            background-color: rgb(217, 255, 0);
            padding-left: 11px;
            padding-right: 11px;
          }
         tr{
            border: 1px solid white;
         }
        
      
       
    </style>
</head>
<body>
    <!-- id	name	fname	email	mobno	gender	date	course	yf	yt	address	 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color: yellow; font-size: 21px; text-decoration: underline;"> <hr><a href="form.php" style="color:black;">Student Details</a> <hr> </h4>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Fat-Name</th>
                        <th>Email</th>
                        <th>Mob-No</th>
                        <th>Gender</th>
                        <th>D-O-B</th>
                        <th>Course</th>
                        <th>Year-From</th>
                        <th>Year-To</th>
                        <th>Address</th>
                        <!-- <th>Salary</th> -->
                        <th>Action</th>
                    </tr>
                    <tr>

                    <?php
                        // <!-- id	name	fname	email	mobno	gender	date	course	yf	yt	address	 -->

                         include 'connection.php';
                        //  $sqll = "SELECT p1_form.*, emp.salary FROM p1_form, emp WHERE p1_form.name=emp.name ORDER BY p1_form.name";
                         $sqll = "SELECT * FROM p1_form";
                         $select = mysqli_query($conn, $sqll);
                         $num = mysqli_num_rows($select);
                         while($row = mysqli_fetch_assoc($select)){ ?>
                         <td><?php echo $row['id'];?></td>
                         <td><?php echo $row['name'];?></td>
                         <td><?php echo $row['fname'];?></td>
                         <td><?php echo $row['email'];?></td>
                         <td><?php echo $row['mobno'];?></td>
                         <td><?php echo $row['gender'];?></td>
                         <td><?php echo $row['date'];?></td>
                         <td><?php echo $row['course'];?></td>
                         <td><?php echo $row['yf'];?></td>
                         <td><?php echo $row['yt'];?></td>
                         <td><?php echo $row['address'];?></td>
          
          <td><a href="delete.php?myvariable=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
          <td><a href="Edit.php?myvariable=<?php echo $row['id'];?>" class="btn btn-warning" >Edit</a></td>
        </tr>
                    <?php 
                         }
                    ?>
                        <!-- <td>1</td>
                        <td>Radhe Kumar</td>
                        <td>Munna Prasad</td>
                        <td>radhe@gmail.com</td>
                        <td>9876543456</td>
                        <td>Male</td>
                        <td>12-12-1997</td>
                        <td>B-tech</td>
                        <td>18-8-2018</td>
                        <td>18-8-2022</td>
                        <td>Rajgir Nalanda</td>
                        <td>
                            <button class="buttond"><a href="" class="btn btn-danger">Delete</a></button>
                            <button class="buttone"><a href="" class="btn btn-primary">Edit</a></button>
                           
                        </td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
</body>
</html>


<?php 

?>