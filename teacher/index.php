<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Attendance Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" /> 
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: #FC9B2F; color: white;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img style="border-radius: 70%;" src = "images/msbtelogo.jpg" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">GOVERNMENT POLYTECHNIC MALVAN</p>
				</div>
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row row-centered" style="">
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-4 col-centered">
					<div class = "panel panel-primary">
						<div class = "panel-heading bg-primary">
							<h4>Teacher Login</h4>
						</div>
						<div class = "panel-body">
							<form enctype = "multipart/form-data" action="login.php" method="post">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" name = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" name = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button type = "submit" class = "btn btn-primary btn-block" id = "login_admin" name="submit"><span class = ""></span> Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: #E97C03; color: white;">
			<div class = "container-fluid">
				<center><label>&copy; GPM Attendance Management System 2023</label></center>
				
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<!--<script src = "js/login.js"></script>-->
</html>