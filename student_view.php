<?php 
require("admin_dbcon.php");
session_start();
if(!isset($_SESSION['User_name'])){
    header("location:../login form/login.php");
}
?>