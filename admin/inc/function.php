<?php

	function add_lang()
	{
		include("inc/db.php");
		if(isset($_POST['add_lang']))
		{
			$lang_name=$_POST['lang_name'];
			
			$check=$con->prepare("Select *from lang where lang_name='$lang_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count=$check->rowCount();
			
			if($count==1)
			{
				echo"<script>alert('Language Already Added !!!')</script>";
				echo"<script>window.open('index.php?lang','_self')</script>";
			}
			else
			{
				$add_cat=$con->prepare("insert into lang(lang_name) values('$lang_name')");
				if($add_cat->execute())
				{
					echo"<script>alert('Language Added Successfully !!!')</script>";
					echo"<script>window.open('index.php?lang','_self')</script>";
				}
				else
				{
					echo"<script>alert('Language Not Added ...')</script>";
					echo"<script>window.open('index.php?lang','_self')</script>";
				}
			}
			
		}
	}

	function edit_lang()
	{
		include("inc/db.php");		
		if(isset($_GET['edit_lang']))
		{
			$id=$_GET['edit_lang'];
			$get_lang=$con->prepare("select * from lang where lang_id='$id'");
			$get_lang->setFetchMode(PDO::FETCH_ASSOC);
			$get_lang->execute();
			$row=$get_lang->fetch();
			
			echo "<h3>Edit Language</h3>
				<form id='edit_form' method='post' enctype='multipart/form-data'>
					<input  type='text' name='lang_name' value='".$row['lang_name']."' placeholder='Enter Language Name Here'/>
					<center><button name='edit_lang'>Edit Category</button></center>
				</form>";
			
			if(isset($_POST['edit_lang']))
			{
				$lang_name=$_POST['lang_name'];
				
				$check=$con->prepare("Select *from lang where lang_name='$lang_name'");
				$check->setFetchMode(PDO::FETCH_ASSOC);
				$check->execute();
				$count=$check->rowCount();

				if($count==1)
				{
					echo"<script>alert('Language Already Updated !!!')</script>";
					echo"<script>window.open('index.php?lang','_self')</script>";
				}
				else
				{
				
					$up_lang=$con->prepare("update lang set lang_name='$lang_name' where lang_id='$id'");
					if($up_lang->execute())
					{
						echo"<script>alert('Language Updated Successfully !!!')</script>";
						echo"<script>window.open('index.php?lang','_self')</script>";
					}
					else
					{
						echo"<script>alert('Language Not Updated ...')</script>";
						echo"<script>window.open('index.php?lang','_self')</script>";
					}
					
				}
			}
			
		}
	}

	function view_lang()
	{
		include("inc/db.php");
		$get_lang=$con->prepare("Select * from lang");
		$get_lang->setFetchMode(PDO::FETCH_ASSOC);
		$get_lang->execute();
		$i=1;
		
		while($row=$get_lang->fetch()):
			echo"<tr>
					<td>".$i++."</td>
					<td>".$row['lang_name']."</td>
					<td>
						<a title='Edit' href='index.php?lang&edit_lang=".$row['lang_id']."'><i class='far fa-edit'></i></a></href>
						<a title='Delete' style='color:#f00' href='index.php?lang&del_lang=".$row['lang_id']."'><i class='far fa-trash-alt'></i></a></href>
					</td>	
				</tr>";
		endwhile;
		
		if(isset($_GET['del_lang']))
		{
			$id=$_GET['del_lang'];
			
			$del=$con->prepare("delete from lang where lang_id='$id'");
			
			if($del->execute())
			{
				echo "<script>alert('Language Deleted Successfully !!!')</script>";
				echo "<script>window.open('index.php?lang','_self')</script>";
			}
			else
			{
				echo "<script>alert('Language Not Deleted ...')</script>";
				echo "<script>window.open('index.php?lang','_self')</script>";
			}
		}
		
	}


	function add_cat()
	{
		include("inc/db.php");
		if(isset($_POST['add_cat']))
		{
			$cat_name=$_POST['cat_name'];
			$cat_icon=$_POST['cat_icon'];
			
			$check=$con->prepare("Select *from cat where cat_name='$cat_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count=$check->rowCount();
			
			if($count==1)
			{
				echo"<script>alert('Category Already Added !!!')</script>";
				echo"<script>window.open('index.php?cat','_self')</script>";
			}
			else
			{
				$add_cat=$con->prepare("insert into cat(cat_name,cat_icon) values('$cat_name','$cat_icon')");
				if($add_cat->execute())
				{
					echo"<script>alert('Category Added Successfully !!!')</script>";
					echo"<script>window.open('index.php?cat','_self')</script>";
				}
				else
				{
					echo"<script>alert('Category Not Added ...')</script>";
					echo"<script>window.open('index.php?cat','_self')</script>";
				}
			}
			
		}
	}

	function edit_cat()
	{
		include("inc/db.php");		
		if(isset($_GET['edit_cat']))
		{
			$id=$_GET['edit_cat'];
			$get_cat=$con->prepare("select * from cat where cat_id='$id'");
			$get_cat->setFetchMode(PDO::FETCH_ASSOC);
			$get_cat->execute();
			$row=$get_cat->fetch();
			
			echo "<h3>Edit Category</h3>
				<form id='edit_form' method='post' enctype='multipart/form-data'>
					<input  type='text' name='cat_name' value='".$row['cat_name']."' placeholder='Enter Category Name Here'/>
					<input  type='text' name='cat_icon' value='".$row['cat_icon']."' placeholder='Enter Category Icon Code Here' />
					<center><button name='edit_cat'>Edit Category</button></center>
				</form>";
			
			if(isset($_POST['edit_cat']))
			{
				$cat_name=$_POST['cat_name'];
				$cat_icon=$_POST['cat_icon'];

				$up_cat=$con->prepare("update cat set cat_name='$cat_name', cat_icon='$cat_icon' where cat_id='$id'");
				if($up_cat->execute())
				{
					echo"<script>alert('Category Updated Successfully !!!')</script>";
					echo"<script>window.open('index.php?cat','_self')</script>";
				}
				else
				{
					echo"<script>alert('Category Not Updated ...')</script>";
					echo"<script>window.open('index.php?cat','_self')</script>";
				}
					
				
			}
			
		}
	}

	function view_cat()
	{
		include("inc/db.php");
		$get_cat=$con->prepare("Select * from cat");
		$get_cat->setFetchMode(PDO::FETCH_ASSOC);
		$get_cat->execute();
		$i=1;
		
		while($row=$get_cat->fetch()):
			echo"<tr>
					<td>".$i++."</td>
					<td>".$row['cat_icon']." ".$row['cat_name']."</td>
					<td>
						<a title='Edit' href='index.php?cat&edit_cat=".$row['cat_id']."'><i class='far fa-edit'></i></a></href>
						<a title='Delete' style='color:#f00' href='index.php?cat&del_cat=".$row['cat_id']."'><i class='far fa-trash-alt'></i></a></href>
					</td>	
				</tr>";
		endwhile;
		
		if(isset($_GET['del_cat']))
		{
			$id=$_GET['del_cat'];
			
			$del=$con->prepare("delete cat,sub_cat from cat left outer join sub_cat on cat.cat_id=sub_cat.cat_id where cat.cat_id='$id'");
			
			if($del->execute())
			{
				echo "<script>alert('Category Deleted Successfully !!!')</script>";
				echo "<script>window.open('index.php?cat','_self')</script>";
			}
			else
			{
				echo "<script>alert('Category Not Deleted ...')</script>";
				echo "<script>window.open('index.php?cat','_self')</script>";
			}
		}
		
	}

	function add_sub_cat()
	{
		include("inc/db.php");
		if(isset($_POST['add_sub_cat']))
		{
			$cat_name=$_POST['sub_cat_name'];
			$cat_id=$_POST['cat_id'];
			
			$check=$con->prepare("Select *from sub_cat where sub_cat_name='$cat_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count=$check->rowCount();
			
			if($count==1)
			{
				echo"<script>alert('Sub Category Already Added !!!')</script>";
				echo"<script>window.open('index.php?sub_cat','_self')</script>";
			}
			else
			{
				$add_cat=$con->prepare("insert into sub_cat(sub_cat_name,cat_id) values('$cat_name','$cat_id')");
				if($add_cat->execute())
				{
					echo"<script>alert('Sub Category Added Successfully !!!')</script>";
					echo"<script>window.open('index.php?sub_cat','_self')</script>";
				}
				else
				{
					echo"<script>alert('Sub Category Not Added ...')</script>";
					echo"<script>window.open('index.php?sub_cat','_self')</script>";
				}
			}
			
		}
	}

	
	function edit_sub_cat()
	{
		include("inc/db.php");		
		if(isset($_GET['edit_sub_cat']))
		{
			$id=$_GET['edit_sub_cat'];
			$get_cat=$con->prepare("select * from sub_cat where sub_cat_id='$id'");
			$get_cat->setFetchMode(PDO::FETCH_ASSOC);
			$get_cat->execute();
			$row=$get_cat->fetch();
			$cat_id=$row['cat_id'];
			$get_c=$con->prepare("select * from cat where cat_id='$cat_id'");
			$get_c->setFetchMode(PDO::FETCH_ASSOC);
			$get_c->execute();
			$row_cat=$get_c->fetch();
			
			echo "<h3>Edit Sub Category</h3>
				<form id='edit_form' method='post' enctype='multipart/form-data'>
					<select name='c_id'>
						<option value='".$row_cat['cat_id']."'>".$row_cat['cat_name']."</option>";
			echo select_cat();
			echo "</select>
					<input  type='text' name='sub_cat_name' value='".$row['sub_cat_name']."' placeholder='Enter Catregory Name Here'/>
					<center><button name='edit_sub_cat'>Edit Category</button></center>
				</form>";
			
			if(isset($_POST['edit_sub_cat']))
			{
				$cat_name=$_POST['sub_cat_name'];
				$cat_id=$_POST['c_id'];
				
				$up_cat=$con->prepare("update sub_cat set sub_cat_name='$cat_name', cat_id='$cat_id' where sub_cat_id='$id'");
				if($up_cat->execute())
				{
					echo"<script>alert('Sub Category Updated Successfully !!!')</script>";
					echo"<script>window.open('index.php?sub_cat','_self')</script>";
				}
				else
				{
					echo"<script>alert('Sub Category Not Updated ...')</script>";
					echo"<script>window.open('index.php?sub_cat','_self')</script>";
				}
					
				
			}
			
		}
	}

	function view_sub_cat()
	{
		include("inc/db.php");
		$get_cat=$con->prepare("Select * from sub_cat");
		$get_cat->setFetchMode(PDO::FETCH_ASSOC);
		$get_cat->execute();
		$i=1;
		
		while($row=$get_cat->fetch()):
			$id=$row['cat_id'];
			$get_c=$con->prepare("select * from cat where cat_id='$id'");
			$get_c->setFetchMode(PDO::FETCH_ASSOC);
			$get_c->execute();
			$row_cat=$get_c->fetch();
		
			echo"<tr>
					<td>".$i++."</td>
					<td>".$row['sub_cat_name']."</td>
					<td>".$row_cat['cat_name']."</td>
					<td>
						<a title='Edit' href='index.php?sub_cat&edit_sub_cat=".$row['sub_cat_id']."'><i class='far fa-edit'></i></a></href>
						<a title='Delete' style='color:#f00' href='index.php?sub_cat&del_sub_cat=".$row['sub_cat_id']."'><i class='far fa-trash-alt'></i></a></href>
					</td>	
				</tr>";
		endwhile;
		
		if(isset($_GET['del_sub_cat']))
		{
			$id=$_GET['del_sub_cat'];
			
			$del=$con->prepare("delete from sub_cat where sub_cat_id='$id'");
			if($del->execute())
			{
				echo "<script>alert('Sub Category Deleted Successfully !!!')</script>";
				echo "<script>window.open('index.php?sub_cat','_self')</script>";
			}
			else
			{
				echo "<script>alert('Sub Category Not Deleted ...')</script>";
				echo "<script>window.open('index.php?sub_cat','_self')</script>";
			}
		}
		
	}

	function select_cat()
	{
		include("inc/db.php");
		$get_cat=$con->prepare("Select * from cat");
		$get_cat->setFetchMode(PDO::FETCH_ASSOC);
		$get_cat->execute();
		while($row=$get_cat->fetch()):
			echo"<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
		endwhile;
		
	}

	function add_term()
	{
		include("inc/db.php");
		if(isset($_POST['add_term']))
		{
			$term_name=$_POST['term'];
			$for_whom=$_POST['for_whom'];
			
			$check=$con->prepare("Select *from terms where terms='$term_name'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count=$check->rowCount();
			
			if($count==1)
			{
				echo"<script>alert('Term is Already Added !!!')</script>";
				echo"<script>window.open('index.php?terms','_self')</script>";
			}
			else
			{
				$add_cat=$con->prepare("insert into terms(terms,for_whom) values('$term_name','$for_whom')");
				if($add_cat->execute())
				{
					echo"<script>alert('Term Added Successfully !!!')</script>";
					echo"<script>window.open('index.php?terms','_self')</script>";
				}
				else
				{
					echo"<script>alert('Term Not Added ...')</script>";
					echo"<script>window.open('index.php?terms','_self')</script>";
				}
			}
			
		}
	}

	function edit_term()
	{
		include("inc/db.php");		
		if(isset($_GET['edit_term']))
		{
			$id=$_GET['edit_term'];
			$get_term=$con->prepare("select * from terms where t_id='$id'");
			$get_term->setFetchMode(PDO::FETCH_ASSOC);
			$get_term->execute();
			$row=$get_term->fetch();
			
			echo "<h3>Edit Terms and Conditions</h3>
				<form id='edit_form' method='post' enctype='multipart/form-data'>
					<select name='for_whom'>
						<option value='".$row['for_whom']."'>".$row['for_whom']."</option>
						<option value='Student'>Student</option>
						<option value='Teacher'>Teacher</option>";
			echo "</select>
					<input  type='text' name='term' value='".$row['terms']."' placeholder='Enter Terms and Conditions Here'/>
					<center><button name='edit_term'>Edit Category</button></center>
				</form>";
			
			if(isset($_POST['edit_term']))
			{
				$term=$_POST['term'];
				$for_whom=$_POST['for_whom'];
				
				$up_terms=$con->prepare("update terms set terms='$term', for_whom='$for_whom' where t_id='$id'");
				if($up_terms->execute())
				{
					echo"<script>alert('Terms and Conditions Updated Successfully !!!')</script>";
					echo"<script>window.open('index.php?terms','_self')</script>";
				}
				else
				{
					echo"<script>alert('Terms and Conditions Not Updated ...')</script>";
					echo"<script>window.open('index.php?terms','_self')</script>";
				}
					
				
			}
			
		}
	}


	function view_term()
	{
		include("inc/db.php");
		
			$get_c=$con->prepare("select * from terms ");
			$get_c->setFetchMode(PDO::FETCH_ASSOC);
			$get_c->execute();
			$i=1;
			while($row=$get_c->fetch()):
		
			echo"<tr>
					<td>".$i++."</td>
					<td>".$row['terms']."</td>
					<td>".$row['for_whom']."</td>
					<td>
						<a title='Edit' href='index.php?terms&edit_term=".$row['t_id']."'><i class='far fa-edit'></i></a></href>
						<a title='Delete' style='color:#f00' href='index.php?terms&del_term=".$row['t_id']."'><i class='far fa-trash-alt'></i></a></href>
					</td>	
				</tr>";
		
			endwhile;
		
		if(isset($_GET['del_term']))
		{
			$id=$_GET['del_term'];
			
			$del=$con->prepare("delete from terms where t_id='$id'");
			if($del->execute())
			{
				echo "<script>alert('Terms and Conditions Deleted Successfully !!!')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
			}
			else
			{
				echo "<script>alert('Terms and Conditions Not Deleted ...')</script>";
				echo "<script>window.open('index.php?terms','_self')</script>";
			}
		}
		
	}


	function contact()
	{
		include("inc/db.php");
		
		$get_con=$con->prepare("select * from contact");
		$get_con->setFetchMode(PDO:: FETCH_ASSOC);
		$get_con->execute();
		$row=$get_con->fetch();
		
		echo "<form method='post' enctype='multipart/form-data'>
		
				<table>
					<tr>
						<td>Update Contact No.</td>
						<td><input  type='tel' name='phn' value='".$row['phn']."' /></td>
					</tr>
					<tr>
						<td>Update Email</td>
						<td><input  type='email' name='email' value='".$row['email']."' /></td>
					</tr>
					<tr>
						<td>Update Address Line 1</td>
						<td><input  type='text' name='add1' value='".$row['add1']."' /></td>
					</tr>
					<tr>
						<td>Update Address Line 1</td>
						<td><input  type='text' name='add2' value='".$row['add2']."' /></td>
					</tr>
					<tr>
						<td>http://youtube.com/</td>
						<td><input  type='text' name='youtube' value='".$row['youtube']."' /></td>
					</tr>
					<tr>
						<td>http://facebook.com/</td>
						<td><input  type='text' name='facebook' value='".$row['facebook']."' /></td>
					</tr>
					<tr>
						<td>https://plus.google.com/</td>
						<td><input  type='text' name='googleplus' value='".$row['googleplus']."' /></td>
					</tr>
					<tr>
						<td>https://twitter.com/</td>
						<td><input  type='text' name='twitter' value='".$row['twitter']."' /></td>
					</tr>
					<tr>
						<td>http://linkedin.com/</td>
						<td><input  type='text' name='LinkedIn' value='".$row['LinkedIn']."' /></td>
					</tr>
				</table>
			
			<center><button name='up_contact'>Save</button></center>
		</form>";
		
		if(isset($_POST['up_contact']))
		{
			$phn=$_POST['phn'];
			$email=$_POST['email'];
			$add1=$_POST['add1'];
			$add2=$_POST['add2'];
			$youtube=$_POST['youtube'];
			$facebook=$_POST['facebook'];
			$googleplus=$_POST['googleplus'];
			$twitter=$_POST['twitter'];
			$LinkedIn=$_POST['LinkedIn'];
			
			$up=$con->prepare("update contact set phn='$phn', email='$email', add1='$add1', add2='$add2', youtube='$youtube', facebook='$facebook', googleplus='$googleplus', twitter='$googleplus', twitter='$LinkedIn' ");
			
			if($up->execute())
			{
				echo"<script>alert('Contact Updated Successfully !!!')</script>";
				echo"<script>window.open('index.php?contact','_self')</script>";
			}
			else
			{
				echo"<script>alert('Contact Not Updated ...')</script>";
				echo"<script>window.open('index.php?contact','_self')</script>";
			}
			
		}
		
	}


	function add_FAQs()
	{
		include("inc/db.php");
		if(isset($_POST['add_FAQs']))
		{
			$que=$_POST['que'];
			$ans=$_POST['ans'];
			
			$check=$con->prepare("Select *from FAQs where que='$que'");
			$check->setFetchMode(PDO::FETCH_ASSOC);
			$check->execute();
			$count=$check->rowCount();
			
			if($count==1)
			{
				echo"<script>alert('FAQs Already Added !!!')</script>";
				echo"<script>window.open('index.php?FAQs','_self')</script>";
			}
			else
			{
				$add_FAQs=$con->prepare("insert into FAQs(que,ans) values('$que','$ans')");
				if($add_FAQs->execute())
				{
					echo"<script>alert('FAQs Added Successfully !!!')</script>";
					echo"<script>window.open('index.php?FAQs','_self')</script>";
				}
				else
				{
					echo"<script>alert('FAQs Not Added ...')</script>";
					echo"<script>window.open('index.php?FAQs','_self')</script>";
				}
			}
			
		}
	}

	
	function view_FAQs()
	{
		include("inc/db.php");
		
		$get_FAQs=$con->prepare("select * from FAQs");
		$get_FAQs->setFetchMode(PDO:: FETCH_ASSOC);
		$get_FAQs->execute();
		
		while($row=$get_FAQs->fetch()):
			
			echo "<details>
					<summary>".$row['que']."</summary>
					<form method='post' enctype='multipart/form-data'>
						<input  type='text' name='up_que' value='".$row['que']."' placeholder='Enter Question Here' />
						<input type='hidden' name='id' value='".$row['q_id']."' />
						<textarea name='up_ans' placeholder='Enter Answer Here'>".$row['ans']."</textarea>
						<center><button name='up_FAQs'>Update FAQs</button></center>
					</form>

				</details><br/>";
		
		endwhile;
		
		if(isset($_POST['up_FAQs']))
		{
			$que=$_POST['up_que'];
			$ans=$_POST['up_ans'];
			$id=$_POST['id'];
			
			$up_FAQs=$con->prepare("update FAQs set que='$que', ans='$ans' where q_id='$id' ");
			if($up_FAQs->execute())
			{
				echo"<script>alert('FAQs Updated Successfully !!!')</script>";
				echo"<script>window.open('index.php?FAQs','_self')</script>";
			}
			else
			{
				echo"<script>alert('FAQs Not Updated ...')</script>";
				echo"<script>window.open('index.php?FAQs','_self')</script>";
			}
			
			
		}
		
	}


	function about()
	{
		include("inc/db.php");
		
		$about=$con->prepare("select * from about");
		$about->setFetchMode(PDO:: FETCH_ASSOC);
		$about->execute();
		$row=$about->fetch();
		
		echo "<form method='post'>
				<textarea name='about'>".$row['about']."</textarea>
				<button name='up_about'>Save</button>
			</form>";
		
		if(isset($_POST['up_about']))
		{
			$info=$_POST['about'];
			
			$up_about=$con->prepare("update about set about='$info' ");
			if($up_about->execute())
			{
				echo"<script>alert('About Updated Successfully !!!')</script>";
				echo"<script>window.open('index.php?about','_self')</script>";
			}
			else
			{
				echo"<script>alert('About Not Updated ...')</script>";
				echo"<script>window.open('index.php?about','_self')</script>";
			}
			
		}
		
	}

















?>