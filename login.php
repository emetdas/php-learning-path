<?php
$server = "localhost";
$username = "root";
$dbpassword = "";
$dbname ="db";
$con = mysqli_connect($server,$username,$password,$dbname);
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if($email === "emet@limedevs.com" || $password === "limeAdmin"){
            header('location:index.php');
    }
    else {
        header('location:login.php');
    }
}
?>








