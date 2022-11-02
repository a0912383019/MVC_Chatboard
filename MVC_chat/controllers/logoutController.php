<?php
session_start();

if (isset($_SESSION['nickname'])) {
    unset($_SESSION['nickname']);
    header("location:../views/login.php");
}
