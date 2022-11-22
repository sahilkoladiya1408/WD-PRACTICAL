
<?php include 'db_conn.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>


<link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="wrapper_container">
    <a href="register.php" class="back_link">Back to Registration Form</a>
        <h1>All User's Data</h1>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Sr</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile No</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
                     <?php
                    $sql= "SELECT * FROM `users`";
                    $result=mysqli_query($conn,$sql);
                    $sr=1;
                    while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                    <td scope='row'>".$sr."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['mno']."</td>
                    <td>".$row['address']."</td>
                    </tr>";
                    $sr++;
                    }
                    ?>

      </tbody>
    </table>
   
    </div>
</body>
</html>