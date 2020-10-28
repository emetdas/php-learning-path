<?php
// databse connection
$servername = "localhost";
$username = "root";
$password ="";
$db = "emet";

$connection = mysqli_connect($servername,$username,$password,$db);
if (!$connection) {
    die ("try aggine".mysqli_connect_error());
}
// insert query
// ;
?>