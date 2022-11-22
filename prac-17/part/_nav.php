
<?php

if(isset( $_SESSION['loggedin']) &&  $_SESSION['loggedin']==true){
  $loggedin=true;
}else{
  $loggedin=false;
}
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/prac-17/welcome.php">User Authentication</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/prac-17/welcome.php">Home</a>
        </li>';
if(!$loggedin){


        echo '
        <li class="nav-item">
          <a class="nav-link" href="/prac-17/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prac-17/signup.php">Sign UP</a>
        </li>';
}
if($loggedin){


        echo '
        <li class="nav-item">
          <a class="nav-link" href="/prac-17/logout.php">Log OUT</a>
        </li>';

}
       echo'
      </ul>
      
    </div>
  </div>
</nav>';

?>