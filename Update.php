<?php
session_start();
if(!isset($_SESSION['user_login'])){
    
}
require("admin_dbcon.php");
if(isset($_POST['update'])){
    $user_id=$_POST['u_id'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];

    $update_query=mysqli_query($admin_dbcon,"UPDATE `student_admission` SET `username`='$username',`email`='$email',`mobile`='$mobile' WHERE `id`='$user_id'");
    if($update_query){
        echo '
        <script>
        alert("Successfully Updated data");
        window.location.href="admin_index.php?page=admin_dashboard";
        </script>
        ';
        $email=false;
        $mobile=false;
        $username=false;
    }
}



?>