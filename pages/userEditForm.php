<?php
include "query/userCode.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
       <center> <h1 class="text-primary">Update User Form</h1></center>
    <form method="post">
    <?php while($row= mysqli_fetch_assoc($eresult)){?>
    <div class="mb-3 mt-3">
        <input type="hidden" name="id" value="<?= $row["userId"]?>"/>
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $row["userName"]?>">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $row["userEmail"]?>">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?= $row["userPassword"]?>">
  </div>
  <?php } ?>
  <button type="submit" class="btn btn-outline-primary" name="update">Submit</button>
</form>
    </div>
</body>
</html>