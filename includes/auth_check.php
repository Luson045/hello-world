<?php
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }else{
        $uid=$_SESSION['user_id'];
    }
?>