<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-user-plus px-2" style="font-size:35px"></i>Admission Form<small> Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a><span style="color: rgb(133, 191, 240); font-size: 18px;">  / </span><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admission_form" class="text-decoration-none"><i class="fa-solid fa-user-plus px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Admission form</a></li>
    
  </ol>
</nav>
<?php 
require("admin_dbcon.php");
if(isset($_POST["submit"])){
	$student_name = $_POST['student_name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$dob = $_POST['dob'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$job_title = $_POST['job_title'];
	$blood_group = $_POST['blood_group'];
	$nid_birth_certificate = $_POST['nid_birth_certificate'];
	$course_type = $_POST['course_type'];
	$phone_number = $_POST['phone_number'];
	$guardian_number = $_POST['guardian_number'];
	$email = $_POST['email'];
	$divisions = $_POST['divisions'];
	$distr = $_POST['distr'];
	$thana = $_POST['thana'];
	$post_office = $_POST['post_office'];
	$village = $_POST['village'];
	$session = $_POST['session'];
	$course = $_POST['course'];
	$registration_type = $_POST['registration_type'];
	$total_fee = $_POST['total_fee'];
date_default_timezone_set("Asia/Dhaka");
$admission_time=date('m-d-Y,h:i:s a');

$input_error = array();
if(empty($student_name)){
	$input_error['student_name']='* student name is required';
}
if(empty($father_name)){
	$input_error['father_name']='* father name is reqired';
}
if(empty($mother_name)){
	$input_error['mother_name']='* mother name is reqired';
}
if(empty($dob)){
	$input_error['dob']='* date  of birth is reqired';
}
if(empty($religion)){
	$input_error['religion']='* religion is reqired';
}
if(empty($gender)){
	$input_error['gender']='* gender is reqired';
}
if(empty($job_title)){
	$input_error['job_title']='* job title is reqired';
}
if(empty($nid_birth_certificate)){
	$input_error['nid_birth_certificate']='*nid / birth certificate number is reqired';
}
if(empty($blood_group)){
	$input_error['blood_group']='blook group  is reqired';
}
if(empty($course_type)){
	$input_error['course_type']='course type is reqired';
}
if(empty($guardian_number)){
	$input_error['guardian_number']='guardian number is reqired';
}
if(empty($phone_number)){
	$input_error['phone_number']='phone number is reqired';
}

if(empty($email)){
	$input_error['email']='email is reqired';
}



if(empty($post_office)){
	$input_error['post_office']='post office is reqired';
}
if(empty($village)){
	$input_error['village']='village is reqired';
}
if(empty($session)){
	$input_error['session']='session is reqired';
}
if(empty($course)){
	$input_error['course']='course is reqired';
}
if(empty($registration_type)){
	$input_error['registration_type']='registration type is reqired';
}

if(empty($total_fee)){
	$input_error['total_fee']='total fee is reqired';
}

if(count($input_error) == 0){
   $submit=mysqli_query($admin_dbcon , "INSERT INTO `student_admission`(`student_name`, `father_name`, `mother_name`, `dob`, `religion`, `gender`, `job_title`, `blood_group`, `nid_birth_certificate`, `course_type`, `phone_number`, `guardian_number`, `email`, `division`, `district`, `thana`, `post_office`, `village`, `session`, `course`, `registration_type`, `total_fee`, `photo`, `admission_time`, `status`) VALUES ('$student_name','$father_name','$mother_name','$dob','$religion','$gender','$job_title','$blood_group','$nid_birth_certificate','$course_type','$phone_number','$guardian_number','$email','$divisions','$distr','$thana','$post_office','$village','$session','$course','$registration_type','$total_fee','avator.png','$admission_time','Active')");
   if($submit){
	echo '
	<script>alert("admission successfully compleate");
	window.location.href="admin_index.php?page=admin_dashboard"; 
	</script>
	';
	
   }else{
	echo '
	<script>alert("admission unsuccessful");</script>
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
    <title>Document</title>
    <link href="admission_form_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin_dashbord_style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.DataTable.min.css" media="all" />
<body>	
	

	<div class="admission_form p-3" id="admission_form">
    <form action="" class="row col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" method="POST" enctype="multipart/form-data">
            <!-- personal information start -->		
			<div class="col-12">
				<div class="col-sm-12"> 
					<h3 class="info_title">Personal Information</h3>
				</div>
                <!-- row start -->
				<div class="row"> 
                    <!-- column start -->
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Student Name<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="student_name" value="<?php if(isset($student_name)){echo $student_name;}?>">
							<label class="text-danger"><?php if(isset($input_error['student_name'])){
							 echo $input_error['student_name'];}?></label>				
						</div>
						<!-- end -->
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Father's Name<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="father_name" value="<?php if(isset($father_name)){echo $father_name;}?>">
							<label class="text-danger"><?php if(isset($input_error['father_name'])){
							 echo $input_error['father_name'];}?></label>					
						</div>
                        <!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Mother's Name<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="mother_name" value="<?php if(isset($mother_name)){echo $mother_name;}?>">
							<label class="text-danger"><?php if(isset($input_error['mother_name'])){
							 echo $input_error['mother_name'];}?></label>					
						</div>
						<!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Date Of Birth<small style="color:#65BDB6">*</small></label>
							<input type="date" class="form-control" name="dob" value="<?php if(isset($dob)){echo $dob;}?>">
							<label class="text-danger"><?php if(isset($input_error['dob'])){
							 echo $input_error['dob'];}?></label>		
						</div>
                        <!-- end -->
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Religion<small style="color:#65BDB6">*</small></label>
							<select name="religion" id="religion" class="form-select" value="<?php if(isset($religion)){echo $religion;}?>">

								<option>Select Religion</option>
								<option value="Islam">Islam</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddh">Buddh</option>
								<option value="Christan">Christan</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['religion'])){
							 echo $input_error['religion'];}?></label>			
						</div>
                        <!-- end -->
					</div>
                    <!-- column end -->
                    <!-- column start -->
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Gender<small style="color:#65BDB6">*</small></label>
							<select name="gender" id="gender" class="form-select" value="<?php if(isset($gender)){echo $gender;}?>">
							    <option >Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Felame</option>
								<option value="Other">Other</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['gender'])){
							 echo $input_error['gender'];}?></label>			
						</div>
                        <!-- end -->
						 <!-- start -->
						<div class="mb-1">
							<label class="form-label">Job Title<small style="color:#65BDB6">*</small></label>
							<select name="job_title" id="job_title" class="form-select" value="<?php if(isset($job_title)){echo $job_title;}?>">
								<option value="student">Student</option>
								<option value="Government Empolyee">Government Empolyee</option>
								<option value="Private Empolyee">Private Empolyee</option>
								<option value="Other">Other</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['job_title'])){
							 echo $input_error['job_title'];}?></label>			
						</div>
                        <!-- end -->
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Blood Group<small style="color:#65BDB6">*</small></label>
							<select name="blood_group" id="blood_group" class="form-select" value="<?php if(isset($blood_group)){echo $blood_group;}?>">

								<option value="Null">Unknown</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['blood_group'])){
							 echo $input_error['blood_group'];}?></label>			
						</div>
                        <!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Nid/Birth Certificate<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="nid_birth_certificate" value="<?php if(isset($nid_birth_certificate)){echo $nid_birth_certificate;}?>">
							<label class="text-danger"><?php if(isset($input_error['nid_birth_certificate'])){
							 echo $input_error['nid_birth_certificate'];}?></label>				
						</div>
                        <!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Course Type<small style="color:#65BDB6">*</small></label>
							<select name="course_type" id="course_type" class="form-select" value="<?php if(isset($course_type)){echo $course_type;}?>">
								<option value="Online">Online</option>
								<option value="Offline">Offline</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['course_type'])){
							 echo $input_error['course_type'];}?></label>			
						</div>
                        <!-- end -->
					</div>
					 <!-- column end -->
				</div>
                <!-- row end -->
			</div>
            <!-- personal information end -->
            <!-- contact information start -->
			<div class="col-12">
				<div class="col-sm-12"> 
					<h3 class="info_title">Contact Information</h3>
				</div>
                <!-- row start -->
				<div class="row"> 
                    <!-- column start -->
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Phone Number<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" pattern="01[1|3|4|9|7|8|6|5][0-9]{8}" name="phone_number" value="<?php if(isset($phone_number)){echo $phone_number;}?>">
							<label class="text-danger"><?php if(isset($input_error['phone_number'])){
							 echo $input_error['phone_number'];}?></label>					
						</div>
                        <!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Guardian Number<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="guardian_number" pattern="01[1|3|4|9|7|8|6|5][0-9]{8}" value="<?php if(isset($guardian_number)){echo $guardian_number;}?>">
							<label class="text-danger"><?php if(isset($input_error['guardian_number'])){
							 echo $input_error['guardian_number'];}?></label>					
						</div>
                        <!-- end -->

						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Email<small style="color:#65BDB6">*</small></label>
							<input type="email" class="form-control"  name="email" value="<?php if(isset($email)){echo $email;}?>">
							<label class="text-danger"><?php if(isset($input_error['email'])){
							 echo $input_error['email'];}?></label>					
						</div>
                        <!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label for="divisions" class="form-label">Divission<small style="color:#65BDB6">*</small></label>
							<select name="divisions" class="form-select" id="divisions" onchange="divisionsList();" value="">
									<option>Select Division</option>
									<option value="Barishal">Barishal</option>
									<option value="Chattogram">Chattogram</option>
									<option value="Dhaka">Dhaka</option>
									<option value="Khulna">Khulna</option>
									<option value="Mymensingh">Mymensingh</option>
									<option value="Rajshahi">Rajshahi</option>
									<option value="Rangpur">Rangpur</option>
									<option value="Sylhet">Sylhet</option>
							</select>
							<label class="text-danger"></label>					
						</div>
                        <!-- end -->

					</div>
                    <!-- column end -->
                    <!-- column start -->
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<!-- start -->
					    <div class="mb-1">
							<label class="form-label" for="distr">District<small style="color:#65BDB6">*</small></label>
								<select name="distr" id="distr" class="form-select" onchange="thanaList();" value=""></select>
							<label class="text-danger"></label>			
						</div>
						<!-- end -->
                        <!-- start -->
						<div class="mb-1">
							<label for="thana_print" class="form-label">Thana<small style="color:#65BDB6">*</small></label>
							<select name="thana" id="thana_print" class="form-select" value=""></select>
							<label class="text-danger"></label>				
						</div>
						<!-- end -->
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Post Office<small style="color:#65BDB6">*</small></label>
								<input type="text" class="form-control" name="post_office" value="<?php if(isset($post_office)){echo $post_office;}?>">
								<label class="text-danger"><?php if(isset($input_error['post_office'])){
							 echo $input_error['post_office'];}?></label>									
						</div>
						<!-- end -->
						<!-- start -->
						<div class="mb-1">
							<label class="form-label">Village<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="village" value="<?php if(isset($village)){echo $village;}?>">
							<label class="text-danger"><?php if(isset($input_error['village'])){
							 echo $input_error['village'];}?></label>			
						</div>
						<!-- end -->
					</div>
					<!-- column end -->
				</div>
				<!-- row end -->
			</div>
            <!-- contact information end -->
			
	 <!-- Course information start -->
			<div class="col-sm-12">
			<div class="col-sm-12"> 
			<h3 class="info_title">Course Information</h3>	
			</div>
			<div class="row">
                <!-- start -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				  <label for="session" class="form-label">Session<small style="color:#65BDB6">*</small></label>
					<select name="session" class="form-select" id="session" value="<?php if(isset($session)){echo $session;}?>">
					    <option>Select Session</option>
						<option value="January-April">January-April</option>
						<option value="January-June">January-June</option>
						<option value="January-December">January-December</option>
						<option value="June-September">June-September</option>
						<option value="June-December">June-December</option>
						<option value="September-December">September-December</option>
					</select>
				  <label class="text-danger"><?php if(isset($input_error['session'])){
							 echo $input_error['session'];}?></label>									
				</div>
				</div>
                <!-- end -->
				<!-- start -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				  <label for="course" class="form-label">Course<small style="color:#65BDB6">*</small></label>
					<select name="course" class="form-select" id="course" value="<?php if(isset($course)){echo $course;}?>">
					    <option>Select Course</option>
						 <option value="Computer Office Application">Computer Office Application</option>
                    <option value="Full Stack Web Development">Full Stack Web Development</option>
                    <option value="Graphics Design">Graphics Design</option>
                    <option value="Degital Marketing">Degital Marketing</option>
						<?php
		   
		   $course_data_select_query=mysqli_query($admin_dbcon,"SELECT * FROM `course` WHERE `id`");
		   while($course_data=mysqli_fetch_assoc($course_data_select_query)){
	  
			   ?>
						<option value="<?=$course_data['course_name']?>"><?=$course_data['course_name']?></option>
                  <?php } ?>
					</select>
				  <label class="text-danger"><?php if(isset($input_error['course'])){
							 echo $input_error['course'];}?></label>									
				</div>
				</div>
                <!-- end -->
				
				
	 <!-- start -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				  <label for="registration_type" class="form-label">Registration Type<small style="color:#65BDB6">*</small></label>
					<select name="registration_type" class="form-select" id="registration_type" value="<?php if(isset($registration_type)){echo $registration_type;}?>">
						<option value="Register">Register</option>
						<option value="No Register">NO Register</option>
					</select>
				  <label class="text-danger"><?php if(isset($input_error['registration_type'])){
							 echo $input_error['registration_type'];}?></label>									
				</div>
				</div>
                <!-- end -->
				<!-- stat -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="mb-1">
				<label for="total_fee" class="form-label">Total Fee<small style="color:#65BDB6">*</small></label>
					<input type="text" class="form-control" name="total_fee" value="<?php if(isset($total_fee)){echo $total_fee;}?>">
				<label class="text-danger"><?php if(isset($input_error['total_fee'])){
							 echo $input_error['total_fee'];}?></label>						
				</div>
				</div>
                <!-- end -->
			</div>
			</div>
			<!-- Course  information end -->
			
	
	
	
	
	
	
	
	  <!-- submit btn start -->
			<div class="ad_btn">
				<input type="submit" value="Submit" class="submit_btn" name="submit" style="padding: 0px 20px; background-color:rgb(133, 191, 240); border: none; color: white; border-radius: 10px;">
			</div>
            <!-- submit btn end -->
		</form>
		
</div>
</body>
</html>