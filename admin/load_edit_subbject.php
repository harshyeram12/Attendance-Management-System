<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `subject` WHERE `subject_code` = '$_REQUEST[subject_code]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_subject_query.php?subject_code=<?php echo $f_edit_student['subject_code']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Subject Code:</label>
			<input type = "text" name = "subject_code" value = "<?php echo $f_edit_student['subject_code']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Subject Name:</label>
			<input type = "text" name = "subject_name" value = "<?php echo $f_edit_student['subject_name']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Course:</label>
			<input type = "text" name = "course" value = "<?php echo $f_edit_student['course']?>"  class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Teacher:</label>
			<input type = "text" name = "tname" value = "<?php echo htmlentities($f_edit_student['teacher'])?>" required = "required" class = "form-control" />
		</div>

	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	