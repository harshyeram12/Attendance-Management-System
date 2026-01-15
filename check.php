<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Attendance Management System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: #E97C03;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img style="border-radius: 10%;" src = "admin/images/msbtelogo.jpg" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">GOVERNMENT POLYTECHNIC MALVAN</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6 well" >
<?php
	require_once 'admin/connect.php';
	if(isset($_POST['login'])){

		$student = $_POST['student'];
	$code=$_POST['code'];
	$subject=$_POST['subject'];
	$year=$_POST['year'];
	$sql="select passcode from passcode";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$pass=$row['passcode'];
	}
	$q_student = "SELECT * FROM `student` WHERE `student_no` = '$student'";
	$result=mysqli_query($conn,$q_student);
	$v_student = mysqli_num_rows($result);
	if($v_student > 0 and $code==$pass){
		$sql="select * from student where student_no='$student'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$student_name = $row['firstname'].$row['lastname'];
		$course=$row['course'];
		date_default_timezone_set("Asia/Kolkata");
	$time = date("h:i A"); 
	$date = date("Y-m-d");
	// strtotime(""));
	}
	
	$sql="select * from subject where subject_name='$subject'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$tid = $row['teacher'];
	}
	
	
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date','$course','$subject','$tid')") or die(mysqli_error());
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";
	echo "<script>alert('Attendance marked')</script>";
	echo "<br>";
	echo "<h3 class = 'text-muted'><a href='index.php'>Go To Home Page </a></h3>";
	
	
	}
	else{
		echo 'Details not match';
	}
	

	}
	?>
	</div>
	</div>
	</div>
	
	