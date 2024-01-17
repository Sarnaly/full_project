<?php 
require("../admin/admin_dbcon.php");
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $input_error = array();
    if(empty($username)){
        $input_error['username']= 'error';
    }
    if(empty($password)){
        $input_error['password']= 'error';
    }
    if(count($input_error) == 0){
        $username_match = mysqli_query($admin_dbcon , "SELECT * FROM `student_table` WHERE `username`='$username'");
        if(mysqli_num_rows($username_match) > 0){
            $username_row_data = mysqli_fetch_assoc($username_match);
            if($username_row_data['password'] == md5($password)){
              if($username_row_data['status'] == "Active"){
                $_SESSION['User_name'] = $username;
                header("location:../admin/admin_index.php");
              }else{
                echo '
                <script> alert("Your Accoutn Inactive ! ! !"); </script>
                ';
              }
            }else{
                echo '
                <script> alert("Wrong Password ! ! !"); </script>
                ';
            }
        }else{
            echo '
            <script> alert("Your Data Cannot found ! ! !"); </script>
            ';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="content">
<form action="" method="POST">
	
		
	<div class="form login" id="login">
                <span class="title">Login</span>
                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" name="username" id="<?php if(isset($input_error['username'])){echo $input_error['username'];}?>" placeholder="Enter your username" >
                        <i class="uil uil-envelope icon" id="<?php if(isset($input_error['username'])){echo $input_error['username'];}?>"></i>
                        <span style="color: red;"></span>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>" name="password" placeholder="Enter your password" >
                        <i class="uil uil-lock icon" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>"></i>
                        <i class="uil uil-eye-slash showHidePw" id="<?php if(isset($input_error['password'])){echo $input_error['password'];}?>"></i>
                        <span style="color: red;"></span>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="../admin/forgot_password/index.php" class="text">Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>
			
			<div class="left">
			  <img src="image/Fingerprint-pana.png" style="width:500px; margin-top:40px; margin-left:30px;" alt="" />
		
		
		
	</div>
</div>
            <script src="js/script.js"></script>
</body>
</html>