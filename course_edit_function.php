<?php
	require_once 'admin_dbcon.php';
	session_start();
    $course_id=base64_decode($_GET['course_id']);
    if($course_id){
        $_SESSION['course_id']=$course_id;
        header('location:admin_index.php?page=edit_course');
    }
?>

