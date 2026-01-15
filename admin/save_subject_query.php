<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$subject_code = $_POST['scode'];
		$subject_name = $_POST['sname'];
		$course = $_POST['course'];
		$tname = $_POST['tname'];
		$conn->query("INSERT INTO `subject` VALUES('$subject_code','$subject_name','$course','$tname')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "subject.php";
				</script>
			';
	}	