<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Attendance Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
		<?php include 'header.php'  ?>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
						<li><a href = "teacher.php"><span class = "glyphicon glyphicon-user"></span>Teacher</a></li>
					</ul>
				</li>
				<li ><a href = "record.php"><span class = "glyphicon glyphicon-book"></span> Record</a></li>
				<li class = "active"><a href = "subject.php"><span class = "glyphicon glyphicon-book"></span> Subject</a></li>
			</ul>
			<br />
		
			<div class = "alert alert-info"><a href="third_subject.php">TY</a></div>
			<div class = "alert alert-info"><a href="sy_subject.php">SY</a></div>
			<div class = "alert alert-info"><a href="fy_subject.php">FY</a></div>
			<div class = "well col-lg-12">
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Subject Code</th>
							<th>Subject Name</th>
							<th>Course</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
                  $tid=$_SESSION['teacher_id'];
				  $tname=$_SESSION['teacher_name'];
						$q_time = $conn->query("SELECT * FROM `subject` where course='FYCO' and teacher='$tname'") or die(mysqli_error());
						while($f_time = $q_time->fetch_array()){     
							
					?>	
						<tr>
							<td><?php echo $f_time['subject_code']?></td>
							<td><?php echo $f_time['subject_name']?></td>
							<td><?php echo $f_time['course'];?></td>
							
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: #E97C03; color: white;">
			<div class = "container-fluid">
				<center><label>&copy;  Attendance Management System 2023</label></center>
				
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rtime_id').click(function(){
				$time_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_time.php?time_id=' + $time_id;
				});
			});
		});
	</script>
</html>