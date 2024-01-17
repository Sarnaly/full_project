<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link start-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin_dashboard.css">
	<link rel="stylesheet" href=".css/style.css">
    <!--css link end-->
	
	
	<link rel="shortcut icon" href="../images/site-icon.png" type="image/x-icon">

       <!-- custome css link -->
	   <link rel="stylesheet" href="./css/style.css" />
	   <link rel="stylesheet" href="./css/form.style.css" />
	   <link rel="stylesheet" href="./css/button.css" />
	   <link rel="stylesheet" href="./css/style.table.css">
	   <link rel="stylesheet" href="./css/bootstrap_modify.css">
	   <link rel="stylesheet" href="./css/admin.style.css" />
	   <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css" />
	   <link rel="stylesheet" href="./css/bootstrap.min.css">
	   <link rel="stylesheet" href="./css/buttons.dataTables.min.css">
	   <link rel="stylesheet" href="./css/style.reg.css" />

	   
	  
		
		<!-- font-awesome cdn -->
		<link rel="stylesheet" href="./fontawesome/css/all.css">
    	<link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"></script>
    <title>Sarnaly - Dashboard</title>
</head>

<body>


<nav class="sidebar card">
	<div class="profile text-center">
		<img class="rounded-circle" style="border: 3px solid #dee2e6;" width="150" height="150" src="images/<?=$student_data['photo'];?>" alt=""><br>
		<label class="py-2 d-block" for=""></label>
	</div>
	<ul class="nav flex-column" id="nav_accordion">
		<li class="nav-item has-submenu">
			<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user nav-icon"></i>Profile<i class="fa-solid fa-caret-down"></i></a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="admin_index.php?page=student_admin_index">Personal Info</a></li>
			</ul>
		</li>		
		<li class="nav-item has-submenu">
			<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-graduation-cap nav-icon"></i>Education<i class="fa-solid fa-caret-down"></i></a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="admin_index.php?page=student_education_info">Education Info</a></li>
			</ul>
		</li>	
		<li class="nav-item has-submenu">
			<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-bars nav-icon"></i>Course Info<i class="fa-solid fa-caret-down"></i></a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="admin_index.php?page=student_course_info">Course Info</a></li>
			</ul>
		</li>	
		<li class="nav-item has-submenu">
			<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-phone nav-icon"></i>Contact Info<i class="fa-solid fa-caret-down"></i></a>
			<ul class="submenu collapse">
				<li><a class="nav-link" href="admin_index.php?page=student_contact_info">Contact Info</a></li>
			</ul>
		</li>		
		
		
	</ul>
</nav>



<div class="main_div">


<div class="container-fluid" style="padding-left:0;position:relative">
	<section class="section-content">
			<div class="row d-flex">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xxl-2" > 
				
				</div>				
			
			
	
			</div>
	</section>
	
	
	
	
	


</div>
</div>

	<script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/form.js"></script>
	<script type="text/javascript" src="./js/dashboard.js"></script>

	<!-- copy csv excel pdf -->
	<script src="../js/dataTables.buttons.min.js"></script>
	<script src="../js/jszip.min.js"></script>
	<script src="../js/pdfmake.min.js"></script>
	<script src="../js/vfs_fonts.js"></script>
	<script src="../js/buttons.html5.min.js"></script>
	<script src="../js/buttons.print.min.js"></script>
	
		<!-- copy csv excel pdf -->

	<script type="text/javascript">

$(document).ready(function() {
    $('#data_table').DataTable({
		scrollY:'1000px',
	});
	$('#data_table_report').DataTable({
		dom: 'Bfrtip',
		
		buttons: [
			'copy', 'csv', 'excel', 'print',
            {
                extend: 'pdfHtml5',
				
                orientation: 'landscape',
                pageSize: 'A4'
            }
        ],

		scrollY:'600px',
	});
} );

	</script>
<script src="js/invoice.js"></script>
<script src="js/computerInvoice.js"></script>

</body>
</html>