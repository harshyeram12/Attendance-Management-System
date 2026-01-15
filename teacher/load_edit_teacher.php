<?php
	require_once 'connect.php';
	$q_edit_admin = $conn->query("SELECT * FROM `teacher` WHERE `id` = '$_REQUEST[teacher_id]'") or die(mysqli_error());
	$f_edit_admin = $q_edit_admin->fetch_array();
?>
<form method = "POST" action = "edit_query.php?teacher_id=<?php echo $f_edit_admin['id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Username:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['username']?>" name = "username" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "text" required = "required" maxlength = "12" value = "<?php echo $f_edit_admin['password']?>" name = "password" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Firstname:</label>
			<input type = "text" name = "firstname" value = "<?php echo $f_edit_admin['fname']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Middlename:</label>
			<input type = "text" name = "middlename" value = "<?php echo $f_edit_admin['mname']?>" placeholder = "(Optional)" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Lastname:</label>
			<input type = "text" name = "lastname" value = "<?php echo htmlentities($f_edit_admin['lname'])?>" required = "required" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	