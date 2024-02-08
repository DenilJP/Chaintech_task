<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    if(isset($_POST['update']))
    {
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $gender =$_POST['gender'];
        $password =$_POST['password'];
        $cpassword =$_POST['cpassword'];
        $address =$_POST['address'];
        $id=$_GET["id"];

        if($fname != "" && $lname != "" && $email != "" && $gender != "" &&
         $password != "" && $cpassword != "" && $address != ""){
        
            $result =mysqli_query($conn ,"UPDATE register set firstname='$fname',lastname= '$lname',email='$email',gender='$gender',
            password='$password',cpassword='$cpassword',address='$address' where id='$id'");
        if($result){
            echo "Data Inserted....";
            echo "<script>window.location='display.php'</script>";
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
    
    <?php
                                                
        if($_GET["id"]);
        $id=$_GET["id"];
        echo $id;
                                                
        $result=mysqli_query($conn , "select * from register 
        where id='$id' ") or die(mysqli_error($conn));

        while($row = mysqli_fetch_assoc($result))
        {

            ?>
    <div class="main">
        <div class="box">
            <h1 class="head">UPDATE<span class="web">DATA</span></h1>
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
                        <button type="submit" name="update">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>