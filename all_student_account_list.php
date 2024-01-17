<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-id-badge px-2" style="font-size:35px"></i>All Student Account List <small> Statistics Overview</small></h1>
						<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
						<ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>Dashboard</a></li>
							<li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="" class="text-decoration-none"><i class="fa-solid fa-id-badge px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>All Student Account List </a></li>
						</ol>
</nav>

<?php  
require('admin_dbcon.php');
$data_select = mysqli_query($admin_dbcon , "SELECT * FROM `student_admission`");
?>

<div class="table p-2">
		<table id="data_table" class="table table-striped table-hover">
		<thead>
            <tr style="background:rgb(133, 191, 240);">
			
                
                <th>Roll</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mobile</th>        
				<th>Admission Date</th>
                <th>Photo</th>
                <th>Status</th>

				
               
               
            </tr>
		</thead>
        <tbody>
				<?php   
                while($data_fatch= mysqli_fetch_assoc($data_select)){


                
                ?>
						<tr> 				
															
							<td><?=$data_fatch['id'];?></td>
							<td><?=$data_fatch['student_name'];?></td>
							<td><?=$data_fatch['father_name'];?></td>
							<td><?=$data_fatch['phone_number'];?></td>
							<td><?=$data_fatch['admission_time'];?></td>
                            <td ><img src="images/<?=$data_fatch['photo'];?>" class="img-thumbnail s_photo"/></td>
							<td><a onclick="return confirm('Are you sure to <?php if($data_fatch['status'] == 'Inactive'){ echo 'Active'; }else{ echo 'Inactive'; }?> this account?')" href="status_update.php?status=<?=base64_encode($data_fatch["id"])?>" style="display: inline-block;text-decoration: none;width: 80px; height: 40px; border: none; background: <?php  if($data_fatch['status'] == 'Inactive'){ echo 'red'; }else{ echo 'green'; }?>; color: white; text-align: center; line-height: 2.5;" type="submit" name="status_update"><?=$data_fatch['status'];?></a></td>
						</tr>
					<?php  
                }
                    ?>

        </tbody>
    </table>
</div>