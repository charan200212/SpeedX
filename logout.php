<?php
session_start();

//session_unset();
unset($_SESSION['id']);
unset($_SESSION['pass']);
header('location:login.php');
?>