<?php 

	function head_link()
	{
		include("inc/db.php");
		$get_name=$con->prepare("select * from contact");
		$get_name->setFetchMode(PDO:: FETCH_ASSOC);
		$get_name->execute();
		$row=$get_name->fetch();
		
		echo "<ul>
				<li><a href='https://www.facebook.com/".$row['facebook']."' target='_blank'><i class='fab fa-facebook'></i></a></li>
				<li><a href='https://www.twitter.com/".$row['twitter']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
				<li><a href='https://www.googleplus.com/".$row['googleplus']."' target='_blank'><i class='fab fa-google-plus-g'></i></a></li>
				<li><a href='https://www.youtube.com/".$row['youtube']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
				<li><a href='https://www.linkedin.com/".$row['LinkedIn']."' target='_blank'><i class='fab fa-linkedin-in'></i></a></li>
			</ul>";
		
	}

	
	function cat_menu()
	{
		include("inc/db.php");
		$get_cat=$con->prepare("select * from cat");
		$get_cat->setFetchMode(PDO:: FETCH_ASSOC);
		$get_cat->execute();
		
		while($row=$get_cat->fetch()):
			echo"<li><a href='#'><i>".$row['cat_icon']."</i>".$row['cat_name']."</a></li>";
		endwhile;
	}


	function home_cat()
	{
		include("inc/db.php");
		$get_cat=$con->prepare("select * from cat");
		$get_cat->setFetchMode(PDO:: FETCH_ASSOC);
		$get_cat->execute();
		
		while($row=$get_cat->fetch()):
			echo"<li>
					<a href='#'>
						<center>
							<i>".$row['cat_icon']."</i>
							<h4>".$row['cat_name']."</h4>
							<p>2</p>				
						</center>
					</a>
				</li>";
		endwhile;
		
	}


	function cart()
	{
		include("inc/db.php");
		
		echo "<div id='wrap'>
				<div id='crumb'>
					<span><a href='index.php'>Home</a></span> <b>></b> 
					<span>Delete Course</span>
				</div>
				<div id='cart'>
					<table cellspacing='0'>
						<tr>
							<th id='cart_f'>Name</th>
							<th>Instructor</th>
							<th>Language</th>
							<th>Lectures</th>
							<th>Price</th>
						</tr>
						<tr>
							<td id='cart_f'>
								<img src='images/slider/2.jpg' />
								<span><a href='#'>networking networking  networking</a></span>
								<b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>
							</td>
							<td id='cart_s'>Vaishnavi Bidaye</td>
							<td id='cart_t'>English</td>
							<td id='cart_t'>100</td>
							<td id='cart_e'>$120</td>
						</tr>
						<tr>
							<td id='cart_f'>
								<img src='images/slider/2.jpg' />
								<span><a href='#'>networking networking  networking</a></span>
								<b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>
							</td>
							<td id='cart_s'>Ms. Vaishnavi Shrikant Bidaye</td>
							<td id='cart_t'>English</td>
							<td id='cart_t'>100</td>
							<td id='cart_e'>$120</td>
						</tr>
						<tr>
							<td>
								<button><a href='index.php'>Keep Shopping</a></button>
								<button><a href='#'>Checkout</a></button>
							</td>
							<td></td>
							<td></td>
							<td style='text-align:right'>Amount Payable :</td>
							<td>$120</td>
						</tr>
					</table>
		
				</div><br clear='all' />
			  </div>";
		
	}


	function course_details()
	{
		include("inc/db.php");
		
		echo "
			<div id='course_left'>
				<img src='images/courses/ai_ml.jpg' />
				<div id='course_share'>
					<center>
						<div id='fb'><a href='#'><i class='fab fa-facebook-f'>Share</i></a></div>
						<div id='gp'><a href='#'><i class='fab fa-google-plus-g'>Share</i></a></div>
						<div id='tw'><a href='#'><i class='fab fa-twitter'>Share</i></a></div>
						<div id='wa'><a href='#'><i class='fab fa-whatsapp'>Share</i></a></div>
					</center>
				</div>
			</div>
			<div id='course_right'>
				<h2>Artificial Intelligence and Machine Learning </h2>
				<table>
					<tr>
						<td>Instructor</td>
						<td>Mr. John Sharma</td>
					</tr>
					<tr>
						<td>Enrolled By</td>
						<td>30 Students</td>
					</tr>
					<tr>
						<td>Level</td>
						<td>Advanced</td>
					</tr>
					<tr>
						<td>Language</td>
						<td>English</td>
					</tr>
					<tr>
						<td>Credits</td>
						<td>4</td>
					</tr>
				</table>
				<table>
					<div id='price'>
					
					</div>
				</table>
				
			</div><br clear='all'/>
			
			<div id='c_desc'>
				<h2>Course Details</h2>
				<p>Definitions of Artificial Intelligence, Artificial Intelligence Problems, Topics of Artificial Intelligence: Learning Systems, Knowledge Representation and Reasoning, Planning, Knowledge Acquisition,
				Intelligent Search, Logic Programming, Soft Computing, Management of Imprecision and Uncertainty,Production Systems: Traveling Salesman Problem, Water-Jug Problem, State Space Representation,State Space Search, Tic-Tac-Toe as a State Space, Branches of Artificial Intelligence.</p>
				
				<h2>Course Objectives </h2>
				<p>1. To facilitate the learners to1. Learn overview of classic Artificial Intelligence and basics of machine learning.<br>
				2. Understand various intelligent searches and knowledge representation.<br>
				3. Understand types of learning as well as machine learning.<br>
				4. Study applications in Artificial Intelligence and Machine Learning.</p>
				
				<h2>Course Outcomes</h2>
				<p>By taking this course, the learner will be able to –<br>
				1. Build fundamental knowledge of AI, its applications and solve classical AI problems using different
				AI Techniques<br>
				2. Apply intelligent search algorithms on AI problems.<br>
				3. Make use of Knowledge Management techniques of AI for reasoning.<br>
				4. Apply the appropriate supervised / unsupervised Machine Learning (ML) method to solve the given
				problem.<br>
				5. Apply and examine different topics with various methods of expert system, pattern recognition,
				natural language processing, nature inspired computing</p>
				
				<h2>Instructor</h2>
				<img src='images/user/teacher.jfif'>
				<p>Mr. John Sharma, MTech in Computer</p>
				<div id='course_share'>	
					<div id='fb'><a href='#'><i class='fab fa-facebook-f'></i></a></div>
						<div id='gp'><a href='#'><i class='fab fa-google-plus-g'></i></a></div>
						<div id='tw'><a href='#'><i class='fab fa-twitter'></i></a></div>
						<div id='wa'><a href='#'><i class='fab fa-whatsapp'></i></a></div>
				</div><br clear='all'/>
				<h2>Curriculum</h2>
				<ul>
					<li><i class='fas fa-video'></i><span>1. Introduction</span></li>
					<li><i class='fas fa-video'></i><span>2. Quick Overview</span></li>
					
				</ul>
			</div>
			<div id='c_rel'>
				<h2>Related Courses</h2>
				<ul>
					<li>
						<a href='#'>
							<img src='images/courses/oracle.jpg'>
							<p>Java</p><br clear='all'/>
						</a>
					</li>
					<li>
						<a href='#'>
							<img src='images/courses/nodejs.png'>
							<p>Node Js</p><br clear='all'/>
						</a>
					</li>
					
					
				
				</ul>
			</div><br clear='all'/>
			
			";
		
	}










?>