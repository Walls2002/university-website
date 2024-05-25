<!DOCTYPE html>
<html>
<head>
	<!--Page title-->
	<title>Entrance Requirements | Larby Sy School</title>

	<!--Page global resources-->
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">
	<script src="../script/index2.js"></script>
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
<body onload="pageInit()">
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
	<!--Page header-->
	<div class="upper-bar">
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
		 	<li><a id="swtc6" href="faq.php">FAQ's<hr></a></li>
		 	<li><a id="swtc7" onclick="popup();" href="#">Sign in<hr></a></li>
		 </ul>
	</div>
	


</div>

	<!--Page body-->
	<div class="page-body">
		<div class="page-body-header">
			<div class="page-body-header-text">
				Entrance Requirements
			</div>
			<hr />
			<div class="page-body-header-image">
				<img src="../image/requirements-banner.jpg">
			</div>
			In general, anyone who completes the given requirements and passes the dean's interview may enroll in the Larby Sy College.
		</div>

		<div class="page-body-content">
			<div class="page-body-content-left">
				<div class="page-body-content-tabpane jscript">
					<button class="tab-buttons" onclick="openTab(event, 'Freshmen');" id="tab-button-default-open">Freshmen&ensp;&ensp;&ensp; <i class="fas fa-chevron-right"></i></button>
					<button class="tab-buttons" onclick="openTab(event, 'Transferee');">Transferee&ensp;&ensp;&ensp; <i class="fas fa-chevron-right"></i> </button>
					<button class="tab-buttons" onclick="openTab(event, 'Special');">ALS, Cross-Enrollees, Graduate students<i class="fas fa-chevron-right"></i></button>
				</div>
				<div class="page-body-content-tabpane html5">
					<ul>
						<li>
							<a class="tab-buttons active" href="#Freshmen">Freshmen</a>
						</li>
						<li>
							<a class="tab-buttons active" href="#Transferee">Transferee</a>
						</li>
						<li>
							<a class="tab-buttons active" href="#Special">ALS, Cross-Enrollees, Graduate students</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="page-body-content-right">
				<div id="Freshmen" class="page-body-content-tab">
					<div class="page-body-content-tabtitle">
						Freshmen requirements:
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Original Student Form 9 (SF9), also known as the <em>Student Report Card</em>, or previously Form 138 (F138)
							</li>
							<li>
								Photocopy of PSA Birth Certificate (bring original copy or transaction receipt for verification)
							</li>
							<li>
								Certificate of Good Moral Character
							</li>
							<li>
								Four (4) pcs. 2"x2" ID picture with full name and white background
							</li>
						</ul>
					</div>
					<div class="page-body-content-tabtitle">
						Freshmen qualifications:
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								General Weighted Average (GWA) of 80 or higher
							</li>
							<li>
								No failing grade on any subject on the submitted report card
							</li>
						</ul>
					</div>
				</div>
				<hr class="page-body-content-tab-sep"/>
				<div id="Transferee" class="page-body-content-tab">
					<div class="page-body-content-tabtitle">
						Transferee requirements:
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Letter of Honorable Dismissal
							</li>
							<li>
								Original Student Form 10 (SF10), also known as the Student's <em>Transcript of Records</em>, or previously Form 137 (F137)
							</li>
							<li>
								Photocopy of PSA Birth Certificate (bring original copy or transaction receipt for verification)
							</li>
							<li>
								Certificate of Good Moral Character
							</li>
							<li>
								Four (4) pcs. 2"x2" ID picture with full name and white background
							</li>
						</ul>
					</div>
					<div class="page-body-content-tabtitle">
						Transferee qualifications:
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								General Weighted Average (GWA) of 80 or higher
							</li>
							<li>
								No failing grade on any subject on the submitted report card
							</li>
						</ul>
					</div>
				</div>
				<hr class="page-body-content-tab-sep"/>
				<div id="Special" class="page-body-content-tab">
					<div class="page-body-content-tabtitle">
						ALS A&E / PEPT passers
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Photocopy of Diploma or Certificate of Completion
							</li>
							<li>
								Photocopy of Certificate of Ratings
							</li>
							<li>
								Photocopy of PSA Birth Certificate (bring original copy or transaction receipt for verification)
							</li>
							<li>
								Certificate of Good Moral Character
							</li>
							<li>
								Four (4) pcs. 2"x2" ID picture with full name and white background
							</li>
						</ul>
					</div>
					<div class="page-body-content-tabtitle">
						Cross-Enrollees
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Cross-enroll Permit from your school registrar
							</li>
							<li>
								Photocopy of PSA Birth Certificate (bring original copy or transaction receipt for verification)
							</li>
							<li>
								Four (4) pcs. 2"x2" ID picture with full name and white background
							</li>
						</ul>
					</div>
					<div class="page-body-content-tabtitle">
						Graduate students
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Original Student Form 10 (SF10), also known as the Student's <em>Transcript of Records</em>, or previously Form 137 (F138)
							</li>
							<li>
								Photocopy of PSA Birth Certificate (bring original copy or transaction receipt for verification)
							</li>
							<li>
								Four (4) pcs. 2"x2" ID picture with full name and white background
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Page footer-->
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
