<?php
include "query/userCode.php";
$sql="select userId,userName,userEmail,userPassword from userTable";
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
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row= mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?= $row["userId"]?></td>
                <td><?= $row["userName"]?></td> 
                <td><?= $row["userEmail"]?></td>
                <td><?= $row["userPassword"]?></td>
                <td><form action="adminDashboard.php" method="post"><button class="btn btn-outline-danger" name="delete" value="<?= $row["userId"]?>">Delete</button></form><form action="userEditForm.php" method="post"><button class="btn btn-outline-warning" name="edit" value="<?= $row["userId"]?>">Edit</button></form></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>