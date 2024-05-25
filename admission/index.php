<!DOCTYPE html>
<html>
<head>
	<!--Page title-->
	<title>Application Procedure | Larby Sy School</title>

	<!--Page global resources-->
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">
	<script src="../script/index.js">/* Try to load JavaScript file if present */</script>
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

<<div class="login" id="login">
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
				<li><a onclick="popup();" href="#">Sign in<hr></a></li>
			</ul>
		</div>
	</div>

	<!--Page body-->
	<div class="page-body">
		<div class="page-body-header">
			<div class="page-body-header-text">
				Application Procedure
			</div>
			<hr />
			<div class="page-body-header-image">
				
				<!--IMAGE HERE-->
			</div>
			On-site application and interviews are suspended for the S.Y. 2020-2021. All the procedures listed below shall be completed online.
		</div>

		<div class="page-body-content">
			<div class="page-body-content-left">
				<div class="page-body-content-tabpane jscript">
					<button class="tab-buttons" onclick="openTab(event, 'Process');" id="tab-button-default-open">Registration Process&ensp;&ensp;<i class="fas fa-chevron-right"></i></button>
					<button class="tab-buttons" onclick="openTab(event, 'Passers');">List of Passers;&ensp;&ensp;<i class="fas fa-chevron-right"></i></button>
				</div>
				<div class="page-body-content-tabpane html5">
					<ul>
						<li>
							<a class="tab-buttons active" href="#Process">Registration Process</a>
						</li>
						<li>
							<a class="tab-buttons active" href="#Passers">List of Passers</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="page-body-content-right">
				<div id="Process" class="page-body-content-tab">
					<div class="page-body-content-tabtitle">
						Registration steps:
					</div>
					<div class="page-body-content-tabtext">
						<ul>
							<li>
								Complete the documentary requirements needed for your type of student listed in <a href="../req" target="_blank">this page</a>.
							</li>
							<li>
								Submit your complete, scanned copy of requirements through email in the prescribed email address below:
								<ul>
									<li>
										For applications to the <strong>College of Engineering</strong>: lscao-coleng@lsc.edu.ph
									</li>
									<li>
										For applications to the <strong>College of Arts and Sciences</strong>: lscao-colartsci@lsc.edu.ph
									</li>
									<li>
										For applications to the <strong>College of Business and Accountancy</strong>: lscao-colacc@lsc.edu.ph
									</li>
									<li>
										For applications to <strong>Graduate Programs</strong>: lscao-gradstud@lsc.edu.ph
									</li>
								</ul>
							</li>
							<li>
								Wait for the reply email specifying your schedule of interview.
							</li>
							<li>
								Attend the scheduled interview at the exact date and time specified.
								<ul>
									<li>Applicants who need to re-schedule their interviews should contact their respective registrars at least five (5) business days before the scheduled date.</li>
									<li>Non-attendance to this interview will automatically result in wait-listing of the applicant.</li>
								</ul>
							</li>
							<li>
								After taking the interview, expect an email announcing your admission status to the college.
							</li>
							<li>
								Accepted applicants shall be sent a Pre-Enrollment Form, detailing your courses to be enrolled, assessed fees, and payment instructions.
							</li>
							<li>
								Submit a scanned copy of the Pre-Enrollment Form and receipts through email.
							</li>
							<li>
								Students will be sent details of their orientation upon enrollment. Attend this school orientation which will occur a week before the start of the school year. 
							</li>
						</ul>
					</div>
					<div class="page-body-content-tabtitle small">
						For any further inquiries, you may contact our admissions office through any of the options listed in our <a href="../contact">Contacts</a> page.
					</div>
				</div>
				<div id="Passers" class="page-body-content-tab">
					<div class="page-body-content-tabtitle">
						Official List of LSC Passers
					</div>
					<div class="page-body-content-tabtext">
						<input id="search-field" onkeyup="updateTable()" type="text" placeholder="Search for names ...">
						<table id="search-table">
							<tr class="search-table-header">
							  <th style="width:60%;">Applicant Name</th>
							  <th style="width:40%;">Status</th>
							</tr>
							<tr>
							  <td>Placido Penitente</td>
							  <td>PASSED</td>
							</tr>
							<tr>
							  <td>Juanito Pelaez</td>
							  <td>PASSED</td>
							</tr>
							<tr>
							  <td>Isagani de Leon</td>
							  <td>WAIT-LISTED</td>
							</tr>
							<tr>
							  <td>Angelo Gabriel Gwendolyne</td>
							  <td>PASSED</td>
							</tr>
							<tr>
								<td>Juan dela Cruz</td>
								<td>WAIT-LISTED</td>
							</tr>
							<tr>
								<td>Adrian Jewel Agorilla</td>
								<td>PASSED</td>
							</tr>
							<tr>
								<td>Gabriel Andres Ecleo</td>
								<td>PASSED</td>
							</tr>
							<tr>
								<td>Sean Jejomar Porras</td>
								<td>WAIT-LISTED</td>
							</tr>
							<tr>
								<td>Elseif Baroro</td>
								<td>PASSED</td>
							</tr>
							<tr>
								<td>Ounce Khlarysh Gonzales</td>
								<td>WAIT-LISTED</td>
							  </tr>
						  </table>
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
