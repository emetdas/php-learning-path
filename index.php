<?php

session_start();
if (isset($_SESSION['login']) == 'true') {
    echo "WellCome ".$_SESSION['name'];
}
else{
    header("Location:login.php");
}
?>