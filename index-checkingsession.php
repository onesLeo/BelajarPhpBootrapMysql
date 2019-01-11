<?php
session_start();

if(empty($_SESSION["user_login"]))
    header("location: index.php");
?>