<?php 
session_start();
 ?>
<!-- INDEX -->

<!DOCTYPE html>
<html>
<head>

	<title>Home | Larby Sy School</title>
	<link rel="icon" href="image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="style/fonts.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/media.css">

</head>
<script src="script/script.js"></script>

<body>
	
<!-- ---------------------------------------------START---Dropdown HTML-------------------------------------- -->

<div id="drop-bar" class="drop-bar">
	<img class="dropdown-logo" src="image/school-logo2.png"> 
	<div class="dropbar-list">
			<ul>
				<li><a href="index.php">Home<hr></a></li>
				<li><a href="#">Admission<hr></a>
					<div class="drop-list2">
						<ul>
							<li><a href="req">Requirements </a></li>
							<li><a href="admission">Procedure</a></li>
						</ul>
	
						</div>
				</li>
				<li><a href="courses">Academic<hr></a></li>
				<li><a href="aboutus">About us<hr></a></li>
				<li><a href="contact">Contacts<hr></a></li>
			</ul>
			
	</div>
	<i class="fas fa-bars"></i>
</div>

<!-- ---------------------------------------------END---Dropdown HTML-------------------------------------- -->


<!-- ---------------------------------------------START---log-in HTML-------------------------------------- -->
  
	<div class="login" id="login">
		<i onclick="popout();" class="fas fa-times login-exit"></i>
			<div class="login-form">
				
				
				<h1><i class="fas fa-user"></i></h1>
				<h2>Student Portal</h2>
				<form method="POST" action="login/index.php">
					<table>
						<tr>
							<?php   ?>
						</tr>
						<tr>
							<input type="text" name="email" placeholder="Email">
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Password">
						</tr>
						<tr>
							<input type="submit" name="submit" value="submit" class="log-submit">
						</tr>
							<tr>
							<div>
							</div>
					
							 
						</tr>


					
					
					
					<a href="Application-form">Sign up</a>
					</table>
				</form>
				
			</div>
		
	</div>


<!-- ---------------------------------------------End---log-in HTML-------------------------------------- -->


<div id="upper-bar" class="upper-bar">
	<img class="nav-logo" src="image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>
</div>
<div id="lower-bar" class="lower-bar">
	<div class="lower-bar-left">
			<ul>
				<li><a id="swtc1" href="index.php">Home<hr></a></li>
				<li ><a class="admin-list" id="swtc2" href="#">Admission&ensp;<i class="fas fa-chevron-right"></i>

		<hr></a>
					<div class="drop-list">
						<ul>
							<li><a href="req">Requirements</a></li>
							<li><a href="admission">Procedure</a></li>
						</ul>
	
						</div>
				</li>
				<li><a id="swtc3" href="courses">Academic<hr></a></li>
				<li><a id="swtc4" href="aboutus">About us<hr></a></li>
				<li><a id="swtc5" href="contact">Contacts<hr></a></li>
			</ul>
	</div>
	<div class="lower-bar-right">
		 <ul>
		 	<li><a id="swtc6" href="faq">FAQ's<hr></a></li>
		 	<li><a id="swtc7" onclick="popup();" href="#">Sign in<hr></a></li>
		 </ul>
	</div>
	


</div>
<!--  

-->


<div class="main-body">
	
	<div id="upper-main" class="upper-main">
		<img class="main-logo" src="image/school-logo2.png">
		
		<h1 class="main-name">Larby Sy College</h1>
		<h4>Beacon of Knowledge</h4>
		<br>
		<br>
		<br>
		<br>
		<br>
		<a href="Application-form"><button>Apply Now</button></a>
	</div>
	<div class="mid-main">
			
			<div class="intro">
				<h1 class="greetings">Welcome to Larby S College</h1>
				
				<div id="sec1" class="sec1">
					<div class="sec1-left">
						<h2>Apply now!</h2>
						<h4>WELCOME TO LARBY SY COLLEGE!</h4>
						<p>Larby Sy College is ready for distance education and is now accepting enrollments for  A.Y 2020-2021. In this uncertain times, strive for certainly.</p>
						<a href="#"><button>Apply now</button></a>
					</div>

					<div class="sec1-right">
						<img class="apply-pic" src="image/apply-pic.jpg">
					</div>
					
				</div>


				<div  id="sec2" class="sec2">
					<div class="sec2-left">
						<img class="sec2-pic" src="image/about-us-pic.jpg">
					</div>
					<div class="sec2-right">
						<h2>About us</h2>
						<h4>What is LSC?</h4>
						<p>The school started with only 22 students and in the succeeding years tripled each year’s enrollment. As the population increases, additional facilities, classrooms and equipment were provided to maintain good and quality education.</p>
						<a href="aboutus"><button >See more</button></a>
					</div>
				</div>
				<div  id="sec3" class="sec3">
					<div class="sec3-left">
						<h2>Programs</h2>
						<h4>What Programs LSC have?</h4>
						<p>LSC Have a lot of Courses/Program, click the button to see that program list</p>
						<a href="courses"><button>Courses</button></a>
					</div>
					<div class="sec3-right">
						<img class="sec3-pic" src="image/course.jpg">
						
					</div>
					
				</div>
			    

			   
			</div>

			  			<div class="middle-main">
							<div class="mid-column1">
							<div class="announce">
								<h2><i class="fas fa-bullhorn" ></i>Announcements</h2>
								<p><a href="#">Happy New Year LCS's ! 😊

Please be guided by the calendar of activities for the month of January posted below. One of the activities is the 2nd Qtr Issuance of Cards/Parent-Teacher Conference.
Save the date!
Thank you.</a></p>
							
								<p><a href="#">Summer Programs 2021

MUSIC/ ARTS 
Guitar lessons
1 hr per session/individual

Voice Lessons
1 hr per session/individual

Flute Lessons
1 hr per session/individual

String Ensemble
2 hr per session

ACADEMIC ADVANCEMENT

Journalism

SPORTS 

Taekwondo (Beginner)
12 sessions

Taekwondo (Colored Belts)
18 sessions

Basketball Clinic
 
Volleball Clinic

Special Course/Classes

Ballet Classes
baby ballet
basic ballet
12 session</a></p>
							
								<p><a href="#">Practice for the Recognition for Honor of Grades </a></p>

								<p><a href="#">Baccalaureate Mass</a></p>
							</div>

							
								<div class="slide-show">
									<div class="slides">
										<img id="first-slide"class="first-slide" src="image/slide2.jpg">
										<img src="image/slide1.jpg">
										<img src="image/slide3.jpg">
										<img src="image/slide4.jpg">
									</div>
									
									<div class="mnl-bar">
										<div onclick="slide1();" id="btn1" class="mnl-btn"></div>
										<div onclick="slide2();" id="btn2" class="mnl-btn"></div>
										<div onclick="slide3();" id="btn3" class="mnl-btn"></div>
										<div onclick="slide4();" id="btn4" class="mnl-btn"></div>
									</div>
									
								</div>
							</div>

							<div class="mid-column2">
							<div class="news">
							<h2><i class="far fa-file"></i>News</h2>
							<ul>
								<li><a href="#">LSC Celebrates The Feast of Immaculate Conception 2021</a></li>
								<li><a href="#">LSC Celebrates Bonifacio Day 2021</a></li>
								<li><a href="#">LSC 34rd Foundation New Schedule of Activities</a></li>
								<li><a href="#">Introducing LSC' Hardworking Medical Team</a></li>
								<li><a href="#">Virtual Parents' Orientation (A.Y. 2020-2021)</a></li>
								<li><a href="#">LSC Releases Learning Continuity Plan for A.Y. 2020-2021</a></li>
								
							</ul>
							</div>
							<div class="events">
								<h2><i class="far fa-star"></i></i>Events</h2>
								<ul>
									<li><a href="#">Cat Graduation</a></li>
									<li><a href="#">Practice for the Recognition program for Honors of Students</a></li>
									<li><a href="#">Recognation Program for Honor Pupils of Students</a></li>
								</ul>
							</div>
						</div>




						
			</div>




			<div class="footer">
				<div class="quick-link">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="admission">Admissions</a></li>
						<li><a href="courses">Academic</a></li>
						<li><a href="aboutus">About us</a></li>
						<li><a href="contact">Contact us</a></li>
						<li><a href="Application-form" >Sign in</a></li>
					</ul>
				</div>
				<div class="contact-us">
					<h2>Talk to us</h2>
					<ul>
						<li><span>Email:</span> larby_admissions@gmail.com</li>
						<li><span>Tel No:</span> +1202-555-0353 / +1202-555-0784</li>
						<li><span>Address:</span>(678) 625-81615388 Wapakonata Trl SW Oxford, Georgia(GA), 30054</li>

					</ul>
					
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.587485057879!2d-83.8791490854544!3d33.719621642633726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5cbc498efd885%3A0xdad87ba39fc5390e!2s625%20Wapakonata%20Trail%20%23678%2C%20Oxford%2C%20GA%2030054%2C%20USA!5e0!3m2!1sen!2sph!4v1607146837144!5m2!1sen!2sph" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
				</div>
				
			</div>
			<div class="footer-2">
				<h5>&#169; Copyright 2020 Larby Sy College</h5>
			</div>
	</div>




</div>
 






</body>




</html>