<?php
	require_once 'admin/connect.php';
	$student = $_POST['student'];
	date_default_timezone_set("Asia/Kolkata");
	$time = date("h:i:s"); 
	$date = date("Y-m-d", strtotime("+8 HOURS"));
	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
	$f_student = $q_student->fetch_array();
	$student_name = $f_student['firstname']." ".$f_student['lastname'];
	$course=$f_student['course'];
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date','$course')") or die(mysqli_error());
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";