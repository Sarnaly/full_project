<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-gauge px-2" style="font-size:35px"></i>Dashboard<small> Statistics Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a></li>
    
  </ol>
</nav>
<div class="table p-2">
		<table id="data_table" class="table table-striped table-hover">
		<thead>
            <tr style="background-color:rgb(133, 191, 240);">
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
			<th>Photo</th>
            <th class="th">Action</th>
            </tr>
		</thead>
        <tbody>
           <?php
		   
				$admission_data_select_query=mysqli_query($admin_dbcon,"SELECT * FROM `student_table`");
				while($all_student_data=mysqli_fetch_assoc($admission_data_select_query)){
           
					?>				
						<tr> 												
							
							<td><?=$all_student_data["id"];?></td>
							<td><?=$all_student_data["username"];?></td>
							<td><?=$all_student_data["email"];?></td>
							<td><?=$all_student_data["mobile"];?></td>
							
							<td><img src="images/images.jpg<?=$all_student_data['photo'];?>" class="img-thumbnail s_photo"/></td>
                            <td>
<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="profile_view.php?u_id=<?=base64_encode($all_student_data['id'])?>">View</a></li>
    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$all_student_data['id'];?>">Edit</a></li>
    <li><a class="dropdown-item"  onclick="return confirm('Are you sure delete this data!')" target="_blank"href="delete.php?&u_del_id=<?=base64_encode($all_student_data['id'])?>">Delete</a></li>
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
     
	  <form action="Update.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="row">
        <div class="col">
            <div class="input-group mb-2">
                <input type="hidden" class="form-control" name="u_id" id="u_id" value="<?=$all_student_data['id']?>">
                <input type="text" placeholder="Username" class="form-control" name="username" id="username" value="<?=$all_student_data['username']?>">
            </div>
            <div class="input-group mb-2">
                <input type="text" placeholder="email" class="form-control" name="email" id="email" value="<?=$all_student_data['email']?>">
            </div>
            <div class="input-group mb-2">
                <input type="text" placeholder="mobile" class="form-control" name="mobile" id="mobile" value="<?=$all_student_data['mobile']?>">
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