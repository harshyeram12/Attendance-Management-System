<?php
session_start();
if(!isset($_SESSION['id'])){
	header("Location:../index.php");
}

$con=mysqli_connect("localhost","root", "","register") or die("No Connection");
if(isset($_POST['submit']))
{
	require('PHPExcel/PHPExcel.php');
	require('PHPExcel/PHPExcel/IOFactory.php');
	$file=$_FILES['doc']['tmp_name'];
	
	$obj=PHPExcel_IOFactory::load($file);
	foreach($obj->getWorksheetIterator() as $sheet)
	{
     
		$getHighestRow = $sheet->getHighestRow();
		for($i=1;$i<=$getHighestRow;$i++)
		{
			$question=$sheet->getCellByColumnAndRow(0,$i)->getValue();
			$a=$sheet->getCellByColumnAndRow(1,$i)->getValue();
			$b=$sheet->getCellByColumnAndRow(2,$i)->getValue();
			$c=$sheet->getCellByColumnAndRow(3,$i)->getValue();
			$d=$sheet->getCellByColumnAndRow(4,$i)->getValue();
			$correct=$sheet->getCellByColumnAndRow(5,$i)->getValue();
			$mark=$sheet->getCellByColumnAndRow(6,$i)->getValue();
			if($question!=''){
			mysqli_query($con,"insert into questions(question,a,b,c,d,correct,mark)values('$question','$a','$b','$c','$d','$correct','$mark')");
			echo "<script>
			alert('questions uploaded successfully!!');
			</script>";
		}
	}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
body{
	margin:2%;
}

.btn-login{
	margin-right:30px;
    background-color: blue;
	padding:5px 20px;
	color:white;
	text-decoration:none;
	height:15px;
	float:right;
	border-radius:20px;
	font-size:13px;
}

#st_table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#st_table td, #st_table th {
  border: 1px solid #ddd;
  padding: 8px;
  
}

#st_table tr:{background-color:#ddd; }

#st_table tr:hover {background-color: #f2f2f2;}

#st_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: blue;
  color: white;
}


#st_table td {
 
  text-align: center;
 
}
.btn1{
	margin-left:45%;
	margin-top:5%;
	width:200px;
	height:30px;
    background-color: blue;
	padding:2px 2px;
   border-radius:20px;
   text-decoration:none;
  
}
.btn1 a{
	 text-decoration:none;
	  color:white;
}
.upform{
	margin-left:35vw;
	margin-top:5vw;
	padding:20px;
	border:1px solid black;
	width:25vw;
	background-color:#a8bab3;
}
.btn{
	margin-left:40%;
	margin-top:10%;
	width:100px;
	height:30px;
    background-color: lightblue;
	padding:2px 2px;
  border-radius:20px;
  
}
</style>

</head>
<body>

	<h2>Admin Panel
	<a href="../logout_admin.php" class="btn-login">LOG-OUT</a>
	<a href="../attendance.php" class="btn-login">ATTENDANCE</a>
	<a href="../result.php" class="btn-login">RESULT</a>
	<a href="../home.php" class="btn-login">HOME</a>
	
 </h2>

<h2 align="center" style="margin:5%;">Upload Questions</h2>

<form method="POST" class="upform" enctype="multipart/form-data">
<input type="file" name="doc">(xls/csv only)<br><br>
<input type="submit" name="submit" value="Upload" class="btn">
</form>

<button name="ques" value="ques" class="btn1"><a href="../ckeditor/form.php">Use CK editor</a></button>
<button name="normal" value="normal" class="btn1"><a href="../single_quest_upload.php">Upload Single Questions</a></button>
 </body>
 </html>
 
 