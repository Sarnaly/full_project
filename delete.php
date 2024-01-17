<?php
require("admin_dbcon.php");
session_start();
if(!isset($_SESSION['user_login'])){
    header("location:login.php");
}
$user_id=base64_decode($_GET['u_del_id']);
$delete_data = mysqli_query($admin_dbcon , "DELETE FROM `student_admission` WHERE `id`='$user_id'");
if($delete_data){
    header('location:admin_index.php?page=admin_dashboard');
}
?>

