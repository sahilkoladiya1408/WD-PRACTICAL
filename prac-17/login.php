<?php
$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    require 'part/db_con.php' ;

    $username=$_POST['username'];
    $password=$_POST['password'];
  

    $sql="SELECT * FROM users where username='$username'";
    $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
    if($num==1){
      while($row=mysqli_fetch_assoc($result)){
if($row['password']){


        $login=true;

         // starting login session 
         session_start();
         $_SESSION['loggedin']=true;
         $_SESSION['username']=$username;
 
       // redirect the user to welcome.php
       header("location:welcome.php"); 
      }else{
        $showerror="Invalid login credential";
    }
       
  }

    }else{
        $showerror="Invalid login credential";
    }



}




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOGIN</title>
</head>

<body>
    <?php require'part/_nav.php' ?>
    <?php 

    if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>YOU ARE LOGGED IN</strong> 
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



    <div class="container my-4 p-4 rounded border col-md-6">
        <h1 class="text-center">Log In </h1>
        <form action="/prac-17/login.php" method="POST">
            <div class=" mx-auto ">
                <label for="uname" class="form-label">Username</label>
                <input type="text" class="form-control" id="uname" name="username">

            </div>
            <div class="mx-auto mb-3 ">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mx-auto mb-3 ">
               
              <button type="submit" class="btn btn-primary ">Log In</button>
            </div>


        </form>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>