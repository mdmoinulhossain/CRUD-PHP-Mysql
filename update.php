<?php

include 'config.php';

if(isset($_POST['done'])){


    $id = $_GET['userId'];
  $em = $_POST['email'];
  $pw = $_POST['password'];

  $update = "UPDATE `userlist` SET `id`='$id',`email`='$em',`password`='$pw' WHERE `id`='$id'";

  $updateQuery = mysqli_query($connect_db, $update);

  header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<form class="container my-5" method="POST">
    <p>Update Data</p>
    <?php
    $id = $_GET['userId'];
    $display = "SELECT * FROM `userlist` WHERE id = '$id' ";
    $displayQuery = mysqli_query($connect_db, $display);
    $record = mysqli_fetch_array($displayQuery);
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $record["email"]; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $record["password"]; ?>">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="done">Submit</button>
</form>
<div class="container">
<button type="button" class="btn btn-outline-info"><a href="index.php"> View List?</a></button>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>