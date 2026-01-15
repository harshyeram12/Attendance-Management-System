<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: #FC9B2F; color: white;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img style="border-radius: 70%;" src = "images/msbtelogo.jpg" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">GOVERNMENT POLYTECHNIC MALVAN</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($teacher_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>