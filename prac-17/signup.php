<?php
$shalert=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    require'part/db_con.php' ;

    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];


// $exists=false;


//check whether username exist or note 
$exitsql="SELECT * FROM `users` WHERE username='$username'";
$result=mysqli_query($conn,$exitsql);
$numExistRows=mysqli_num_rows($result);

if($numExistRows>0){
    // $exists=true;
    $showerror=" Username Alredy Exist";
    
}else{
    // $exists=false;

    if($password==$cpassword){
$hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO `users` ( `username`, `password`, `date`) VALUES ( '$username', '$hash', current_timestamp())";

    $result=mysqli_query($conn,$sql);

    if($result){
        $shalert=true;
    }else{
        $showerror="password do not match ";
    }
                            }
    }


}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIGN UP</title>
  </head>
  <body>


    <?php require'part/_nav.php' ?>
    <?php 

    if($shalert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>YOUR ACCOUNT IS CREATED</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($showerror){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'.$showerror.'</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
    ?>
    


<div class="container my-4 p-4 col-md-6 border rounded">
    <h1 class="text-center">Sign Up</h1>
    <form action="/prac-17/signup.php" method="POST">
  <div class="mb-3 ">
    <label for="uname" class="form-label">Username</label>
    <input type="text" class="form-control" id="uname" name="username" >
    
  </div>
  <div class="mb-3 ">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 ">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>