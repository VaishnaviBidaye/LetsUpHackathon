<div id="bodyleft">
	<h3>Catagories Management</h3>
	<ul>
		<li><a href="index.php"><i class='fas fa-home'></i>Home</a></li>
		<li><a href="index.php?cat"><i class='fas fa-th'></i>View Categories</a></li>
		<li><a href="index.php?sub_cat"><i class="fas fa-thumbtack"></i>View Top Recommended Courses</a></li>
		<li><a href="index.php?lang"><i class="fas fa-globe-americas"></i>View All Languages</a></li>
	</ul>
	
	<h3>Course Management</h3>
	<ul>
		<li><a href="index.php?add_course"><i class="fas fa-briefcase"></i>Add Courses</a></li>
		<li><a href="index.php?edit_course"><i class="fas fa-edit"></i>Edit Courses</a></li>
		<li><a href="#"><i class="fas fa-trash"></i>Delete Courses</a></li>
		<li><a href="#"><i class="fas fa-search"></i>View All Courses</a></li>
	</ul>
	
	<h3>User Management</h3>
	<ul>
		<li><a href="#"><i class="fas fa-users"></i>Manage Attendance</a></li>
		<li><a href="#"><i class="fas fa-graduation-cap"></i>Manage Quiz</a></li>
		<li><a href="#"><i class="fas fa-search"></i>Manage Meetings</a></li>
	</ul>
	<h3>Pages Management</h3>
	<ul>
		<li><a href="index.php?terms"><i class="fab fa-telegram-plane"></i>Terms and Conditions</a></li>
		<li><a href="index.php?contact"><i class="fas fa-phone-alt"></i>Contact Us</a></li>
		<li><a href="index.php?about"><i class="far fa-address-card"></i>About Us</a></li>
		<li><a href="index.php?FAQs"><i class="far fa-comments"></i>FAQs Page</a></li>
	</ul>
	
	
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
	if(isset($_GET['lang']))
	{
		include("lang.php");
	}
	if(isset($_GET['terms']))
	{
		include("terms.php");
	}
	if(isset($_GET['contact']))
	{
		include("contact.php");
	}
	if(isset($_GET['about']))
	{
		include("about.php");
	}
	if(isset($_GET['FAQs']))
	{
		include("FAQs.php");
	}
	if(isset($_GET['add_course']))
	{
		include("add_course.php");
	}
	if(isset($_GET['edit_course']))
	{
		include("edit_course.php");
	}
	if(isset($_GET['teacher']))
	{
		include("teacher.php");
	}
	if(isset($_GET['cart']))
	{
		include("cart.php");
	}

?>
