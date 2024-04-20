<?php
include "query/productCode.php";
$sql="select proId,proName,proPrice,proImg,proType from product";
$result=mysqli_query($con,$sql);
?>

<div class="table-responsive">
    <form method="post">
<button class="btn btn-outline-info" name="add">Add New</button>

</form>
    <table class="table table-hover">

        <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Price</th>
                <th>Product Image</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row= mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?= $row["proId"]?></td>
                <td><?= $row["proName"]?></td>
                <td><?= $row["proPrice"]?></td>
                <td><?= $row["proImg"]?></td>
                <td><?= $row["proType"]?></td>
                <td><form action="adminDashboard.php" method="post"><button class="btn btn-outline-danger" name="delete" value="<?= $row["proId"]?>">Delete</button></form><form action="proEditForm.php" method="post"><button class="btn btn-outline-warning" name="edit" value="<?= $row["proId"]?>">Edit</button></form></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>