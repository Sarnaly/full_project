<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-gauge px-2" style="font-size:35px"></i>Add Course<small> Statistics Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-plus px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Add Courses</a></li>
  </ol>
</nav>
<div class="admission_form p-3" id="admission_form">
    <form action="" class="row col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" method="POST" enctype="multipart/form-data">	
			<div class="col-12">
				<div class="col-sm-12"> 
					<h3 class="info_title">Add  Course</h3>
				</div>
				<div class="row"> 
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="mb-1">
							<label class="form-label">Course Name<small style="color:#65BDB6">*</small></label>
							<input type="text" class="form-control" name="course_name" value="<?php if(isset($course_name)){echo $nid_birth_certificate;}?>">
							<label class="text-danger"><?php if(isset($input_error['course_name'])){
							 echo $input_error['course_name'];}?></label>				
						</div>
					</div>
				</div>
			</div>
			<div class="ad_btn">
				<input type="submit" value="ADD Course" class="submit_btn" name="add_course" style="padding: 0px 20px;
  width: 145px;
  background-color:rgb(133, 191, 240);
  border: none;
  color: white;
  border-radius: 10px;
  height: 47px;
}">
			</div>
		</form>
</div>
<?php  
require('admin_dbcon.php');

if(isset($_POST['add_course'])){
	$course_name = $_POST['course_name'];

	$input_error= array();



	if(count($input_error) == 0){
         $insert_course = mysqli_query($admin_dbcon , "INSERT INTO `course`( `course_name`) VALUES ('$course_name')");
		 if($insert_course){
			echo '
			<script>alert("course add successfully compleate");
			window.location.href="admin_index.php?page=add_course"; 
			</script>
			';
			
		   }else{
			echo '
			<script>alert("course add unsuccessful");</script>
			';
		   }
	}
}
?>