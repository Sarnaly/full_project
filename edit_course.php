<?php  
require('admin_dbcon.php');

$course_id  =  $_SESSION['course_id'];  
$course_data_select = mysqli_query($admin_dbcon,"SELECT * FROM `course` WHERE `id`='$course_id'");
$course_data_fatch = mysqli_fetch_assoc($course_data_select); 

if(isset($_POST['update_course_name'])){
    $course_name = $_POST['course_name'];

    $update_course_name = mysqli_query($admin_dbcon , "UPDATE `course SET `course_name`='$course_name' WHERE `id`='$course_id'");
    if($update_course_name){
        
        echo "<script>
        alert('Course Name successfully updated!');
    window.location.href='admin_index.php?page=all_course'; 
      </script>";
  }else{
      echo "<script>
      alert('Course Name updated failed!');
   window.location.href='admin_index.php?page=course_edit'; 
    </script>";
  }
}
?>

<!-- modal section -->
<div id="" class=" " role="">
							  <div class="modal-dialog" style="max-width:700px;">
								<div class="modal-content bg-light">
								  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Update Course Name</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									  </div>
									  <div class="modal-body">
									  
										<form method="POST" action=""  enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										  <div class="mb-3">
											<label for="course_name" class="form-label">Course Name</label>
											<input type="text" class="form-control"  id="course_name" name="course_name" value="<?php echo $course_data_fatch['course_name']?>">
										  </div>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											</div>  
										</div>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary" name="update_course_name">Update</button>
									  </div>
									  </form>
									</div>
								  </div>
</div>									
<!-- modal section -->