<?php
	require_once 'admin_dbcon.php';
	session_start();
    $status=base64_decode($_GET['status']);
    $status_data_select = mysqli_query($admin_dbcon , "SELECT * FROM `student_admission` WHERE `id`='$status'");
    $status_data_fatch = mysqli_fetch_assoc($status_data_select);
    if($status_data_fatch['status'] == 'Inactive'){
        $update_active = mysqli_query($admin_dbcon , "UPDATE `student_admission` SET `status`='Active' WHERE `id`='$status'");
        if($update_active){
            header('location:admin_index.php?page=all_student_account_list');
        }
    }else{
        $update_inactive = mysqli_query($admin_dbcon , "UPDATE `student_admission` SET `status`='Inactive' WHERE `id`='$status'");
        if($update_inactive){
            header('location:admin_index.php?page=all_student_account_list');
        }
    }

?>
