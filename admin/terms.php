<div id="bodyright">
	
	<?php 
		if(isset($_GET['edit_term'])) 
		{
			echo edit_term();
	 	} 
		else 
		{ 
	?>
	<h3>View All New Terms and Conditions</h3>
	<div id="add">
		<details>
			<summary>Add New Terms and Conditions</summary>
			<form method="post" enctype="multipart/form-data">
				<select name="for_whom" required>
					<option value="">Select Term For</option>
					<option value="Student">Student</option>
					<option value="Teacher">Teacher</option>
				</select>
				<input  type="text" name="term" placeholder="Enter Terms and Conditions Here"/>
				<center><button name="add_term">Add Terms and Conditions</button></center>
			</form>

		</details>
		<table style="width: 90%" cellspacing="0">
			<tr>
				<th>Sr. No.</th>
				<th>Terms and Conditions</th>
				<th>For Whom</th>
				<th>Actions</th>
			</tr>
			<?php echo view_term(); ?>
		</table>
	</div>
	
</div>

<?php echo add_term(); } ?>
	