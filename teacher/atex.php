<?php
require_once 'validator.php';
require_once 'account.php'; 

$tid=$_SESSION['teacher_id'];
				  $tname=$_SESSION['teacher_name'];
     $sql = "SELECT * FROM time where teacher='$tname'";
     $result = mysqli_query($conn, $sql);
	  $html='<table><tr>
	 <th>Student No</th>
	<th>Student Name</th>
	<th>Date</th>
	<th>Time</th>
	<th>Course</th>
	<th>Subject</th>
	 </tr>
	 ';
	 while($row=mysqli_fetch_array($result)){
		
		$html.='<tr><td>'.$row['student_no'].'</td><td>'.$row['student_name'].'</td><td>'.$row['sdate'].'</td><td>'.
		$row['stime'].'</td><td>'.$row['subject'].'</td><td>'.
		$row['course'].'</td></tr>';		
               }
	    $html.='</table>';
		header("Content-Type:application/xls");
		header("Content-Disposition:attachment;filename=attendance.xls");
		echo $html;
		//$sql = "delete from time";
		//mysqli_query($conn, $sql);

?>