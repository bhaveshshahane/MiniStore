<?php
$con = mysqli_connect("localhost", "root", "bhavesh2525", "ministore");
session_start();
if (isset($_REQUEST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select userId from userTable where userEmail='" . $email . "' and userPassword='" . $password . "' and isAdmin=1;";
    $result = mysqli_query($con, $sql);
    $final = mysqli_fetch_array($result);
    if ($final > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["type"] = "admin";
        // echo "<script>alert('".$_SESSION["type"]."')</script>";
        header("location:adminDashboard.php");
    } else {

        $loginq = "select userId from userTable where userEmail='" . $email . "' and userPassword='" . $password . "';";
        $loginr = mysqli_query($con, $loginq);
        $row = mysqli_fetch_array($loginr);

        if ($row > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["type"] = "user";
            // echo "<script>alert('".$_SESSION["type"]."')</script>";

            header("location:dashboard.php");
        } else {
            echo ("<script>alert('email or password is invalid!')</>");
        }
    }
}


if (isset($_REQUEST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $isql = "insert into userTable(userName,userEmail,userPassword) values('" . $username . "','" . $email . "','" . $password . "')";
        $rv = mysqli_query($con, $isql);
        if ($rv) {
            header("location:index.php");
        }
    } else {
        echo ("<script>alert('details is invalid!')</script>");
    }

}

if (isset($_REQUEST["Logout"])) {
    session_destroy();
    header("location:index.php");
}

if (isset($_REQUEST['buy'])) {
    $id = $_POST['buy'];
    $psql = "select * from product where proId='" . $id . "'";
    $presult = mysqli_query($con, $psql);

}

if (isset($_REQUEST["pay"])) {
    $mail = $_POST["email"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $psql = "insert into sales(userEmail,proName,proPrice) values('" . $mail . "','" . $name . "','" . $price . "')";
    $addp = mysqli_query($con, $psql);
    if ($addp) {
        header("location:dashboard.php");
    } else {
        echo "<script>alert('some proble in process!')</script>";
    }

}

?>