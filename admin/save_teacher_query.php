<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		//$teacher_no = $_POST['teacher_no'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("INSERT INTO `teacher` VALUES('','$username', '$password','$firstname', '$middlename', '$lastname' )") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "teacher.php";
				</script>
			';
	}	