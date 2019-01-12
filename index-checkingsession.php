<?php
session_start();

if(empty($_SESSION["user_login"])){
    $invalidSession = "Please login before access the homepage";
    header("location: index.php");// redirect to login page
}
?>