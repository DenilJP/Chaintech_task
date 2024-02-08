<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    if(isset($_POST['register']))
    {
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $gender =$_POST['gender'];
        $password =$_POST['password'];
        $cpassword =$_POST['cpassword'];
        $address =$_POST['address'];

        if($fname != "" && $lname != "" && $email != "" && $gender != "" &&
         $password != "" && $cpassword != "" && $address != ""){
        
            $result =mysqli_query($conn ,"INSERT INTO register (firstname,lastname,email,gender,password,cpassword,address) values('$fname' , '$lname', '$email', '$gender', 
        '$password', '$cpassword', '$address' )");
        if($result){
            echo "Data Inserted....";
        }
        else{
            echo"fail";
        }
        }
        else{
            echo"<script>alert('Please fill the form')</script>";
        }

        
    }

    
    
    
    ?>
    <div class="main">
        <div class="box">
            <h1 class="head">Registration<span class="web">Form</span></h1>
            <form action="" method="POST">
                <div class="form">
                    <div class="inform">
                        <label for="First Name">First Name</label>
                        <input type="text" name="fname" placeholder="Enter Your Name">    
                    </div>
                    <div class="inform">
                        <label for="Last Name">Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Your LastName">    
                    </div>
                    <div class="inform">
                        <label for="Email">Email</label>
                        <input type="text" name="email" placeholder="Enter Your Email">    
                    </div>
                    <div class="inform">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>    
                    </div>
                    <div class="inform">
                        <label for="Password">Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">    
                    </div>
                    <div class="inform">
                        <label for="Confirm Password">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Your Password">    
                    </div>
                    <div class="txtarea">
                        <label for="Address">Address</label>
                        <textarea row="5" cols="50" name="address" placeholder="Enter Your Address"></textarea>    
                    </div>
                    <div class="button">
                        <a href="" target="blank"><button type="submit" name="register">Register</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>