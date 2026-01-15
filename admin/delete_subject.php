<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `subject` WHERE `subject_code` = '$_REQUEST[subject_code]'") or die(mysqli_error());
	header('location:subject.php');