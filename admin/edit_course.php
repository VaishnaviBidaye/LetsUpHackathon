<div id="bodyright">
	<div id="c_edit_l">
		<h1>Course Management</h1>
		<ul>
			<li><a href="index.php?"><i class="fas fa-user"></i>Title And Image</a></li>
			<li><a href="#"><i class="fas fa-user"></i>Course Goal</a></li>
			<li><a href="#"><i class="fas fa-user"></i>Course Details</a></li>
			<li><a href="#"><i class="fas fa-user"></i>Curriculum</a></li>
		</ul>
	</div>
	<div id="c_edit_r">
		
		<h2>Course Title</h2>
		<form method="post">
			<div id="c_edit_input">
				<input type="text" name="c_name" placeholder="Enter Course Name" />
			</div><br clear="all"/>
			<h2>Course Image</h2>
			<img src="images/courses/nodejs.png" />
			<h4>imagge desc</h4>
			<input id="c_img" type="file" name="c_img"  />
			<button>Save</button>
		</form>

	</div>
</div>	
	


<?php 
	if(isset($_GET['cat']))
	{
		include("cat.php");
	}
	if(isset($_GET['sub_cat']))
	{
		include("sub_cat.php");
	}

?>