<?php
include "query/loginReg.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</title>
</head>
<body>
    
<div class="container">
       <center> <h1 class="text-primary">Update Product Form</h1></center>
    <form method="post">
    
    <?php while($row= mysqli_fetch_assoc($presult)){?>
        <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $_SESSION["email"] ?>">
  </div>
    <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $row["proName"]?>">
  </div>
  <div class="mb-3 mt-3">
    <label for="price" class="form-label">Price:</label>
    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="<?= $row["proPrice"]?>">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Card Number:</label>
    <input type="number" class="form-control" id="img" placeholder="Enter  Card Number" name="img" />
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">CVV:</label>
    <input type="number" class="form-control" id="img" placeholder="Enter CVV" name="img" />
  </div>
<?php } ?>

  <button type="submit" class="btn btn-outline-primary" name="pay">Pay</button>
</form>
    </div>
</body>
</html>


