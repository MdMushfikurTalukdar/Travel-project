<?php
session_start();
unset($_SESSION['authuser_name']);
header('location:loginuser.php');
?>