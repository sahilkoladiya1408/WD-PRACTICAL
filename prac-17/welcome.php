<?php 

session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
  header("location:login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WELCOME -<?php echo  $_SESSION['username'] ?></title>
</head>

<body>
    <?php require'part/_nav.php' ?>
    <div class="container mx-auto mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">WELCOME -<?php echo  $_SESSION['username'] ?></h4>
            <p>hey how are you you are logged in as <?php echo  $_SESSION['username'] ?>.</p>
            <hr>
            <p class="mb-0">Whenever you need to logout use this  <a href="logout.php">link</a></p>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>