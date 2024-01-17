<?php 
require('admin_dbcon.php');

$username_data_select = mysqli_query($admin_dbcon , "SELECT * FROM `student_table` WHERE `username`='$username_main'");
$user_data_fatch = mysqli_fetch_assoc($username_data_select);
?>
						<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-user-pen px-2" style="font-size:35px"></i>Edit Profile<small> Statistics Overview</small></h1>
						<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
						<ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a></li>
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="" class="text-decoration-none"><i class="fa-solid fa-user-pen px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Edit Profile</a></li>
						</ol>
						</nav>
                        <div class="row">
<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
<table class="table table-bordered">
<tr>
<th>User id</th>
<td></td>
</tr>
<tr>
<th>User Name</th>
<td></td>
</tr>
<tr>
<th>Name</th>
<td></td>
</tr>
<tr>
<th>Father Name</th>
<td></td>
</tr>
<tr>
<th>Mother Name</th>
<td></td>
</tr>
<tr>
<th>Phone Number</th>
<td></td>
</tr>
<tr>
<th>Email</th>
<td></td>
</tr>
<tr>
<th>Address</th>
<td></td>
</tr>
<tr>
<th>Join time</th>
<td></td>
</tr>
</table>
<button data-bs-toggle="modal" data-bs-target="#teacherunique<?=$user_data_fatch['id']?>" data-bs-whatever="@mdo" class="btn btn-primary" style="background:rgb(133, 191, 240);" ><i class="fa-solid fa-pencil px-1"></i>Edit Info</button>
<!-- modal section -->
<?php 
if(isset($_POST['update_user_info'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $update_user_info=mysqli_query($admin_dbcon , "UPDATE `student_table` SET `name`='$name',`username`='$username',`father name`='$father_name',`mother name`='$mother_name',`phone`='$phone',`email`='$email',`address`='$address' WHERE `username`='$username_main'");
    if($update_user_info){
        echo "<script>
        alert('User Data successfully updated!');
    window.location.href='admin_index.php?page=edit_profile'; 
      </script>";
    }
}
?>
<div id="teacherunique<?=$user_data_fatch['id']?>" class="modal fade" role="dialog">
							  <div class="modal-dialog" style="max-width:700px;">
								<div class="modal-content bg-light">
								  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Update User Information</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									  </div>
									  <div class="modal-body">
									  
										<form method="POST" action=""  enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										  <div class="mb-3">
											<label for="username" class="form-label">User Name</label>
											<input type="text" class="form-control"  id="username" name="username" value="<?=$user_data_fatch['username']?>">
										  </div>
										  <div class="mb-3">
											<label for="name" class="form-label"> Name</label>
											<input type="text" class="form-control"  id="name" name="name" value="<?=$user_data_fatch['name']?>">
										  </div>
										  <div class="mb-3">
											<label for="father_name" class="form-label">Father Name</label>
											<input type="text" class="form-control"  id="father_name" name="father_name" value="<?=$user_data_fatch['father name']?>">
										  </div>
                                          <div class="mb-3">
											<label for="mother_name" class="form-label">Mother Name</label>
											<input type="text" class="form-control"  id="mother_name" name="mother_name" value="<?=$user_data_fatch['mother name']?>">
										  </div>
	
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="mb-3">
											<label for="address" class="form-label">Address</label>
											<input type="text" class="form-control"  id="address" name="address" value="<?=$user_data_fatch['address']?>">
										  </div>
                                          <div class="mb-3">
											<label for="phone" class="form-label">Phone Number</label>
											<input type="text" class="form-control"  id="phone" name="phone" value="<?=$user_data_fatch['phone']?>">
										  </div>
                                          <div class="mb-3">
											<label for="email" class="form-label">Email</label>
											<input type="text" class="form-control"  id="email" name="email" value="<?=$user_data_fatch['email']?>">
										  </div>


											</div>  
										</div>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary" name="update_user_info">Update</button>
									  </div>
									  </form>
									</div>
								  </div>
</div>									
<!-- modal section -->
</div>
<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xxl-6">
<?php 
	if(isset($_POST['photo_update'])){
		$student_photo=$_FILES['photo']['name'];
		  $photo_tmp=$_FILES['photo']['tmp_name'];
		$photo_update=mysqli_query($admin_dbcon,"UPDATE `student_table` SET `photo`='$student_photo' WHERE   `username`='$username_main'");
		if($photo_update){
		  move_uploaded_file($photo_tmp,'images/'.$student_photo);
		  echo "<script>
		  alert('Your photo successfully updated!');
		  window.location.href='admin_index.php?page=edit_profile';
		</script>";
		$student_photo=false;
		}
		else{
		  echo "<script>
		  alert('Photo update failed!');
		  window.location.href='admin_index.php?page=edit_profile';
		</script>";
		}
	  }
	?>
<form action="" method="POST" enctype="multipart/form-data">
    <img class="img-thumbnail" style="width:220px;height:220px;" src="images/<?=$user_data_fatch['photo'];?>" alt=""><br>
    <label for="photo" class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="photo" id="photo" required style="width:30%;" >
    <br>
    <button type="submit" name="photo_update"  class="btn btn-primary">Change Profile</button>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</div>