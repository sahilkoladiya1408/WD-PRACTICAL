<?php

//connnection to the database 
$servername="localhost";
$username="root";
$password="";
$database="users";

$conn = mysqli_connect($servername,$username,$password,$database);


//die if connection was not successfull
if(!$conn){
  die("sorry failed to connect".mysqli_connect_error());
}

?>