
<!-- id	name	fname	email	mobno	gender	date	course	yf	yt	address	 -->


<!-- name     fname     email    mobno     gender     date     course     yf     yt    address          -->

<!-- id	name	fname	email	mobno	gender	date	course	yf	yt	address	 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
        .container{
            height: 1150px;
            width: 60%;
            background-color: rgb(12, 11, 11,0.4);
            margin: auto;
            padding-top: 55px;
            position: relative;
        }
        .row{
            height: 1200px;
            width: 70%;
            /* background-color: rgba(156, 23, 23, 0.4); */
            margin: auto;
        }
        h4{
            text-align: center;
           font-size: 33px;
           text-decoration: underline;

        }
        input{
            width: 100%;
            padding: 7px;
            background-color: beige;
        }
        .submitbtn{
            width: 111px;
            position: absolute;
            right: 352px;
            background-color: rgb(7, 7, 7,0.7);
            
        }
        .address{
            width: 100%;
        }
        .input{
            width: 100%;
            padding: 7px;
            background-color: beige;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4><hr><a href="details.php" style="color:black;">Update Details</a><hr></h4>

              <form action="update.php?myvariable=<?php echo $_GET['myvariable']?>" method="POST" class="form-control">

              <?php
                         include 'connection.php';
                         $myid1=$_GET['myvariable'];
                         
                         $sendu="SELECT p1_form.*, emp.salary, emp.job FROM p1_form INNER JOIN emp 
                         ON (p1_form.id = emp.id) WHERE p1_form.id=$myid1";
                         
                        //  $sendu = "SELECT * FROM p1_form WHERE id='".$myid1."';";
                         $queryu = mysqli_query($conn, $sendu);
                         while($row1 = mysqli_fetch_assoc($queryu)){ ?>


                <div class="mb-3">
                    <label for="">Name</label>

                    <input type="hidden" name="myvariable" value="<?php echo $myid1;?>"/>
                        <!-- // hidden -->
                    <input type="text" name="name" placeholder="Enter Your Name" class="input-form" require value="<?php echo $row1['name'];?>"/><br><br>
                    
                   </div>
    
                   <div class="mb-3">
                    <label for="">Father Name</label>
                    <input type="text" name="fname" placeholder="Enter Your Father Name" class="input-form" require value="<?php echo $row1['fname'];?>"/><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="input-form" require value="<?php echo $row1['email'];?>"/><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Moblie Number</label>
                    <input type="text" name="mobno" placeholder="Enter Your Mobile No" class="input-form" require value="<?php echo $row1['mobno'];?>"/><br><br>
                   </div>

                     Gender: <br>
                   <select name="gender"  class="input" require>
                       <option value="defalt" selected>Gender</option>
                       <option value="male" <?php echo ($row1['gender'] == "male")?"Selected":"";?>>Male</option>
                       <option value="female" <?php echo ($row1['gender'] == "female")?"Selected":"";?>>Female</option>
                    </select><br><br>


                   <!-- Gender
                   <input type="radio" name="gender" ><label for="">Male</label>
                   <input type="radio" name="gender" ><label for="">Female</label><br><br> -->
    
                   <div class="mb-3">
                    <label for="">Date Of Birth</label>
                    <input type="date" name="date" placeholder="Enter Date of Birth" class="input-form" require value="<?php echo $row1['date'];?>"/><br><br>
                   </div>

                   Choose Your Courses: <br>
                   <select name="course" name="course" class="input" require>
                       <option value=" ">Choose Your Courses</option>
                       <option value="B.Sc" <?php echo ($row1['course'] == "B.Sc")?"Selected":"";?>>B.Sc</option>
                       <option value="B.A" <?php echo ($row1['course'] == "B.A")?"Selected":"";?>>B.A</option>
                       <option value="B.Com" <?php echo ($row1['course'] == "B.Com")?"Selected":"";?>>B.Com</option>
                       <option value="B.C.A" <?php echo ($row1['course'] == "B.C.A")?"Selected":"";?>>B.C.A</option>
                       <option value="B.Scit" <?php echo ($row1['course'] == "B.Scit")?"Selected":"";?>>B.Scit</option>
                       <option value="M.Com" <?php echo ($row1['course'] == "M.Com")?"Selected":"";?>>M.Com</option>
                       <option value="M.Sc" <?php echo ($row1['course'] == "M.Sc")?"Selected":"";?>>M.Sc</option>
                       <option value="M.A" <?php echo ($row1['course'] == "M.A")?"Selected":"";?>>M.A</option>
                       <option value="M.Ed" <?php echo ($row1['course'] == "M.Ed")?"Selected":"";?>>M.Ed</option>
                       <option value="OTHER" <?php echo ($row1['course'] == "OTHER")?"Selected":"";?>>OTHER</option>
                   </select><br><br>

                   <label for="yfrom">Year From:</label><br>
                   <input type="date" class="inputBox"  name="yf" value="<?php echo $row1['yf'];?>"/><br><br>
                   <label for="yto">Year To:</label><br>
                   <input type="date" class="inputBox" name="yt" value="<?php echo $row1['yt'];?>"/><br><br>
    
                   Address:- 
                   <input type="text" name="address" class="address"  style="height: 50px;" value="<?php echo $row1['address'];?>"/><br><br>
                   <!-- <textarea name="fulladd" id="fulladdress" cols="45" rows="3" class="address"></textarea><br><br><br> -->

                 
                   <div class="mb-3">
                    <label for="">Salary</label>
                    <input type="text" name="salary" placeholder="Enter Your Salary" class="input-form" require value="<?php echo $row1['salary'];?>"/><br><br>
                   </div>


                   <div class="mb-3">
                    <label for="">Job</label>
                    <input type="text" name="job" placeholder="Enter Your Job Name" class="input-form" require value="<?php echo $row1['job'];?>"/><br><br>
                   </div>
                  
                                     
                
                </div>
                
                <div class="md-3">
                    <input type="submit" name="submit" class="submitbtn">
                </div>
    
              </form>


              <?php 
                         }
              ?>
              








            </div>
        </div>
    </div>
</body>
</html>