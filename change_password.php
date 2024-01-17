<?php  
$username  =  $_SESSION['User_name'] ;
$username_data_select = mysqli_query($admin_dbcon , "SELECT * FROM `student_table` WHERE `username`='$username'");
$username_data_fetch = mysqli_fetch_assoc($username_data_select);
if(isset($_POST['change_pass'])){
  
	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	$input_error = array();

	if(empty($old_password)){
		$input_error['old_password'] = 'Old password is required ! ';
	}
	if(empty($new_password)){
		$input_error['new_password'] = 'new password is required ! ';
	}
	if(empty($confirm_password)){
		$input_error['confirm_password'] = 'confirm password is required ! ';
	}

	if(count($input_error) == 0){
		$md5old_password = md5($old_password);
        if($md5old_password == $username_data_fetch['password']){
          if($new_password == $confirm_password){
			$md5new_password = md5($new_password);
              $password_update = mysqli_query( $admin_dbcon , "UPDATE `student_table` SET `password`='$md5new_password' WHERE `username`='$username'");
			  if($password_update){
				echo '
				<script> alert("Successfully update your password "); </script>
				';
			  }else{
				echo '
				<script> alert("Unsuccessfully update your password "); </script>
				';
			  }
		  }else{
			$input_error['confirm_password'] = 'confirm password is not match ! ';
		  }
		}else{
			$input_error['old_password'] = 'Old password is wrong ! ';
		}
	}

}
?>
						<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-gear px-2" style="font-size:35px"></i>Change Password<small> Statistics Overview</small></h1>
						<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
						<ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a></li>
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="" class="text-decoration-none"><i class="fa-solid fa-gear px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Change Password</a></li>
						</ol>
						</nav>
<form action="" method="post">

			<div class="col-sm-12">
			<div class="row">
				<!-- stat -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				<label for="old_password" class="form-label">Old Password<small style="color:#65BDB6">*</small></label>
					<input type="password" class="form-control" name="old_password" value="<?php if(isset($old_password)){echo $old_password;}?>">
				<label class="text-danger"><?php if(isset($input_error['old_password'])){
							 echo $input_error['old_password'];}?></label>						
				</div>
				</div>
                <!-- end -->
			</div>
			</div>
            <div class="col-sm-12">
			<div class="row">
				<!-- stat -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				<label for="new_password" class="form-label">New Password<small style="color:#65BDB6">*</small></label>
					<input type="password" class="form-control" name="new_password" value="<?php if(isset($new_password)){echo $new_password;}?>">
				<label class="text-danger"><?php if(isset($input_error['new_password'])){
							 echo $input_error['new_password'];}?></label>						
				</div>
				</div>
                <!-- end -->
			</div>
			</div>
            <div class="col-sm-12">
			<div class="row">
				<!-- stat -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				<label for="confirm_password" class="form-label">Confirm Password<small style="color:#65BDB6">*</small></label>
					<input type="password" class="form-control" name="confirm_password" value="<?php if(isset($confirm_password)){echo $confirm_password;}?>">
				<label class="text-danger"><?php if(isset($input_error['confirm_password'])){
							 echo $input_error['confirm_password'];}?></label>						
				</div>
				</div>
                <!-- end -->
			</div>
			</div>

        
            <br>
            <!-- submit btn start -->
			<div class="ad_btn">
				<input type="submit" value="Change Password" class="submit_btn" name="change_pass" style="padding: 8px 20px; background-color:rgb(133, 191, 240); border: none; color: white; border-radius: 10px;">
			</div>
            <!-- submit btn end -->

            </form>


			