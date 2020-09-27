<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E Learning | Categories</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
			include("inc/header.php"); 
			include("inc/user.php");
		?>
		
		
		<div id="wrap" >
			<div id="user_l" style="margin-top: -73px">
				<center><img src="images/user/user1.jfif" /></center>
				<h1>Profile</h1>
				<ul>
					<li><a href="user.php"><i class="fas fa-user"></i>My Account</a></li>
					<li><a href="category.php"><i class="fas fa-book"></i>My Courses</a></li>
				</ul>
			</div>
		<div id="user_r" style="margin-top: -73px;background: none">
			<div id='cat_bodyright'>
				<div id='crumb'>
					<span><a href='index.php'>Home</a></span> <b>></b> 
					<span>Courses</span>
				</div>
				<h2>Enrolled Courses</h2>
				<ul>
					<li>
						<a href="course_details.php">
							<img src="images/courses/ai_ml.jpg" />
							<h3>ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING </h3>
							<h5>Teacher : Mr. John Sharma </h5>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="images/courses/nodejs.png" />
							<h3>NODE JS </h3>
							<h5>Teacher : Ms. Priti Mandke </h5>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="images/courses/oracle.jpg" />
							<h3>DATABASE : ORACLE </h3>
							<h5>Teacher : Mrs. Shreya Sawant </h5>
						</a>
					</li><br clear="all" />

				</ul>
				
			</div><br clear="all" />
			<?php
				include("inc/footer.php"); 
			?>
		</div>
			</div>
		
	</body>
</html>