<?php
require("admin_dbcon.php");
session_start();
$course_id=base64_decode($_GET['course_id']);
$delete_data = mysqli_query($admin_dbcon , "DELETE FROM `course` WHERE `id`='$course_id'");
if($delete_data){
    header('location:admin_index.php?page=course');
}
?>