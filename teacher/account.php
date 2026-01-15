<?php
	require_once 'connect.php';
	$q_adminname = $conn->query("SELECT * FROM `teacher` WHERE `id` = '$_SESSION[teacher_id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$teacher_name = $f_adminname['fname']." ".$f_adminname['lname'];