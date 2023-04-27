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
            height: 1000px;
            width: 60%;
            background-color: rgb(12, 11, 11,0.4);
            margin: auto;
            padding-top: 55px;
            position: relative;
        }
        .row{
            height: 1000px;
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
            right: 382px;
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
                <h4><hr><a href="details.php" style="color:black;">Registration Form</a><hr></h4>

              <form action="insert.php" method="POST" class="form-control">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter Your Name" class="input-form" require><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Father Name</label>
                    <input type="text" name="fname" placeholder="Enter Your Father Name" class="input-form"><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="input-form"><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Moblie Number</label>
                    <input type="text" name="mobno" placeholder="Enter Your Mobile No" class="input-form"><br><br>
                   </div>

                     Gender: <br>
                   <select name="gender"  class="input">
                       <option value="" selected>Gender</option>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                    </select><br><br>


    
                   <div class="mb-3">
                    <label for="">Date Of Birth</label>
                    <input type="date" name="date" placeholder="Enter Date of Birth" class="input-form"><br><br>
                   </div>

                   Choose Your Courses: <br>
                   <select name="course" name="course" class="input">
                       <option value="defalt" selected>Choose Your Courses</option>
                       <option value="B.Sc">B.Sc</option>
                       <option value="B-tech">B-tech</option>
                       <option value="B.Com">B.Com</option>
                       <option value="B.C.A">B.C.A</option>
                       <option value="B.Scit">B.Scit</option>
                       <option value="M.Com">M.Com</option>
                       <option value="M.Sc">M.Sc</option>
                       <option value="M-tech">M-tech</option>
                       <option value="M.Ed">M.Ed</option>
                       <option value="OTHER">OTHER</option>
                   </select><br><br>

                   <label for="yfrom">Year From:</label><br>
                   <input type="date" class="inputBox"  name="yf" /><br><br>


                   <label for="yto">Year To:</label><br>
                   <input type="date" class="inputBox" name="yt" /><br><br>

    
                   Address:- 
                   <input type="text" name="address" class="address"  style="height: 50px;"><br><br><br>
                   <!-- <textarea name="fulladd" id="fulladdress" cols="45" rows="3" class="address"></textarea><br><br><br> -->
    
                  
                

                   <div class="mb-3">
                    <label for="">Salary</label>
                    <input type="text" name="salary" placeholder="Enter Your Email" class="input-form"><br><br>
                   </div>
    
                   <div class="mb-3">
                    <label for="">Job</label>
                    <input type="text" name="job" placeholder="Enter Your Mobile No" class="input-form"><br><br>
                   </div>
                                     
                
                </div>
                
                <div class="md-3">
                    <input type="submit" name="submit" class="submitbtn">
                </div>
    
              </form>

              








            </div>
        </div>
    </div>
</body>
</html>


<!-- id	name	fname	email	mobno	gender	date	course	yf	yt	address	 -->
