<div id="bodyright">
	
	<?php 
		if(isset($_GET['edit_FAQs'])) 
		{
			echo edit_FAQs();
	 	} 
		else 
		{ 
	?>
	<h3>View All FAQs</h3>
	<div id="add">
		<div id="FAQs">
			<details style="width: 50%">
				<summary style="background: #fff; text-align: center; margin-bottom: 40px">Add New FAQs</summary>
				<form method="post" enctype="multipart/form-data">
					<input  type="text" name="que" placeholder="Enter Question Here" required/>
					<textarea name="ans" placeholder="Enter Answer Here" required></textarea>
					<center><button name="add_FAQs">Add FAQs</button></center>
				</form>

			</details><br/>
			<?php echo view_FAQs(); ?>
		
		</div>	
	</div>
	
</div>

<?php echo add_FAQs(); } ?>
	