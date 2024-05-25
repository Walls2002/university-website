<?php 

session_start();
$conn=mysqli_connect("localhost","root","","student_data");

if(isset($_POST['submit']))
 {
	
	$email=$_POST['email'];
	$password=md5($_POST['password']);
		
		if($email!="" && $password!="")
		{
			$sql="SELECT * FROM login WHERE email='$email'AND password='$password'";
			$result=mysqli_query($conn,$sql);
			
			$count=mysqli_num_rows($result);

			

			if($count==1)
			{
				
				$_SESSION['password']=$password;

				while ($row = $result->fetch_assoc())
				{

					$_SESSION['firstname']=$row['firstname'];
					$_SESSION['lastname']=$row['lastname'];
					$_SESSION['bday']=$row['birthday'];
					$_SESSION['gender']=$row['gender'];
					$_SESSION['course']=$row['course'];
					$_SESSION['email']=$row['email'];
					
					
				}

			
				header("location:../student-profile");


			}
			else
			{
				$error="Wrong password or email!";
				$_SESSION['error2']=$error;	
				
			}
		}
		else
		{
			
			$error="Password and Email required!";
			$_SESSION['error2']=$error;	
			
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in | Larby Sy College</title>
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">
</head>
<body>
	<div id="upper-bar" class="upper-bar">
	<img class="nav-logo" src="../image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>
	
</div>




	<div class="main-login" >
		<div class="sub-login">
			<h1><i class="fas fa-user person"></i></h1>

			<h2>Student Portal</h2>
			<hr>
			<form method="POST" class="log-form" action="index.php">
			<table>
				<tr>
					<td><label>Email :</label></td>
					<td><input type="text" name="email" placeholder="*Email" class="log-input"></td>
				</tr>
				<tr>
					<td><label>Password :</label></td>
					<td><input type="password" name="password" placeholder="*Password" class="log-input"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Log in" name="submit" class="log-submit"></td>
					<td style="color: red;text-decoration:underline;">
					<?php 
					if (!empty($error)) 
					{	
						echo $error;
					} ?>
						
					</td>
				</tr>
			</table>


			</form>
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





