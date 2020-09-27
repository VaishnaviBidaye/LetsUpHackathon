<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E Learning | Cart</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
	</head>

	<body>
	
		
		<div id="wrap">
			<div id='crumb'>
				<span><a href='index.php'>Home</a></span> <b>></b> 
				<span>Delete Course</span>
			</div>
			<div id='dash'>
				<h1>Delete Course</h1>
				<form method="post">
					<div id="c_form">
						<input type="text" name="c_name" placeholder="Enter Course Name Here " />
						<button name="add_course">Search Course</button>
					</div>
				</form><br clear="all" />
				<table cellpadding="0" cellspacing="0">
					<tr>
						<th>Name</th>
						<th></th>
						<th> Category</th>
						<th> Status</th>
						<th> Enrolled By</th>
					</tr>
					<tr>
						<td><a href="#"><img src="images/courses/ai_ml.jpg"/></a></td>
						<td>
							<span><a href="#">Artificial Intelligence And Machine Learning</a></span><br/></br>
							<b><a href='#' style="color: red"><i class='fas fa-trash-alt'></i>Remove</a></b>
						</td>
						<td>Trending Technology</td>
						<td>Active</td>
						<td>30 Students</td>
					</tr>
					<tr>
						<td><a href="#"><img src="images/courses/nodejs.png"/></a></td>
						<td>
							<span><a href="#">Node Js</a></span><br/></br>
							<b><a href='#' style="color: red"><i class='fas fa-trash-alt'></i>Remove</a></b>
						</td>
						<td>Web Development</td>
						<td>Active</td>
						<td>25 Students</td>
					</tr>
					<tr>
						<td><a href="#"><img src="images/courses/oracle.jpg"/></a></td>
						<td>
							<span><a href="#">Database Oracle</a></span><br/></br>
							<b><a href='#' style="color: red"><i class='fas fa-trash-alt'></i>Remove</a></b>
						</td>
						<td>Database</td>
						<td>Active</td>
						<td>27 Students</td>
					</tr>
				</table>
			</div>	
		
		
		
	</body>
</html>