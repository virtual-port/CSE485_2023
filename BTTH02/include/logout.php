<?php
    session_start();
    if(isset($_SESSION['isLoginAdmin'])){
        unset($_SESSION['isLoginAdmin']);
        header("Location:../index.php");
    }
?>