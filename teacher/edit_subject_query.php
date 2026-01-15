<?php
	require_once 'connect.php';
	$subject_code = $_POST['subject_code'];
	$name = $_POST['subject_name'];
	$tname = $_POST['tname'];
	$course = $_POST['course'];

		$conn->query("UPDATE `subject` SET `subject_code` = '$subject_code', `subject_name` = '$name', `teacher` = '$tname',`course` = '$course' WHERE `subject_code` = '$_REQUEST[subject_code]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "subject.php";
			</script>
		';	