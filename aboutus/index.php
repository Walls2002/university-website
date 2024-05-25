<!DOCTYPE html>
<html>
<head>

	<title>About Us | Larby Sy School</title>
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">

</head>

<script>
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
}
function popup()
{
	document.getElementById("login").style.display="flex";
}

function popout()
{
	document.getElementById("login").style.display="none";
}
</script>

<style>
.wrapper
{
	display:grid;
	grid-template-columns: 50% 50%;
	grid-gap:.5em;
	
}
.box1
{
	text-align: justify;
	padding:  1em;
	
}
.box2
{
	
	text-align: justify;
	padding: 1em;

	
}
.box
{
	padding: 1em;
}

</style>




<body>
	
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

<div class="upper-bar">
	<img class="nav-logo" src="../image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>
</div>

<div class="lower-bar">
	<div class="lower-bar-left">
			<ul>
				<li><a href="../index.php">Home<hr></a></li>
				<li ><a class="admin-list" id="swtc2" href="#">Admission&ensp;<i class="fas fa-chevron-right"></i><hr></a>
					<div class="drop-list">
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
	<div class="lower-bar-right">
		 <ul>
		 	<li><a href="../faq">FAQ's<hr></a></li>
		 	<li><a href="#"onclick="popup();">Sign in<hr></a></li>
		 </ul>
	</div>
</div>

<!-- DITO KAYO MAG START NG MGA GAWA NIYO POOOOOOOOO TAPOS PABAGO NALANG NG FILE NAME NG FILE NATO HEHEHEH KAYA NIYO YAN -->

<h1 style="color:#01213c;text-align:left;margin-left:30px">About Us</h1>
<hr style="width:96%; height:2px; text-align:left; margin-left:30px; color:#bf9751; background-color:#bf9751;margin-bottom: 50px">

<div class="wrapper" style="margin-top:10px ; margin-left:30px; margin-right:30px">
	
<div class="box" style="grid-column:1/3">
	<h1 style="text-align: center; margin-bottom:40px; color:#01213c; font-family:Graduate;letter-spacing: 30px">HISTORY</h1>
</div>
	<div class="box1">
		
			<img src="../image/school-profile.jpg" width="350" height="230" style="float:left; margin-right:30px;margin-bottom: 20px;">
			<p>
				Larby Sy College started out as an ambition, and was built out of the founder’s dream, Dr. Larby Jace Silvestre Mendoza, the current president of the institution, in 2020 with the support of the respected association from the Department of Technology in Quezon City University.
The College was founded upon the enactment of the Ordinance No. 0000, approved by Juan Dela Cruk, the mayor of the City of Quezon in March 2020, allocating P4M to establish the college.
The Board of Regents, which is the governing body of the University, was formally formed in the same year as Mayor Juan Dela Cruk appointed its members. The university regents were sworn into office on 9th of January 2021 which eventually conducted its first official board meeting and the election of its officers on 2nd of February 2021 at the Quezon City Hall. The composition of the first Board of Regents were: Dr. Larby Jace Silvestre Mendoza, the President of founder and current President of Larby Sy College; Juan Dela Cruz, CHED Comissioner; Juan Dela Cruk, the current Mayor of Quezon City; Juan Dela Crux, the President of Alumni Association. Dr. Larby Jace Mendoza was elected as LSC’s pioneer president, endowed with a herculean task of charting the roots of excellence that was to be the Pamantasan that is known today.


			</p>
	</div>
	

	<div class="box2" style="text-align: justify;">
		<p>
			And as solemnly endeared and inscribed by every QCU member to his heart, the University formally opened the University College on Monday, 30 February 2021 with the outstanding and bright scholars carefully selected from the upper 10% of the various public high schools in Quezon. And upon the years of the establishment of the educational institution. The College prove that the students and graduates nurtured their talents, them being accepted and hired by known industries in our country as well as foreign companies.


		</p>
		<img src="../image/oxford.jpg" width="100%" height="350px">

	</div>

	</div>

	

	<div class="about-founders">
		<hr>

		<div class="founders">
			<h2 class="founders-title">Founders</h2>
			<div class="founders-image">
				<img src="../image/jomar.jpg">
				<img src="../image/larby.jpg">
				
			</div>
			<div class="found-names">
				<p>Dr. Jomar Ariate</p>
				
				<p>Dr. Larby S, Mendoza</p>

			</div>
		</div>

		<div class="belief">
			<div class="mission">
				<h2>Mission</h2>
				<p>
					LSC Providing Community Of Holistically Developed 21st Century Skilled and Values Laden Individuals Living Out A Life Committed To Serve The Filipino Society And Contribute To The World’s Community. 
				</p>
			</div>

			<div class="vission">
				<h2>Vission</h2>
				<p>
					A Highly Esteemed Educational Institution With Its Merit In Advancement Of Technology And Cultivation Of Talents And Skills.
				</p>
			</div>

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
						<li><a href="../Application-form">Sign in</a></li>
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