<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
<?php
// contact for development
include "db.php";
// include in database file
if (isset($_POST["submit"])) {
   $name =$_POST["name"];
   $email =$_POST["email"];
   $number =$_POST["number"];
   $comment =$_POST["comment"];

   $insert ="INSERT INTO `web` (`name`, `email`, `number`, `comment`) VALUES ('$name', '$email', '$name', '$comment')";
// database and table connect
$result = mysqli_query($connection,$insert);
if (!$result) {
    $error = "Your Data has not insert";
}
else {
    $successully = "your data hasbeen insuet successfully";
}
}
?>
    <form action="index.php" method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="number" name="number" placeholder="Number">
        </div>
        <div class="form-group">
            <textarea name="comment" placeholder="comment"></textarea>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
