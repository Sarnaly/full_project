<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xxl-6">
<?php 
	if(isset($_POST['photo_update'])){
		$student_photo=$_FILES['photo']['name'];
		  $photo_tmp=$_FILES['photo']['tmp_name'];
		$photo_update=mysqli_query($admin_dbcon,"UPDATE `logo_change` SET `logo`= WHERE `id`='1'");
		if($photo_update){
		  move_uploaded_file($photo_tmp,'images/'.$student_photo);
		  echo "<script>
		  alert('Your photo successfully updated!');
		  window.location.href='admin_index.php?page=main_logo';
		</script>";
		$student_photo=false;
		}
		else{
		  echo "<script>
		  alert('Photo update failed!');
		  window.location.href='admin_index.php?page=main_logo';
		</script>";
		}
	  }
	  $logo_data_select = mysqli_query($admin_dbcon , "SELECT * FROM `logo_change` WHERE `id`='1'");
	  $logo_data_fatch = mysqli_fetch_assoc($logo_data_select);
	?>
<form action="" method="POST" enctype="multipart/form-data">
    <img class="img-thumbnail" style="width:220px;height:220px;" src="images/<?=$logo_data_fatch['logo'];?>" alt=""><br>
    <label for="photo" class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="photo" id="photo" required style="width:30%;" >
    <br>
    <button type="submit" name="photo_update"  class="btn btn-primary">Change Profile</button>
</form>
</div>

















