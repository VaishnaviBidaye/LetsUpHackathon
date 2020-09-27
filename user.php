<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E Learning | Profile</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
			include("inc/header.php"); 
		?>
		
		<div id="wrap">
			<div id="user_l">
				<center><img src="images/user/user1.jfif" /></center>
				<h1>Profile</h1>
				<ul>
					<li><a href="user.php"><i class="fas fa-user"></i>My Account</a></li>
					<li><a href="category.php"><i class="fas fa-book"></i>My Courses</a></li>
				</ul>
			</div>
			<div id="user_r">
				<img src="images/slider/3.jfif" style="width: 100%; height: 655px">
				
				
			</div>
			
		</div>	
		
	</body>
</html>

<?php 
	if(isset($_GET['category']))
	{
		include("category.php");
	}
?>