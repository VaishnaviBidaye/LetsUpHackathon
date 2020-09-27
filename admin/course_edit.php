<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E Learning | Home</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
			include("inc/header.php"); 
		?>
		
		<div id="wrap">
			<div id="c_edit_l">
				<h1>Course Management</h1>
				<ul>
					<li><a href="#"><i class="fas fa-user"></i>Title And Image</a></li>
					<li><a href="#"><i class="fas fa-user"></i>Course Goal</a></li>
					<li><a href="#"><i class="fas fa-user"></i>Course Details</a></li>
					<li><a href="#"><i class="fas fa-user"></i>Curriculum</a></li>
				</ul>
				<button>Submit For Review</button>
			</div>
			<div id="c_edit_r">
				<div id='crumb'>
					<span><a href='index.php'>Home</a></span> <b>></b> 
					<span>My Cart</span>
				</div>
				<h2>Course Title</h2>
				<form method="post">
					<div id="c_edit_input">
						<input type="text" name="c_name" placeholder="Enter Course Name" />
					</div><br clear="all"/>
					<h2>Course Image</h2>
					<img src="images/courses/java.jpg" />
					<h4>imagge desc</h4>
					<input id="c_img" type="file" name="c_img"  />
					<button>Save</button>
				</form>
				
			</div>
			
			
		</div>	
		
	</body>
</html>