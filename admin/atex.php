<?php
require_once 'validator.php';
require_once 'account.php'; 


     $sql = "SELECT * FROM time";
     $result = mysqli_query($conn, $sql);
	  $html='<table><tr>
	 <th>Student No</th>
	<th>Student Name</th>
	<th>Date</th>
	<th>Course</th>
	 </tr>
	 ';
	 while($row=mysqli_fetch_array($result)){
		
		$html.='<tr><td>'.$row['student_no'].'</td><td>'.$row['student_name'].'</td><td>'.$row['date'].'</td><td>'.
		$row['course'].'</td></tr>';		
               }
	    $html.='</table>';
		header("Content-Type:application/xls");
		header("Content-Disposition:attachment;filename=attendance.xls");
		echo $html;
		$sql = "delete from time";
		mysqli_query($conn, $sql);

?>