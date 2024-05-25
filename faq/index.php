<!DOCTYPE html>
<html>
<head>
	<title>FAQS | Larby Sy School</title>
<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">
</head>

<script>
	var nav=document.getElementById("cont");
	window.onscroll=function(){myscroll()};
	function myscroll() 	
{
	
	if(document.documentElement.scrollTop > 150)
	{
		document.getElementById("drop-bar").style.top="0";
	}
	else
	{
		document.getElementById("drop-bar").style.top="-80px";
	}

	if(window.pageYOffset > 1300)
	{
		
		document.getElementById("cont").style.position="absolute";
		document.getElementById("cont").style.top="74%";
	}
	else
	{
		document.getElementById("cont").style.position="fixed";
		document.getElementById("cont").style.top="20%";
	}


	console.log(window.pageYOffset);
}



function popup()
{
	document.getElementById("login").style.display="flex";
}

function popout()
{
	document.getElementById("login").style.display="none";
}

function scroll()
{
	
}

</script>

<body>
<!-- ---------------------------------------------START---Dropdown HTML-------------------------------------- -->

<div id="drop-bar" class="drop-bar">
	<img class="dropdown-logo" src="../image/school-logo2.png"> 
	<div class="dropbar-list">
			<ul>
				<li><a href="../index.php">Home<hr></a></li>
				<li><a href="#">Admission<hr></a>
					<div class="drop-list2">
						<ul>
							<li><a href="../req">Requirements</a></li>
							<li><a href="../admission">Procedure</a></li>
						</ul>
	
						</div>
				</li>
				<li><a href="../courses">Academic<hr></a></li>
				<li><a href="../aboutus">About us<hr></a></li>
				<li><a href="../contact">Contacts<hr></a></li>
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
				<form method="POST" action="../login/index.php">
					<table>
						
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


					
					
					
					<a href="../Application-form">Sign up</a>
					</table>
				</form>
				
			</div>
		
	</div>


<!-- ---------------------------------------------End---log-in HTML-------------------------------------- -->

<div id="upper-bar" class="upper-bar">
	<img class="nav-logo" src="../image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>
	
</div>
<div id="lower-bar" class="lower-bar">
	<div class="lower-bar-left">
			<ul>
				<li><a id="swtc1" href="../index.php">Home<hr></a></li>
				<li ><a class="admin-list" id="swtc2" href="#">Admission&ensp;<i class="fas fa-chevron-right"></i><hr></a>
					<div class="drop-list">
	<ul>
		<li><a href="../req">Requirements</a></li>
		<li><a href="../admission">Procedure</a></li>
	</ul>
	
</div>
				</li>
				<li><a id="swtc3" href="../courses">Academic<hr></a></li>
				<li><a id="swtc4" href="../aboutus">About us<hr></a></li>
				<li><a id="swtc5" href="../contact">Contacts<hr></a></li>
			</ul>
	</div>
	<div class="lower-bar-right">
		 <ul>
		 	<li><a id="swtc6" href="../faq">FAQ's<hr></a></li>
		 	<li><a id="swtc7" onclick="popup();" href="#">Sign in<hr></a></li>
		 </ul>
	</div>
	
</div>


<div class="faq-body">
	<div class="title-questions">
		<h1 style="color: #01213c;">Frequently Asked Questions</h1>

		<div class="questions">
			
			<h2>What is Requirements?</h2>
			<h4>Regular student/Freshmen</h4>
			<ul>
				<li>Form 137</li>
				<li>Form 138</li>
				<li>Good Moral</li>
				<li>Birth Certficate</li>
				<li>2pcs 2x2 Picture(White background, formal attire)</li>
			</ul>
			<h4>Transfer Student</h4>
			<ul>
				<li>TOR(Transcript of Records)</li>
				<li>Hon.Dismissal</li>
				<li>Good Moral</li>
				<li>Birth Certificate</li>
				<li>2pcs 2x2 Picture(White background, formal attire)</li>
			</ul>
			<h4>Alternative Learning System (ALS)</h4>
			<ul>
				<li>ALS Certificate</li>
				<li>TOR(Transcript of Records)</li>
				<li>Birth Certificate</li>
				<li>2pcs 2x2 Picture(White background, formal attire)</li>
			</ul>
			
			<h2>Course Offered</h2>
			<h4>College of Arts and Science</h4>
			<ul>
				<li>BS Psychology</li>
				<li>BS Criminology</li>
				<li>BS Information Technology</li>
				<li>BS Computer Science</li>
			</ul>

			<h4>College of Business and Accountancy</h4>
			<ul>
				<li>BS Accountancy</li>
				<li>BS Hotel and Restaurant Management</li>
				<li>BS Entrepreneurship</li>
				<li>BS Tourism</li>
			</ul>

			<h4>College of Engineering</h4>
			<ul>
				<li>BS Mechanical Engineering</li>
				<li>BS Civil Engineering</li>
				<li>BS Electrical Engineering</li>
				<li>BS Industrial Engineering</li>
			</ul>
			<h4>Graduate Programs</h4>
			<ul>
				<li>Master in Business Administration</li>
				<li>Doctor in Business Administration</li>
				<li>MS Criminology</li>
				<li>MS Psychology</li>
			</ul>
			<h2>What Are the Entrance Exam Requirements?</h2>
			<h4>College Admission Test (CAT)</h4>
			<ol>
				<li>Two pieces 2×2 colored ID photos</li>
				<li>Larby Sy School Application Form</li>
			</ol>
			<h4>College Admission Test Schedule</h4>
			<p>Monday – Saturday (8:00 AM to 5:00 PM)</p>
			<h4>What is the coverage of College Entrance Test?</h4>
			<ul>
				<li>40 minutes in Math</li>
				<li>35 minutes in Science</li>
				<li>20 minutes in Filipino</li>
				<li>30 minutes in Logical Reasoning</li>
				<li>25 minutes in English</li>
			</ul>
		</div>
		
	</div>
	<div class="cont" id="cont">
		<h4>Do you have questions? kindly email us</h4>
		<input type="" name="" placeholder="*Name">
		<input type="" name="" placeholder="*Email">
		<textarea placeholder="*Message"></textarea>





	</div>
</div>
<div class="footer">
				<div class="quick-link">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="../admission">Admissions</a></li>
						<li><a href="../courses">Academic</a></li>
				
						<li><a href="../aboutus">About us</a></li>
						<li><a href="../contact">Contact us</a></li>
						<li><a href="../Application-form" >Sign in</a></li>
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



</body>
</html>