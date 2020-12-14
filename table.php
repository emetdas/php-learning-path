<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "todo";
$id = 1;
$name ="Developer Emet Das";
$email = "emetdas552@gmail.com";
$insert = "INSERT INTO mycode(id,name,email) VALUES ('$id','$name','$email')";
$connection = mysqli_connect($servername,$username,$password,$db);
$query = mysqli_query($connection,$insert) or die("not isert data into the database");
if($query){
    echo "Your Data insert successfully!";
}

// insert
?>