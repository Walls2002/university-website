
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {

if (isset($_POST['submit'])) 
{
	
	if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['body_msg']))
        {
            $error_message="fill out all";
        }
        else
        {
        	$conn = new mysqli('localhost', 'root', '', 'student_data');
        	
        	$sql = $conn -> prepare("INSERT INTO message_db(name,email,message) VALUES ( ?, ?, ?)");
        	$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['body_msg'];

			$sql -> bind_param("sss", $name, $email, $message);


			if($sql -> execute())
             {	 
             	
                 $confirm="Message Sent!";
             }
        }
}



}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Larby Sy School</title>
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">
	

</head>
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




<div class="contact-main">
<h1 style="color: #01213c;">Contact Us</h1>
	<div class="cont-sub">
		<div class="cont-left">
		<h3>Send Message</h3>
		<hr>
			<div class="error">
			<h3><?php if (!empty($error_message)) 
			{
				echo $error_message;
			} ?>
			</h3>
			<h4><?php if (!empty($confirm))
			 {
				echo $confirm;
			} ?></h4>
		</div>
			<form method="POST" action="index.php">
			<input placeholder="Name" id="name" class="cont-name" type="text" name="name">
			<input placeholder="E-mail" class="cont-email" type="text" name="email">
			<textarea placeholder="Message" class="cont-mess" name="body_msg"></textarea>
			<input type="submit" name="submit" class="cont-submit">
			</form>
		</div>
		<div class="cont-right">
				


		<h4>If you have concerns, kindly message us in facebook</h4>
			<button class="cont-fb"><img src="../image/icon-fb.png"></button>
			<hr>
			<h4>Or</h4>
			<button class="cont-gmail"><img src="../image/icon-google.png"></i></button>
			<button class="cont-twitter"><img src="../image/icon-twitter.png"></button>
			<button class="cont-link"><img src="../image/icon-link.png"></button>
			

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
						<li><a href="../contact.">Contact us</a></li>
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