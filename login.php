<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === "emet@limedevs.com" || $password === "limeAdmin"){
        session_start();
         $_SESSION['login'] = "true";
         $_SESSION['name'] = "Admin";
       header('Location:index.php');
    }
    else {
        header('Location:login.php');
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="email" name="email" id="email">
    <input type="password" name="password">
    <input type="submit" value="Submit" name="submit">
</form>







