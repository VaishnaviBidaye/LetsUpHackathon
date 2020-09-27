<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E Learning | Course Details</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
			include("inc/header.php"); 
		?>
		
		<div id="wrap">
			<?php
				echo course_details();
				include("inc/footer.php"); 
			?>
		</div>	
		
	</body>
</html>