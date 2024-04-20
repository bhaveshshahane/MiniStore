<?php
include "query/productCode.php";

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
       <center> <h1 class="text-primary">Update Product Form</h1></center>
    <form method="post">
    <?php while($row= mysqli_fetch_assoc($eresult)){?>
<input type="hidden" id="id" name="id" value="<?= $row["proId"]?>">
    <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $row["proName"]?>">
  </div>
  <div class="mb-3 mt-3">
    <label for="price" class="form-label">Price:</label>
    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="<?= $row["proPrice"]?>">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Image-Url:</label>
    <input type="url" class="form-control" id="img" placeholder="Enter image url" name="img" value="<?= $row["proImg"]?>">
  </div>
  <div class="mb-3">
  <label for="type" class="form-label">Product Type:</label>
  <select class="form-select" id="type" name="type">
  <option>Mobile</option>
  <option>Watch</option>
  
</select>
</div>
<?php } ?>

  <button type="submit" class="btn btn-outline-primary" name="update">Submit</button>
</form>
    </div>
</body>
</html>