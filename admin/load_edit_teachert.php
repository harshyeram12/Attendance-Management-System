<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `teacher` WHERE `id` = '$_REQUEST[t_id]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_teacher_query.php?t_id=<?php echo $f_edit_student['id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Teacher ID:</label>
			<input type = "text" name = "teacher_no" value = "<?php echo $f_edit_student['id']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Firstname:</label>
			<input type = "text" name = "firstname" value = "<?php echo $f_edit_student['fname']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Middlename:</label>
			<input type = "text" name = "middlename" value = "<?php echo $f_edit_student['mname']?>" placeholder = "(Optional)" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Lastname:</label>
			<input type = "text" name = "lastname" value = "<?php echo htmlentities($f_edit_student['lname'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Username</label>
			<input type = "text" value = "<?php echo $f_edit_student['username']?>" name = "username" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password</label>
			<input type = "text" name = "password" required = "required" value = "<?php echo $f_edit_student['password']?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	