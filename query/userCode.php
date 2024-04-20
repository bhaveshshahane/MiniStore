<?php
$con = mysqli_connect("localhost", "root", "bhavesh2525", "ministore");

if (isset($_REQUEST['add'])) {
    echo "<script>window.location.href='userForm.php'</script>";
}

if (isset($_REQUEST['delete'])) {
    $id = $_POST['delete'];
    $dsql = "delete from userTable where userId='" . $id . "'";
    $dresult = mysqli_query($con, $dsql);
    if ($dresult) {
        echo "<script>alert('delete done')</script>";
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}

if (isset($_REQUEST['insert'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isql = "insert into userTable(userName,userEmail,userPassword) values('" . $username . "','" . $email . "','" . $password . "')";
    $rv = mysqli_query($con, $isql);
    if ($rv) {
        echo "<script>alert('Add New User done')</script>";
        header("location:adminDashboard.php");
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}

if (isset($_REQUEST["edit"])) {
    $id = $_POST['edit'];
    $esql = "select * from userTable where userId='" . $id . "'";
    $eresult = mysqli_query($con, $esql);
}

if(isset($_REQUEST['update'])){
    $id =$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usql="update userTable set userName='".$name."',userEmail='".$email."',userPassword='".$password."' where userId='".$id."'";
    $uresult = mysqli_query($con,$usql);
    if ($uresult) {
        echo "<script>alert('update User done')</script>";
        header("location:adminDashboard.php");
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }
}
?>