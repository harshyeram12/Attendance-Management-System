<?php
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$tid=$_GET['teacher_id'];
	/*$q_checkadmin = $conn->query("SELECT * FROM `teacher` WHERE `username` = '$username'and id='$tid'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("Username already taken");
					window.location = "teacher.php";
				</script>
			';
		}else{
			*/
			$conn->query("UPDATE `teacher` SET `username` = '$username', `password` = '$password', `fname` = '$firstname', `mname` = '$middlename', `lname` = '$lastname' WHERE `id` = '$_REQUEST[teacher_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully Edited");
					window.location = "teacher.php";
				</script>
			';
		//}	
		