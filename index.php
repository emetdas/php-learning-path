<?php

session_start();
if (isset($_SESSION['login']) == 'true') {
    echo "Well Come ".$_SESSION['name'];
}
else{
    header("Location:login.php");
}
?>