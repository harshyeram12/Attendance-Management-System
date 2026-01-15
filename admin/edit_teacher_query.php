<?php
	require_once 'connect.php';
	$teacher_no = $_POST['teacher_no'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
		$conn->query("UPDATE `teacher` SET `id` = '$teacher_no', `fname` = '$firstname', `mname` = '$middlename', `lname` = '$lastname', `username` = '$username', `password` = '$password' WHERE `id` = '$_REQUEST[t_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "teacher.php";
			</script>
		';	