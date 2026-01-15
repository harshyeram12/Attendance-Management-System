<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Attendance Management System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
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
				<h2 class = "btn btn-success" style="background-color: blue; width:100%;">Attendance Login</h2>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form enctype = "multipart/form-data" action="check.php" method="post">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type = "text" id = "student" name="student" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<div class = "form-group">
						<label>Enter Login Code:</label>
						<input type = "text" id = "code" class = "form-control" name = "code" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<label>Enter Year:</label>
						<select id = "year" class = "form-control" name = "year" required = "required" onchange="getSubject(this.value);">
						<option>Select Your Year</option>
						<option value="TYCO">TYCO</option>
						<option value="SYCO">SYCO</option>
						<option value="FYCO">FYCO</option>
						</select>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<label>Enter Subject:</label>
						<select id ="subject" class = "form-control" name = "subject" required = "required">
						<option>Select Your Subject</option>
						</select>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<input type = "submit" style="background-color: blue" id = "login" class = "btn btn-primary btn-block" value="login" name="login"><span class = "glyphicon glyphicon-login">
						
					</div>
				</form>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: #E97C03; color: white;">
			<div class = "container-fluid">
				<center><label>&copy; GPM Attendance Management System 2023</label></center>
				
			</div>	
		</div>	
	</body>
	<!--<script src = "js/jquery.js"></script>-->
	<script src = "js/bootstrap.js"></script>
	<!--<script src = "js/login.js"></script>-->
	  
    </script>
	<script>
	function getSubject(sub){
            //We create ajax function
            $.ajax({
				url: "getData.php",
                method:"POST",
                data: "cid="+sub,
                success: function(data){
                    $('#subject').html(data);
                }
            });
        }
	
	
	</script>
</html>