<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>CHMSC Attendance Management System</title>
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
				<li class = "dropdown active">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
						<li><a href = "teacher.php"><span class = "glyphicon glyphicon-user"></span>Teacher</a></li>
					</ul>
				</li>
				<li><a href = "record.php"><span class = "glyphicon glyphicon-book"></span> Record</a></li>
				<li><a href = "subject.php"><span class = "glyphicon glyphicon-book"></span> Subject</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Accounts / Teacher</div>
			<div class = "modal fade" id = "add_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add new Teacher</h4>
						</div>
						<form method = "POST" action = "save_teacher_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
							<!--	<div class = "form-group">
									<label>Teacher ID:</label>
									<input type = "text" name = "teacher_no" required = "required" class = "form-control" />
								</div>-->
								<div class = "form-group">
									<label>First Name:</label>
									<input type = "text" name = "firstname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Middle Name:</label>
									<input type = "text" name = "middlename" placeholder = "(Optional)" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Last Name:</label>
									<input type = "text" name = "lastname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Username :</label>
									<input type = "text" name = "username" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Password :</label>
									<input type = "text" name = "password" required = "required" class = "form-control" />
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-primary remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-success" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Teacher</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<button class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = "#add_student"><span class = "glyphicon glyphicon-plus"></span> Add new </button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Teacher ID</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q_teacher = $conn->query("SELECT * FROM `teacher`") or die(mysqli_error());
							while($f_teacher = $q_teacher->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_teacher['id']?></td>
							<td><?php echo $f_teacher['fname']?></td>
							<td><?php echo $f_teacher['mname']?></td>
							<td><?php echo $f_teacher['lname']?></td>
							<td><?php echo $f_teacher['username']?></td>
							<td><?php echo $f_teacher['password']?></td>
							<td><a class = "btn btn-success rstudent_id" name = "<?php echo $f_teacher['id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-primary  estudent_id" name = "<?php echo $f_teacher['id']?>" href = "#" data-toggle = "modal" data-target = "#edit_student"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: #E97C03; color: white;">
			<div class = "container-fluid">
				<center><label>&copy; Attendance Management System 2022</label></center>
				
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
			$('.rstudent_id').click(function(){
				$t_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_teacher.php?t_id=' + $t_id;
				});
			});
			$('.estudent_id').click(function(){
				$t_id = $(this).attr('name');
				$('#edit_query').load('load_edit_teachert.php?t_id=' + $t_id);
			});
		});
	</script>
</html>