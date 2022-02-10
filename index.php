<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <p>User List</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username/Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
include 'config.php';

$display = "SELECT * FROM `userlist`";

$displayQuery = mysqli_query($connect_db, $display);

while($record = mysqli_fetch_array($displayQuery)){


?>
    <tr>
      <th scope="row"><?php echo $record['id']; ?></th>
      <td><?php echo $record['email']; ?></td>
      <td><?php echo $record['password']; ?></td>
      <td><button type="button" class="btn btn-outline-success"><a href="update.php?userId=<?php echo $record['id']; ?>">Edit</a></button>
<button type="button" class="btn btn-outline-danger"><a href="delete.php?userId=<?php echo $record['id']; ?>">Delete</a></button></td>
    </tr>
    <?php } ?>
   
  </tbody>
</table>
<button type="button" class="btn btn-outline-primary"><a href="insert.php">Insert User? </a></button>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>