<?php 
require("admin_dbcon.php");
$total_student_select=mysqli_query($admin_dbcon,"SELECT * FROM student_admission");
$total_student=mysqli_num_rows($total_student_select);
$total_account_select=mysqli_query($admin_dbcon,"SELECT * FROM student_admission");
$total_account=mysqli_num_rows($total_account_select);
$total_offline_account_select=mysqli_query($admin_dbcon,"SELECT * FROM student_admission WHERE course = 'Offline' ");
$total_offline_account=mysqli_num_rows($total_offline_account_select);
$total_online_account_select=mysqli_query($admin_dbcon,"SELECT * FROM student_admission WHERE course = 'Online' ");
$total_online_account=mysqli_num_rows($total_online_account_select);



?>

   <div class="dashboard p-2">
<div class="content p-2">
<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-gauge px-2" style="font-size:35px"></i>Dashboard<small> Statistics Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a></li>
    
  </ol>
</nav>
</div>    
<?php
 
$count = mysqli_query($admin_dbcon , "SELECT * FROM `student_admission`");
$count_rows = mysqli_num_rows($count);

?>

<div class="row">

        <div class="col-sm-3">
            <div class="panel-primary">
                <div class="panel-heading p-2" style="background-color:rgb(133, 191, 240);">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-users" style="font-size:40px;color:white;"></i></div>
                        <div class="col-xs-9">
                            <div class="float-end" style="font-size:30px;font-weight:bold;color:white;"> <?=$total_student;?></div>
                            <div class="clearfix"></div>
                            <div class="float-end" style="color:white;">All Students</div>
                        </div>
                    </div>
                </div>
                <a href="" class="text-decoration-none">
                    <div class="panel-footer p-2" style="background-color:#f5f5f5;">
                        <span class="pull-left" style="color:rgb(133, 191, 240);">Views All Students</span>
                        <span class="float-end"><i style="color:rgb(133, 191, 240);" class="fa-solid fa-circle-arrow-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

        </div>
        
        <div class="col-sm-3">
            <div class="panel-primary">
                <div class="panel-heading p-2" style="background-color:rgb(133, 191, 240);">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-users" style="font-size:40px;color:white;"></i></div>
                        <div class="col-xs-9">
                            <div class="float-end" style="font-size:30px;font-weight:bold;color:white;"><?=$total_offline_account;?></div>
                            <div class="clearfix"></div>
                            <div class="float-end" style="color:white;">Offline Students</div>
                        </div>
                    </div>
                </div>
                <a href="admin_index.php?page=offline_student_list" class="text-decoration-none">
                    <div class="panel-footer p-2" style="background-color:#f5f5f5;">
                        <span class="pull-left" style="color:rgb(133, 191, 240);">Views Offline Student</span>
                        <span class="float-end"><i style="color:rgb(133, 191, 240);" class="fa-solid fa-circle-arrow-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

        </div>
        
        <div class="col-sm-3">
            <div class="panel-primary">
                <div class="panel-heading p-2" style="background-color:rgb(133, 191, 240);">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-users" style="font-size:40px;color:white;"></i></div>
                        <div class="col-xs-9">
                            <div class="float-end" style="font-size:30px;font-weight:bold;color:white;"><?=$total_online_account;?></div>
                            <div class="clearfix"></div>
                            <div class="float-end" style="color:white;">Online  Student</div>
                        </div>
                    </div>
                </div>
                <a href="admin_index.php?page=online_student_list" class="text-decoration-none">
                    <div class="panel-footer p-2" style="background-color:#f5f5f5;">
                        <span class="pull-left" style="color:rgb(133, 191, 240);">Views Online Student</span>
                        <span class="float-end"><i style="color:rgb(133, 191, 240);" class="fa-solid fa-circle-arrow-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

        </div>
        
        <div class="col-sm-3">
            <div class="panel-primary">
                <div class="panel-heading p-2" style="background-color:rgb(133, 191, 240);">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-users" style="font-size:40px;color:white;"></i></div>
                        <div class="col-xs-9">
                            <div class="float-end" style="font-size:30px;font-weight:bold;color:white;"><?=$total_account;?></div>
                            <div class="clearfix"></div>
                            <div class="float-end" style="color:white;">Total Account</div>
                        </div>
                    </div>
                </div>
                <a href="" class="text-decoration-none">
                    <div class="panel-footer p-2" style="background-color:#f5f5f5;">
                        <span class="pull-left" style="color:rgb(133, 191, 240);">Views Account</span>
                        <span class="float-end"><i style="color:rgb(133, 191, 240);" class="fa-solid fa-circle-arrow-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

        </div>
        
      
    </div>
    
</div>
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
           <?php
		   
				$admission_data_select_query=mysqli_query($admin_dbcon,"SELECT * FROM `student_admission` WHERE `id`");
				while($all_student_data=mysqli_fetch_assoc($admission_data_select_query)){
           
					?>				
						<tr> 												
							
							<td><?=$all_student_data["id"];?></td>
							<td><?=$all_student_data["student_name"];?></td>
							<td><?=$all_student_data["father_name"];?></td>
							<td><?=$all_student_data["course"];?></td>
							<td><?=$all_student_data["phone_number"];?></td>
                            <td><?=$all_student_data['blood_group'];?></td>
							<td><?=$all_student_data["admission_time"];?></td>
                            <td><?=$all_student_data['session'];?></td>
							<td><img src="images/<?=$all_student_data['photo'];?>" class="img-thumbnail s_photo"/></td>
                            <td>
							
							
										
			<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" style="color:#076539" href="student_admin_index.php?u_id=<?=base64_encode($all_student_data['id'])?>">View</a></li>
    <li><a class="dropdown-item" style="color:blue" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$all_student_data['id'];?>">Edit</a></li>
   <li><a class="dropdown-item" style="color:red" onclick="return confirm('Are you sure delete this data!')" target="_blank"href="delete.php?&u_del_id=<?=base64_encode($all_student_data['id'])?>">Delete</a></li>
   
   
	
	
  </ul>
</div>
				
             
                
				
				
				 <!-- edit section start -->
<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$all_student_data['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User update form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
	  <form action="update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="row">
        <div class="col">
            <div class="input-group mb-2">
                <input type="hidden" class="form-control" name="u_id" id="u_id" value="<?=$all_student_data['id']?>">
                <input type="text" placeholder="name" class="form-control" name="name" id="name" value="<?=$all_student_data['student_name']?>">
            </div>
            <div class="input-group mb-2">
                <input type="text" placeholder="father name" class="form-control" name="father name" id="father name" value="<?=$all_student_data['father_name']?>">
            </div>
			
            <div class="input-group mb-2">
                <input type="text" placeholder="phone number" class="form-control" name="phone number" id="phone number" value="<?=$all_student_data['phone_number']?>">
            </div>
			
			 <div class="input-group mb-2">
                <input type="text" placeholder="course" class="form-control" name="course" id="course" value="<?=$all_student_data['course']?>">
            </div>
			 <div class="input-group mb-2">
                <input type="text" placeholder="session" class="form-control" name="session" id="session" value="<?=$all_student_data['session']?>">
            </div>
			 
			 <div class="input-group mb-2">
                <input type="text" placeholder="register time" class="form-control" name="register time" id="register time" value="<?=$all_student_data['admission_time']?>">
            </div>
			 
        </div>
      </div>
      </div>
	  
	  
	  
				
	  
	  
	  
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" name="update" class="btn btn-primary" value="Update">
      </div>
	  </form>
    </div>
  </div>
</div>

            <!-- edit section end -->
				
				
				
									
									
									
									</td>


                                   
												
					
				

																			
						</tr>
					
					<?php
				
				}	
		?>
        </tbody>
    </table>
</div>
</div>
