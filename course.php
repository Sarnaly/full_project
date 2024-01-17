<h1 style="color:rgb(133, 191, 240);"><i class="fa-solid fa-border-all px-2" style="font-size:35px"></i>All Course<small> Statistics Overview</small></h1>
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
    <li class="breadcrumb-item"><a style="font-size:18px;color:rgb(133, 191, 240);" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-border-all px-2" style="font-size:18px;color:rgb(133, 191, 240);"></i>All Courses</a></li>
  </ol>
</nav>
<?php  
                        require('admin_dbcon.php');
                        $course_data_select_query=mysqli_query($admin_dbcon, "SELECT * FROM `course` WHERE `id`");
                        $total_course=mysqli_num_rows($course_data_select_query);
?>
<div class="col-sm-3">
            <div class="panel-primary">
                <div class="panel-heading p-2" style="background-color:rgb(133, 191, 240);">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa-solid fa-border-all" style="font-size:40px;color:white;"></i></div>
                        <div class="col-xs-9">
                            <div class="float-end" style="font-size:30px;font-weight:bold;color:white;"> <?=$total_course;?></div>
                            <div class="clearfix"></div>
                            <div class="float-end" style="color:white;">All Courses</div>
                        </div>
                    </div>
                </div>
                <a href="admin_index.php?page=all_student_list" class="text-decoration-none">
                    <div class="panel-footer p-2" style="background-color:#f5f5f5;">
                        <span class="pull-left" style="color:rgb(133, 191, 240);">Views All Course</span>
                        <span class="float-end"><i style="color:rgb(133, 191, 240);" class="fa-solid fa-circle-arrow-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>

        </div>

<div class="table p-2">
		<table id="data_table" class="table table-striped table-hover">
		<thead>
            <tr style="background:rgb(133, 191, 240);">
                <th>ID</th>
                <th>Course Name</th> 
                <th>Delete</th>
                <th>Edit</th>
            </tr>
		</thead>
        <tbody>			
        <?php
		   while($all_course_data=mysqli_fetch_assoc($course_data_select_query)){
            ?>		
						<tr> 		
									
							<td><?=$all_course_data["id"];?></td>
							<td><?=$all_course_data["course_name"];?></td>	
                            <td>
                            <ul style="list-style: none;">
                                <li><a onclick="return confirm('Are you sure to delete this data?')" href="delete_course.php?course_id=<?=base64_encode($all_course_data["id"])?>" style="text-decoration: none; color: white; font-size: 20px; padding: 5px 10px; background: red; border-radius: 50%;"><i class="fa-solid fa-trash"></i></a></td></li>
                            </ul>    
                            
                            <td>
                              <a   href="course_edit_function.php?course_id=<?=base64_encode($all_course_data["id"])?>"style="text-decoration: none; color: white; font-size: 20px; padding: 5px 10px; background: green; border-radius: 50%;"><i class="fa-solid fa-edit"></i></a>  
                            </td>
                            
										
						</tr>
                        <?php } ?>	
					
        </tbody>
    </table>

</div>



