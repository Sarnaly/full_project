<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-border-all px-2" style="font-size:35px"></i>Course Wise Student List<small> Statistics Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-border-all px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Course Wise Student List</a></li>
  </ol>
</nav>



<form action="" class="row col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8" method="POST" enctype="multipart/form-data">
            <!-- personal information start -->		
			<div class="col-12">
				<div class="col-sm-12"> 
				</div>
                <!-- row start -->
				<div class="row"> 
                    <!-- column start -->
					<div class="col-xl-3 col-lg-3 col-md-8 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Select Course<small style="color:#65BDB6">*</small></label>
							<select name="s_course" id="s_course" class="form-select" value="">
                            <option>Select Course</option>
							<?php  
							$select_course = mysqli_query($admin_dbcon ,"SELECT * FROM `course` ");
							while(	$course_data_fetch = mysqli_fetch_assoc($select_course)){


							
						
							?>
                            <option value="<?=$course_data_fetch['course_name']?>"><?=$course_data_fetch['course_name']?></option>
							<?php  
							
							}?>
							</select>
		
						</div>
                        <!-- end -->
					</div>
                    <!-- column end -->
                    <!-- column start -->
					<div class="col-xl-3 col-lg-3 col-md-8 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Select Session<small style="color:#65BDB6">*</small></label>
							<select name="s_session" id="s_session" class="form-select" value="<?php if(isset($s_session)){echo $s_session;}?>">
                            <option>Select session</option>
                            <option value="January-June">January-June</option>
                            <option value="June-December">June-December</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['s_session'])){
							 echo $input_error['s_session'];}?></label>			
						</div>
                        <!-- end -->
					</div>
                    <!-- column end -->
                                        <!-- column start -->
					<div class="col-xl-3 col-lg-3 col-md-8 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Select Year<small style="color:#65BDB6">*</small></label>
							<select name="s_year" id="s_year" class="form-select" value="<?php if(isset($s_year)){echo $s_year;}?>">
                            <option>Select session</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>

							</select>
							<label class="text-danger"><?php if(isset($input_error['s_year'])){
							 echo $input_error['s_year'];}?></label>			
						</div>
                        <!-- end -->
					</div>
                    <!-- column end -->
                                                            <!-- column start -->
					<div class="col-xl-3 col-lg-3 col-md-8 col-sm-12 col-xs-12">
                        <!-- start -->
						<div class="mb-1">
							<label class="form-label">Registration Type<small style="color:#65BDB6">*</small></label>
							<select name="r_type" id="r_type" class="form-select" value="<?php if(isset($r_type)){echo $r_type;}?>">
                            <option>Select type</option>
                            <option value="Government">Government</option>
                            <option value="No Register">No Register</option>
							</select>
							<label class="text-danger"><?php if(isset($input_error['r_type'])){
							 echo $input_error['r_type'];}?></label>			
						</div>
                        <!-- end -->
					</div>
                    <!-- column end -->
				</div>
                <!-- row end -->
			</div>
            <!-- personal information end -->


			
            <!-- submit btn start -->
			<div class="ad_btn">
				<input type="submit" value="Submit" class="submit_btn" name="found_data" style="padding:8px 20px; background-color:rgb(133, 191, 240); border: none; color: white; border-radius: 10px;">
			</div>
            <!-- submit btn end -->
		</form>






        <div class="table p-2">
		<table id="data_table" class="table table-striped table-hover">
		<thead>
            <tr style="background:rgb(133, 191, 240);">
			
                
                <th>Roll</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Course</th>
                <th>Mobile</th>   
                <th>Blood Group</th>          
				<th>Admission Date</th>
                <th>Session</th>
                <th>Photo</th>
                <th>Action</th>
				
               
               
            </tr>
		</thead>
        <tbody>
				
						<tr> 
<?php  
if(isset($_POST['found_data'])){
   $s_course = $_POST['s_course'];
   $s_session = $_POST['s_session'];
   $s_year = $_POST['s_year'];
   $r_type = $_POST['r_type'];


   $data_select_for_match = mysqli_query($admin_dbcon , "SELECT * FROM `student_admission` WHERE `course`='$s_course' && `session`='$s_session' && `exam_year`='$s_year' && `registration_type`='$r_type'");


   if($data_select_for_match){
	while($data_select_for_match_fetch= mysqli_fetch_assoc($data_select_for_match)){





?>												
							
							<td><?=$data_select_for_match_fetch["id"];?></td>
							<td><?=$data_select_for_match_fetch["student_name"];?></td>
							<td><?=$data_select_for_match_fetch["father_name"];?></td>
							<td><?=$data_select_for_match_fetch["course"];?></td>
							<td><?=$data_select_for_match_fetch["phone_number"];?></td>
                            <td><?=$data_select_for_match_fetch['blood_group'];?></td>
							<td><?=$data_select_for_match_fetch["admission_time"];?></td>
                            <td><?=$data_select_for_match_fetch['session'];?></td>
							<td><img src="images/<?=$data_select_for_match_fetch['photo'];?>" class="img-thumbnail s_photo"/></td>
                            <td>
								<div class="btn-group">
										<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
											Action
										</button>
										<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="student_profile_function.php?student_id=<?php echo base64_encode($all_student_data['id']);?>">View</a></li>
							
															<li><a class="dropdown-item" onclick="return confirm('Are you sure to delete this data?')" href="student_data_delete.php?student_id=<?=base64_encode($all_student_data["id"])?>">Delete</a>
															</li>
									</ul>
									</div>
									</td>


                                   
												
					
				

																			
						</tr>
					
						<?php  
	}
}else{
 echo '
 <script>alert("NOt Found");</script>
 ';
}
}
?>
        </tbody>
    </table>
</div>


