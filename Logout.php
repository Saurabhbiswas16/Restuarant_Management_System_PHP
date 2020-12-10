<?php
    session_start();
    $_SESSION['login']=false;
    header("Location:Admin_login.php");
?>