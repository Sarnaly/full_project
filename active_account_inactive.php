<?php
	require_once 'admin_dbcon.php';
	session_start();
    $status=base64_decode($_GET['status']);
    $update_inactive = mysqli_query($admin_dbcon , "UPDATE `student_admission` SET `status`='Inactive' WHERE `id`='$status'");
    if($update_inactive){
        header('location:admin_index.php?page=active_account');
    }
?>