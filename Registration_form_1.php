<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            color: #30ffbb;
            font-size: 50px;
            padding-top: 10px;
        }
        #main{
            width: 70%;
            background: linear-gradient(to top left,#8295e9,#e627d2,#161ae6);
            text-align: center;
            margin: auto;  
        }
        #containar{
            width: 60%;
            /* background: seagreen; */
            margin: auto;
            font-size: 20px;
            color: white;
            text-align: left;
        }
        .inputBox{
            font-size: 15px;
            padding: 7px;
            width: 400px;
            border: 1px solid gray;
            border-radius: 20px;
        }
        .submitbtn{
            width: 200px;
            font-size: 20px;
            color: white;
            background: linear-gradient(to bottom,#fc0328,#4d030e);
            padding: 7px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1>Admition Form</h1><br>
        <div id="containar">
            <hr><br><br>
            <form action="" method="post">
                <label for="aadhar">Enter Your Aadhar No.:</label><br/>
                <input type="text" class="inputBox" id="aadhar" name="aadhar" placeholder="Enter Aadhar No." maxlength="12"/><br><br>

                <label for="uname">Enter Your Full Name:</label><br/>
                <input type="text" class="inputBox" id="uname" name="uname" placeholder="Enter Your Name"/><br><br>

                <label for="fname">Enter Your Father's Name:</label><br/>
                <input type="text" class="inputBox" id="fname" name="fname" placeholder="Enter Father's Name"/><br><br>

                <label for="mname">Enter Your Mother"s Name:</label><br/>
                <input type="text" class="inputBox" id="mname" name="mname" placeholder="Enter Mother's Name"/><br><br>

                Gender<br/>
                <input type="radio" name="gender" id="male" value="Male"><font style="color:black; font-size:17px; margin: 5px;"><label for="male"> Male</label></font>
                <input type="radio" name="gender" id="female" value="Female"><font style="color:black; font-size:17px; margin: 5px;"><label for="female"> Female</label></font><br><br>

                <label for="dob">Date Of Birth:</label> <br>
                <input type="date" class="inputBox" id="dob" name="dob" /><br><br>

                Country:<br>
                <select name="country" id="" class="inputBox">
                    <option value="">Choose Your Country</option>
                    <option value="INDIA" selected>INDIA</option>
                    <option value="CHIN" >CHIN</option>
                    <option value="NEPAL" >NEPAL</option>
                    <option value="US">US</option>
                    <option value="RASIA">RASIA</option>
                    <option value="FRANCE">FRANCE</option>
                    <option value="BANGLADESH">BANGLADESH</option>
                    <option value="OTHER">OTHER</option>
                </select><br><br>

                <label for="fulladdress">Enter Your Complete Address: </label><br>
                <textarea name="fulladd" id="fulladdress" cols="45" rows="3"></textarea><br><br>
                
                <input type="text" class="inputBox" name="city" placeholder="Your City"/><br><br>

                <input type="text" class="inputBox" name="state" placeholder="State/Province"/><br><br>

                <input type="text" class="inputBox" name="pincode" placeholder="Postal/Zip Code" maxlength="6"/><br><br>

                Previous Degree Earned<br/>
                <input type="radio" name="degreEarned" id="12th" value="12th"><font style="color:black; font-size:17px; margin: 5px;"><label for="12th"> Intermediate (12th)</label></font>
                <input type="radio" name="degreEarned" id="polytechnic" value="Polytechnic"><font style="color:black; font-size:17px; margin: 5px;"><label for="polytechnic">Polytechnic</label></font>
                <input type="radio" name="degreEarned" id="iti" value="I.T.I"><font style="color:black; font-size:17px; margin: 5px;"> <label for="iti"> I.T.I</label></font><br><br>

                <label for="yfrom">Year From:</label><br>
                <input type="date" class="inputBox" id="yfrom" name="yearFrom" /><br><br>
                <label for="yto">Year To:</label><br>
                <input type="date" class="inputBox" id="yto" name="yearTo" /><br><br>

                Your Admission is Going On<sup style="color:red;">*</sup><br/>
                <input type="radio" name="admition" id="Bacholar" value="Bacholar Degree"><font style="color:black; font-size:17px; margin: 5px;"> <label for="Bacholar">Bacholar</label></font>
                <input type="radio" name="admition" id="Master" value="Master Degree"><font style="color:black; font-size:17px; margin: 5px;"> <label for="Master">Master</label></font> <br><br>

                Choose Your Courses: <br>
                <select name="course" id="" class="inputBox">
                    <option value="defalt" selected>Choose Your Courses</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="B.A">B.A</option>
                    <option value="B.Com">B.Com</option>
                    <option value="B.C.A">B.C.A</option>
                    <option value="B.Scit">B.Scit</option>
                    <option value="M.Com">M.Com</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="M.A">M.A</option>
                    <option value="M.Ed">M.Ed</option>
                    <option value="OTHER">OTHER</option>
                </select><br><br>

                <label for="email">Your E-mail Id:</label> <br>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" class="inputBox"><br><br>

                <label for="mob">Your Contact No.:</label> <br>
                <input type="text" name="mob" id="mob" placeholder="Enter Your Contact No." class="inputBox" maxlength="12"><br><br>

                <input type="submit" value="Submit Form" class="submitbtn">
            </form><br><hr><br>
        </div>
    </div>
    <?php
        $aadhar= $_POST['aadhar'];
        echo "Your Aadhar No.: $aadhar";
        echo "<br>";

        $uname= $_POST['uname'];
        echo "Your Full Name: $uname";
        echo "<br>";

        $fname= $_POST['fname'];
        echo "Your Father's Name: $fname";
        echo "<br>";

        $mname= $_POST['mname'];
        echo "Your Mother's Name: $mname";
        echo "<br>";

        $gender= $_POST['gender'];
        echo "Your Gender: $gender";
        echo "<br>";

        $dob= $_POST['dob'];
        echo "Your DOB: $dob";
        echo "<br>";

        $country= $_POST['country'];
        echo "Your Country: $country";
        echo "<br>";

        $fulladd= $_POST['fulladd'];
        echo "Your Full Address: $fulladd";
        echo "<br>";

        $city= $_POST['city'];
        echo "City: $city";
        echo "<br>";

        $state= $_POST['state'];
        echo "State: $state";
        echo "<br>";

        $pincode= $_POST['pincode'];
        echo "Pin Code: $pincode";
        echo "<br>";

        $degreEarned= $_POST['degreEarned'];
        echo "Previous Degree Earned: $degreEarned";
        echo "<br>";

        $yearFrom= $_POST['yearFrom'];
        echo "Year From: $yearFrom"; 
        echo "<br>";
        
        $yearTo= $_POST['yearTo'];
        echo "Year To: $yearTo"; 
        echo "<br>";
        
        $admition= $_POST['admition'];
        echo "Your Admission is Going On: $admition";
        echo "<br>";   

        $course= $_POST['course'];
        echo "Your Chosen Course: $course";   
        echo "<br>";

        $email= $_POST['email'];
        echo "E-mail: $email"; 
        echo "<br>";  

        $mob= $_POST['mob'];
        echo "Your Contact No.: $mob";  
        echo "<br>"; 
        echo "<br>"; 
    ?>
</body>
</html>