<?php
 $con = mysqli_connect("localhost", "root", "bhavesh2525", "ministore");
if (isset($_REQUEST['delete'])) {
    $id = $_POST['delete'];
    $dsql = "delete from product where proId='" . $id . "'";
    $dresult = mysqli_query($con, $dsql);
    if ($dresult) {
        echo "<script>alert('delete done')</script>";
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}
if (isset($_REQUEST['add'])) {
    echo "<script>window.location.href='proForm.php'</script>";
}

if (isset($_REQUEST['insert'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $type = $_POST['type'];

    $isql = "insert into product(proName,proPrice,proImg,proType) values('" . $name . "','" . $price . "','" . $img . "','".$type."')";
    $rv = mysqli_query($con, $isql);
    if ($rv) {
        echo "<script>alert('Add New Product done')</script>";
        header("location:adminDashboard.php");
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}

if (isset($_REQUEST["edit"])) {
    $id = $_POST['edit'];
    $esql = "select * from product where proId='" . $id . "'";
    $eresult = mysqli_query($con, $esql);
}

if(isset($_REQUEST['update'])){
    $id =$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $type = $_POST['type'];
    $usql="update product set proName='".$name."',proPrice='".$price."',proImg='".$img."',proType='".$type."' where proId='".$id."'";
    $uresult = mysqli_query($con,$usql);
    if ($uresult) {
        echo "<script>alert('update Product done')</script>";
        header("location:adminDashboard.php");
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}
?>