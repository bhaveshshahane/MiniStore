<?php
 $con = mysqli_connect("localhost", "root", "bhavesh2525", "ministore");
$sql="select saleId,userEmail,proName,proPrice from sales";
$result=mysqli_query($con,$sql);
?>

<div class="table-responsive">
    <form method="post">
</form>
    <table class="table table-hover">

        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row= mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?= $row["saleId"]?></td>
                <td><?= $row["userEmail"]?></td> 
                <td><?= $row["proName"]?></td>
                <td><?= $row["proPrice"]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>