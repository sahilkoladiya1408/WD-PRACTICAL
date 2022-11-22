<?php


 include 'db_conn.php';


// when form is submit and method is post then do 
if($_SERVER['REQUEST_METHOD']=='POST'){

   
  
    //grab the value in input
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mno=$_POST["mno"];
    $address=$_POST["address"];
    
    //sql query to execute (add the values in database)
    $sql="INSERT INTO `users` (`sno`, `name`, `email`, `mno`, `address`) VALUES (NULL, '$name', '$email', '$mno', '$address');";
    $result= mysqli_query($conn,$sql);
    
    //check data is added or not 
    if($result){
        echo "<script>alert('registration successfull');</script>";
    }else{
        echo "Error: ".mysqli_error($conn);
    }
    
    }





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="main_container">


        <div class="registration_form">
            <h1>Registration Form</h1>
            
            <form action="register.php" method="POST" id="reg_form"  >
                <div class="form_field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form_field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form_field">
                    <label for="mno">Mobile No</label>
                    <input type="mno" name="mno" id="mno" required>
                </div>
                <div class="form_field">
                    <label for="address">Address</label><br>
                    <textarea name="address" id="address" cols="30" rows="10" required></textarea>
                </div>
                <div class="form_field">
                    <input type="submit" class="sub_btn" value="Register Now">
                </div>

            </form>
        </div>
        <div>
            <a href="display.php">see User's Data</a>
        </div>
    </div>



</body>

</html>