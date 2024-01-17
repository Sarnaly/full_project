<?php
	require_once 'admin_dbcon.php';
	session_start();
    $status=base64_decode($_GET['status']);
    $update_active = mysqli_query($admin_dbcon , "UPDATE `student_admission` SET `status`='Active' WHERE `id`='$status'");
    if($update_active){
        header('location:admin_index.php?page=inactive_account');
    }

?>